<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function sumForm()
    {
        return view('sumform');
    }

    public function sumResult()
    {
        $a = request('soa');
        $b = request('sob');
        $c = request('soc');
        if ($a == 0) {
            $x = -$c / $b;
            return view('calculated', [
                'result' => $x
            ]);
        } else {
            $d = ($b*$b/2) - $a*$c;

            if ($d < 0) {
                $x = 'vo nghiem';
                return view('calculated', [
                    'result' => $x
                ]);
            } else if($d == 0) {
                $x = -$b/$a;
                return view('calculated', [
                    'result' => $x
                ]);
            } else {
                $x1 = (-$b + sqrt($d))/$a;
                $x2 = (-$b - sqrt($d))/$a;
                return view('calculated', [
                    'x1' => $x1,
                    'x2' => $x2
                ]);
            }
        }

    }
}
