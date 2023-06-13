<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Repositories\QrHashRepository;

use \Carbon\Carbon;

class VerifyQr
{
   
    public function __construct(QrHashRepository $qrHashRepository) {
        $this->qrHashRepository = $qrHashRepository;
    }

    public function handle(Request $request, Closure $next): Response
    {
        

        return $next($request);
    }
}
