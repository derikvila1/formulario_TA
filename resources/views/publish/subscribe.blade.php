@extends("layouts.page")
@section('head')
<title>Editais da Cultura</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="/css/etapasperfil.css" rel="stylesheet">
<link href="/css/perfil_sub.css" rel="stylesheet">
@endsection

@section('header')

@endsection

@section('content')
<script>
    document.getElementById('floating-editais').classList.add('active');
    document.getElementById('sidebar-editais').classList.add('active');
    document.getElementById('top-editais').classList.add('active');
</script>
<div id="formulario" class="ui container" style="padding: 20px;">
    <div >
        <form class="ui form" id="formulario" action="" method="post" enctype="multipart/form-data">
            <div align="center">
            <h1   id="submeterprojeto" style="color: #006e73;font-size: 2rem;font-family: montserrat black;text-transform: uppercase;text-align-last: center;padding-top: 2rem;">
                submeter projeto</h1>
            </div>

            <div class="two fields">
                <div class="field">
                    <label>NOME</label>
                    <div class="field">
                        <div class="field">
                            <input
                            type="text"
                            name="shipping[nome-completo]"
                            placeholder="NOME COMPLETO"
                            />
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label>NOME SOCIAL</label>
                    <div class="field">
                        <div class="field">
                            <input
                            type="text"
                            name="shipping[nome-social]"
                            placeholder="NOME SOCIAL"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>CPF/CNPJ</label>
                <div class="field">
                    <div class="field">
                        <input
                        type="number"
                        name="shipping[address]"
                        placeholder="CPF/CNPJ"
                        />
                    </div>
                </div>
            </div>

            <div class="two fields">
                <div class="field">
                    <label>ESTADO</label>
                    <div>
                        <input type="text" name="shipping[estado]" placeholder="Estado">
                    </div>
                </div>

                <div class="field">
                    <div class="field">
                        <label>PAÍS</label>
                        <div>
                            <input type="text" name="shipping[país]" placeholder="País">
                        </div>
                    </div>
                </div>
                

                <div class="field">
                    <label>EMAIL</label>
                    <div class="field">
                        <div class="field">
                            <input type="email" name="shipping[email]" placeholder="Email" />
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="two fields">
                <div class="field">
                    <label>CONTATO</label>
                    <input
                        type="text"
                        name="card[number]"
                        maxlength="16"
                        placeholder="(xx) xxxxx-xxxx"
                    />
                </div>

                <div class="field">
                    <div class="field">
                        <label>ENDEREÇO</label>
                        <div class="field">
                            <div class="field">
                                <input
                                type="text"
                                name="shipping[endereco]"
                                placeholder="ENDEREÇO"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            

            <?php

            $dados = json_decode($editais);
            $dados = json_decode($dados[0]->campos);


            ?>

            @foreach ($dados as $campos)
            @if($campos->type === 'textarea')
                <div class="field">
                    <label>{{ $campos->titulo}}</label>
                    <textarea name="{{$campos->nome}}" cols="30" rows="10"></textarea>
                </div>
            @else
                <div class="field">
                    <label>{{ $campos->titulo}}</label>
                    <input type="{{ $campos->type}}" name="{{ $campos->nome}}" placeholder=" Digite o {{ $campos->titulo}}">
                </div>
            @endif
            @endforeach

            <div id="formulario">

            </div>

            <button class="ui inverted green button">Salvar</button>

        </form>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="/js/submeter.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>