<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos');
        return view('listagem', ['produtos' => $produtos]);         //está enviado para 2 views

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




        public function mostra(){

            $id = 1; // precisamos pegar o id de alguma forma
            $resposta = DB::select('select * from produtos where id = ?', [$id]);
            if(empty($resposta)) {
                return "Esse produto não existe";
            }
            return view('detalhes')->with('p', $resposta[0]);
        }



            // $resposta = DB::select('select * from produtos where id = ?',[$id]);
            // return view('detalhes')->with('p', $resposta);



}
