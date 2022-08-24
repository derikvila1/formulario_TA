@extends('layouts.dashboard')

@section('title')
    Editais - Novo
@endsection

@section('subtitle')
@endsection

@section('menu')
    basic minimal pushable
@endsection

@section('content')
    <div style="padding: 5rem;">
        <form class="ui form" method="POST" accept="/new" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="qWBTUOCfwiKgSjPNAVif1EYkUPRa9Mto0QXhC2Jj">
            <div class="field">
                <label>Titulo</label>
                <input type="text" name="nome" placeholder="Titulo do Edital">
            </div>
            <div class="field">
                <label>Estado</label>
                <div class="ui dropdown selection" tabindex="0"><select name="estado" id="estado">
                        <option value="">Seçecione um Estado</option>
                        <option value="1">Em Andamento: Inscrições Abertas</option>
                        <option value="2">Em Andamento: Inscrições Fechdas</option>
                        <option value="3">Finalizados</option>

                    </select><i class="dropdown icon"></i>
                    <div class="default text">Seçecione um Estado</div>
                    <div class="menu" tabindex="-1">
                        <div class="item" data-value="1">Em Andamento: Inscrições Abertas</div>
                        <div class="item" data-value="2">Em Andamento: Inscrições Fechdas</div>
                        <div class="item" data-value="3">Finalizados</div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>Decrição</label>
                <textarea name="descricao" cols="30" rows="10"></textarea>
            </div>

            <div class="field">
                <label>Data da Publicação</label>
                <input type="date" name="publicacao" placeholder="Descrição do Edital">
            </div>

            <div id="campos">
                <?php
                
                // $dados = json_decode($edital);
                $dados = json_decode($edital->campos);
                $cont = 0;
                ?>

                @foreach ($dados as $campos)
                    <div class="three fields">
                        <div class="field">
                            <label>Tipo do Campo</label>
                            <select name="campo[{{$cont}}][type]" class="ui dropdown">
                                <option value="{{$campos->type}}">{{$campos->type}}</option>
                                <option value="text">Texto</option>
                                <option value="number">Numero</option>
                                <option value="email">Email</option>
                                <option value="file">Arquivo para upload</option>
                                <option value="textarea">Area de Texto</option>
                            </select>
    
                        </div>
                        <div class="field">
                            <label>Titulo do campo</label>
                            <input type="text" name="campo[{{$cont}}][titulo]" id="titulo" value="{{$campos->titulo}}">
                        </div>
                        <div class="field">
                            <label>Nome do Campo</label>
                            <input type="text" name="campo[{{$cont}}][nome]" id="input-nome" value="{{$campos->nome}}">
                        </div>
                    </div>
                    @php
                        $cont++;
                        
                    @endphp
                @endforeach
            </div>


            <button class="ui inverted blue button" type="button" onclick="mais()">+</button>
            <button class="ui inverted red button" type="button" onclick="menos()">-</button>

            <button class="ui inverted orange  button" type="button" onclick="visualizar()">Visualizar Formulario</button>
            <br><br>

            <button class="ui inverted primary  button" type="submit">Enviar</button>
        </form>



        <div class="ui modal">
            <div class="header">
                <h2>Visualização formulario</h2>
            </div>
            <div class="content">



                <div class=" ui form" id="vForme"></div>

            </div>
        </div>
    </div>


    {{--OLA DEUSES DO EGITO HEHE  --}}
    <script>
        cont = '<?php echo $cont ?>';

        function visualizar() {
            html = '';
            console.log(cont);
            for (i = 0; i < cont; i++) {
                console.log($(`[name="campo[` + i + `][type]"] :selected`).val());
                if ($(`[name="campo[` + i + `][type]"] :selected`).val() == 'textarea') {
                    html += `<div class="field">
           <label> ` + $('input[name="campo[' + i + '][titulo]"]').val() + `</label>
           <textarea type="` + $('[name="campo[' + i + '][type]"] :selected').val() + `" name="vazio"></textarea>
           </div>`

                } else {
                    html += `<div class="field">
           <label> ` + $('input[name="campo[' + i + '][titulo]"]').val() + `</label>
           <input type="` + $('[name="campo[' + i + '][type]"] :selected').val() + `" name="vazio"></div>`
                }
            }

            $("#vForme").html(html);
            $('.ui.modal').modal('setting', 'transition', 'vertical flip')
                .modal('show');
        }


        function mais() {
            
            html = `<div class="three fields">
        <div class="field">
                    <label>Tipo do Campo</label>
                    <select name="campo[` + cont + `][type]" class="ui dropdown" >
                        <option value="">Selecione um campo</option>
                        <option value="text">Texto</option>
                        <option value="number">Numero</option>
                        <option value="email">Email</option>
                        <option value="file">Arquivo para upload</option>
                        <option value="textarea">Area de Texto</option>
                    </select>
                    
                </div>
                    <div class="field">
                        <label>Titulo do campo</label>
                        <input type="text" name="campo[` + cont + `][titulo]">
                    </div>
                    <div class="field">
                        <label>Nome do Campo</label>
                        <input type="text" name="campo[` + cont + `][nome]">
                    </div>
                </div>`;
            // info = document.getElementById("campos");
            // info.appendChild(html);

            cont++;
            $("#campos").append(html);
            $('.ui.dropdown')
                .dropdown();
        }

        function menos() {




            $("#campos .fields:last").remove();
            cont--;

        }

        $('.ui.dropdown')
            .dropdown();
    </script>
@endsection
