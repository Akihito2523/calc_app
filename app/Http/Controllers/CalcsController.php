<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($x, $calc, $y) {
        if ($calc === 'addition') {
            $result = $x + $y;
        }
        if ($calc === 'subtraction') {
            $result = $x - $y;
        }
        if ($calc === 'multiplication') {
            $result = $x * $y;
        }
        if ($calc === 'division') {
            $result = $x / $y;
        }
        return view('calcs', ['result' => $result]);
    }
}
