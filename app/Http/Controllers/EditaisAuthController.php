<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Editais;
use App\Models\EditaisEstados;
use App\Models\EditaisDocumentos;

class EditaisAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function publish(Request $request)
    {

        if ($request->search) {
            $publish =   Editais::select('editais.id', 'editais.nome', 'editais_estados.nome as estado', 'editais.descricao')
                ->where('editais.nome', 'LIKE', '%' . $request->search . '%')
                ->join('editais_estados', 'editais_estados.id', 'editais.estado')
                ->paginate(10);
        } else {
            $publish =   Editais::select('editais.id', 'editais.nome', 'editais_estados.nome as estado', 'editais.descricao')
                ->join('editais_estados', 'editais_estados.id', 'editais.estado')
                ->paginate(10);
        }

        return view("publish.panel.publish", compact('publish'));
    }

    public function new()
    {

        $status =  DB::connection('editais')->table('formulario')->get();
        return view("publish.panel.new", compact('status'));
    }

    public function newSave(Request $request)
    {

        $status =  DB::connection('editais')->table('editais_estados')->get();
        $json = json_encode($request->campo);

        //    dd($json);
        $document = auth()->user()->document;
        $publish = new Editais;

        $publish->nome = $request->nome;
        $publish->estado = $request->estado;
        $publish->descricao = $request->descricao;
        $publish->campos =  $json;
        $publish->publicacao = $request->publicacao;
        $publish->created_at = today();
        $publish->updated_at = today();

        $publish->save();



        return view("publish.panel.new", compact('status'));
    }



    public function ordinances()
    {
        return view("publish.panel.ordinances");
    }

    public function legislation()
    {
        return view("publish.panel.legislation");
    }

    public function subscribe($uuid, Request $request)
    {
        $userdata = [];
        if ($request == null) {
            $document = auth()->user()->document;
            $userdata = DB::table('aldairBlanc.usuarios')->select(
                'idCadastro',
                'NomeCompleto',
                'NomeSocialArtistico',
                'Endereco',
                'EnderecoComplemento',
                'Bairro',
                'Municipio',
                'CEP',
                'Telefone1',
                'Telefone2',
                'email',
                'cpf',
                'status',
            )->where('cpf', $document)->get()->first();
        }


        $editais = Editais::query()->where('id', $uuid)->get();
        $estados = EditaisEstados::query()->get();
        $editais->estado = $estados[1]->nome;
        // dd($editais);
        return view("publish.subscribe", compact('editais', 'userdata'));
    }

    public function accountability($publish, $uuid){
        return view('publish.panel.accountability');
    }

    public function rating($publish, $uuid){
        return view('publish.panel.rating');
    }

    public function ranking($publish, $uuid){
        return view('publish.panel.ranking');
    }
    public function license($publish, $uuid){
        
    


    $editais = Editais::query()->where('id', $publish)->get();
    $estados = EditaisEstados::query()->get();
    $editais->estado = $estados[0]->nome;

        return view('publish.panel.license',compact('editais'));
    }
    public function publishDetail($uuid) {
        $edital = DB::connection('editais')->table('editais')->where("id", $uuid)->first();
        // dd($edital);
        return view('publish.panel.detail', compact("edital"));

    }

//  FORMULARIO TA

// public function formulario()
// {

//     return view("publish.panel.formulario");
// }

// public function formularioSave(Request $request)
// {

//     $hoje =  date('Y-m-d H:i:m');
//         $uuid = Str::uuid();
//         $result = DB::connection('editais')->table('formulario')->where('uuid', $uuid)->first();

//         if ($result == NULL) {
//             DB::connection('editais')->table('formulario')->insert([
//                 'uuid' =>  $uuid,
//                 'nome' => $request->nome,
//                 'contato' => $request->tel,
//                 'email' => $request->email,
//                 'pais' => $request->pais,
//                 'cidade' => $request->cidade,
//                 'cafe_atendimento'=> $request->cafe_atendimento,
//                 'cafe_variedade' => $request->cafe_variedade,
//                 'cafe_cordialidade' => $request->cafe_cordialidade,
//                 'cafe_valores' => $request->cafe_valores,
//                 'loja_atendimento' => $request->loja_atendimento,
//                 'loja_variedade' => $request->loja_variedade,
//                 'loja_cordialidade' => $request->loja_cordialidade,
//                 'loja_valores' => $request->loja_valores,
//                 'bilheteria_atendimento' => $request->bilheteria_atendimento,
//                 'bilheteria_eficiencia' => $request->bilheteria_eficiencia,
//                 'bilheteria_cordialidade' => $request->bilheteria_cordialidade,
//                 'condutores_cordialidade' => $request->condutores_cordialidade,
//                 'condutores_postura' => $request->condutores_postura,
//                 'condutores_contex' => $request->condutores_contex,
//                 'condutores_valores' => $request->condutores_valores,
//                 'instalacoes_conforto' => $request->instalacoes_conforto,
//                 'instalacoes_sinalizacao' => $request->instalacoes_sinalizacao,
//                 'instalacoes_limpeza' => $request->instalacoes_limpeza,
//                 'instalacoes_conservacao' => $request->instalacoes_conservacao,
//                 'criticas_elogios' => $request->criticas_elogios,
//                 'created_at' => $hoje,
              
//             ]);
//             $msg_erro = "Formulário Cadastrado.";
//             return view("publish.panel.formulario", compact('msg_erro'));
//         } else {
//             $msg_erro = "Erro ao enviar formulário.";
//             return view("publish.panel.formulario", compact('msg_erro'));
//         }
//     }
}



