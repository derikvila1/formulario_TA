@extends("layouts.page")

@section('title')
Editais da Cultura
@endsection

@section('header')

@endsection

@section('content')
<script>
	document.getElementById('floating-editais').classList.add('active');
	document.getElementById('sidebar-editais').classList.add('active');
	document.getElementById('top-editais').classList.add('active');
</script>
<div class="ui container" style="padding-top: 20px;">

    <div class="ui large header">{{$edital->nome}}</div>

    <small style="color: #006e73"> <i class="calendar alternate icon"></i>
        <?php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        echo strftime(' %d de %B de %Y', strtotime($edital->publicacao));
        ?></small>



    <div class="">
        <p style="padding: 5px;">{{$edital->descricao}}</p>
    </div>
    <div style="padding-top: 32px;">
        <div class="container ui grid">
            <div class="eight wide column">
                <a type="button" class="ui blue button fluid large" style="text-transform: uppercase;" href="http://editais.cultura.am.gov.br/novo/wp-content/uploads/2021/05/EDITAL-n.-03-2021-CONTEUDO-VIRTUAL-.pdf" target="_blank"> ver edital</a>
            </div>

            <div class="eight wide column">
                <a class="positive ui button fluid large" style="text-transform: uppercase;" href="/subscribe/{{$edital->id}}">submeter edital</a>
            </div>


        </div>
    </div>
    <h2 style="text-transform: uppercase;" class="ui header" align="center">
        atualizações</h2>
    <!-- <div class="ui grid" > -->
    @foreach($doc as $att)

    <div style="padding:4px" class="fluid">
        <a class="ui button fluid" style="background: #006e73; border-radius: 30px; " href="http://editais.cultura.am.gov.br/novo/wp-content/uploads/2021/05/EDITAL-n.-03-2021-CONTEUDO-VIRTUAL-.pdf" target="_blank">
            <h3 class="ui header" style="text-transform: uppercase; color:white;"> {{$att->nome}}
            </h3>
        </a>
    </div>
    @endforeach
    <!-- </div> -->
</div>
@endsection