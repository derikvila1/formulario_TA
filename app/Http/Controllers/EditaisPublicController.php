<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class EditaisPublicController extends Controller
{
   

    
public function formulario()
{

    return view("publish.panel.formulario");
}


public function formularioSave(Request $request)
{

    $hoje =  date('Y-m-d H:i:m');
        $uuid = Str::uuid();
        $result = DB::table('formulario')->where('uuid', $uuid)->first();

        if ($result == NULL) {
            DB::table('formulario')->insert([
                'uuid' =>  $uuid,
                'nome' => $request->nome,
                'contato' => $request->tel,
                'email' => $request->email,
                'pais' => $request->pais,
                'cidade' => $request->cidade,
                'cafe_atendimento'=> $request->cafe_atendimento,
                'cafe_variedade' => $request->cafe_variedade,
                'cafe_cordialidade' => $request->cafe_cordialidade,
                'cafe_valores' => $request->cafe_valores,
                'loja_atendimento' => $request->loja_atendimento,
                'loja_variedade' => $request->loja_variedade,
                'loja_cordialidade' => $request->loja_cordialidade,
                'loja_valores' => $request->loja_valores,
                'bilheteria_atendimento' => $request->bilheteria_atendimento,
                'bilheteria_eficiencia' => $request->bilheteria_eficiencia,
                'bilheteria_cordialidade' => $request->bilheteria_cordialidade,
                'condutores_cordialidade' => $request->condutores_cordialidade,
                'condutores_postura' => $request->condutores_postura,
                'condutores_contex' => $request->condutores_contex,
                'condutores_valores' => $request->condutores_valores,
                'instalacoes_conforto' => $request->instalacoes_conforto,
                'instalacoes_sinalizacao' => $request->instalacoes_sinalizacao,
                'instalacoes_limpeza' => $request->instalacoes_limpeza,
                'instalacoes_conservacao' => $request->instalacoes_conservacao,
                'criticas_elogios' => $request->criticas_elogios,
                'created_at' => $hoje,
              
            ]);
            $msg_erro = "Formulário Cadastrado.";
            return view("publish.panel.formularioConcluido");
        } else {
            $msg_erro = "Erro ao enviar formulário.";
            return view("publish.panel.formulario", compact('msg_erro'));
        }
    }

    public function new()
    {

        $status =  DB::table('formulario')->get();
        return view("publish.panel.new", compact('status'));
    }
}
