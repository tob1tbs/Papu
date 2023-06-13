<?php

namespace App\Repositories\Interfaces;

interface QrHashRepositoryInterface
{

    public function getLoginHash($hash);

}