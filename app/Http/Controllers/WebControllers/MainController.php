<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\QrHashRepository;

use \Carbon\Carbon;

class MainController extends Controller
{
    //

    public function __construct(QrHashRepository $qrHashRepository) {
        $this->qrHashRepository = $qrHashRepository;
    }

    public function actionWebMain(Request $request) {
        if($request->has('hash') && !empty($request->hash)) {
            $verify_hash = $this->qrHashRepository->getLoginHash($request->hash);

            if(empty($verify_hash)) {
                return view('web.not_found');
            } 

            if(Carbon::now()->diffInHours(Carbon::parse($verify_hash->first_used)) > $verify_hash->expired_hours) {
                return view('web.not_valid');
            } else {
                return view('web.main');
            }
            
        } else {
            return view('web.scan');
        }
    }

    public function actionWebBook(Request $request) {
        if($request->has('hash') && !empty($request->hash)) {
            $verify_hash = $this->qrHashRepository->getLoginHash($request->hash);

            if(empty($verify_hash)) {
                return view('web.not_found');
            } 

            if(Carbon::now()->diffInHours(Carbon::parse($verify_hash->first_used)) > $verify_hash->expired_hours) {
                return view('web.not_valid');
            } else {
                return view('web.book');
            }
            
        } else {
            return redirect()->route('actionWebMain');
        }
    }

    public function actionWebGames(Request $request) {
        if($request->has('hash') && !empty($request->hash)) {
            $verify_hash = $this->qrHashRepository->getLoginHash($request->hash);

            if(empty($verify_hash)) {
                return view('web.not_found');
            } 

            if(Carbon::now()->diffInHours(Carbon::parse($verify_hash->first_used)) > $verify_hash->expired_hours) {
                return view('web.not_valid');
            } else {
                return view('web.games');
            }
            
        } else {
            return redirect()->route('actionWebMain');
        }
    }

    public function actionWebGamesView(Request $request) {
        if($request->has('hash') && !empty($request->hash)) {
            $verify_hash = $this->qrHashRepository->getLoginHash($request->hash);

            if(empty($verify_hash)) {
                return view('web.not_found');
            } 

            if(Carbon::now()->diffInHours(Carbon::parse($verify_hash->first_used)) > $verify_hash->expired_hours) {
                return view('web.not_valid');
            } else {
                $data = ['game_name' => $request->game];
                return view('web.games_view', $data);
            }
            
        } else {
            return redirect()->route('actionWebMain');
        }
    }
}
