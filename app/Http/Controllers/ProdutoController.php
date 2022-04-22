<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos');
        return view('listagem', ['produtos' => $produtos]);

        }

        //SERIA BOM RASTREAR OS COMANDOS ABAIXO PARA ENTENDER-LOS

        //1º método de enviar dados para view
        //
        //$produtos = DB::select('select * from produtos');
        //return view(’listagem’)->with(’produtos’, $produtos);

        //2º        $produtos = DB::select('select * from produtos');
        // return view('listagem')->withProdutos($produtos);

        //3º        $produtos = DB::select('select * from produtos');
        // return view('listagem', ['produtos' => $produtos]);

        //4º        $produtos = DB::select('select * from produtos');
        // $data = ['produtos' => $produtos];
        // return view('listagem', $data);

        //5º            $produtos = DB::select('select * from produtos');
        // $data = [];
        // $data['produtos'] = $produtos;
        // return view('listagem', $data);

}
