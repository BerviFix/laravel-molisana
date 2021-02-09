<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = config('pasta');

        $lunghe = [];
        $corte = [];
        $cortissime = [];

        foreach ($data as $key => $pasta) {

            $pasta["id"] = $key;
            
            if ($pasta["tipo"] == "lunga") {
                $lunghe[] = $pasta;
            } elseif ($pasta["tipo"] == "corta") {
                $corte[] = $pasta;
            } elseif ($pasta["tipo"] == "cortissima") {
                $cortissime[] = $pasta;
            }

        }

        return view('home', compact('lunghe', 'corte', 'cortissime'));
    }

    public function show($id)
    {
        $data = config('pasta');

        $prev = $id - 1;
        $next = $id + 1;

        if ($id == 0)  {
            $prev = count($data) - 1;
        } elseif ($id == count($data) - 1) {
            $next = 0;
        }

        return view('product', [
            'product' => $data[$id],
            'prev' => $prev,
            'next' => $next
        ]);
    }
}
