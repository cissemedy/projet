<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingPongControleur extends Controller
{
    public function ping()
{
    return view('ping', []); // Renvoyez la vue ping.blade.php
}

public function pong()
{
    return view('pong', []); // Renvoyez la vue pong.blade.php
}

}
