<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Denpa\Bitcoin\Facades\Bitcoind;

class BalanceController extends Controller
{
    public function bitcoin(){
        $node_btc = Bitcoind::request('getinfo');
        return $node_btc;
    }
}
