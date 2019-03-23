<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produto;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Produto::where([
            'ativo' => 'S'
        ])->get();
        return view('home.index', compact('registros'));
        // return view('home');
    }
    public function where($id = null)
    {
        if (!empty($id)) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
            ])->first();
            if (!empty($id)) {
                return view('home.index', compact('registro'));
            }
        }
        return redirect()->route('index');
    }
}
