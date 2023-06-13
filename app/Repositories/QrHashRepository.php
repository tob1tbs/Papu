<?php

namespace App\Repositories;

use App\Models\QrHash;
use Carbon\Carbon;

class QrHashRepository implements Interfaces\QrHashRepositoryInterface
{

    protected $qrHashModel;
    protected $qrHash;

    public function __construct(
        QrHash $qrHash,
    )
    {
        $this->qrHashModel = $qrHash;
    }

    public function getLoginHash($hash) {
        return $this->qrHashModel::where('login_qr', $hash)->first();
    }

}

?>