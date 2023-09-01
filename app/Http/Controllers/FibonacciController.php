<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    function fibonacci(Request $request)
    {
        $fibo = array(0, 1);
        $n1 = $request->n1;
        $n2 = $request->n2;
        if (isset($request['n1'])) {

            for ($i = $n1; $i <= $n2; ++$i) {
                $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
            }
            return view('fibonacci', compact('fibo'));
        } else {
            return view('fibonacci');
        }
    }
}
