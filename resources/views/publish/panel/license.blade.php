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
    <div class="ui container form" style="padding-top: 1rem">
        <div style="text-align: center">
            <h1>Fase de Habilitação</h1>
        </div>
        <div class="ui message">
            <i class="close icon"></i>
            <div class="header">
                Estado no Cadastro Estadual
            </div>
            <p>Em Analise</p>
        </div>
        <script>
            $('.message .close')
                .on('click', function() {
                    $(this)
                        .closest('.message')
                        .transition('fade');
                });
        </script>

        <h4 class="ui dividing header">Informações do Inscrito</h4>
        <div class="two fields">
            <div class="field">
                <label style=" text-transform: capitalize">nome</label>
                <div class="field">
                    <div class="field">
                        <input type="text" name="shipping[nome-completo]" placeholder="NOME COMPLETO"  readonly/>
                    </div>
                </div>
            </div>

            <div class="field">
                <label style=" text-transform: capitalize">nome social</label>
                <div class="field">
                    <div class="field">
                        <input type="text" name="shipping[nome-social]" placeholder="NOME SOCIAL" readonly />
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <label style=" text-transform: capitalize">CPF/CNPJ</label>
            <div class="field">
                <div class="field">
                    <input type="number" name="shipping[address]" placeholder="CPF/CNPJ" readonly/>
                </div>
            </div>
        </div>

        <div class="two fields">
            <div class="field">
                <label style=" text-transform: capitalize">Estado (UF)</label>
                <div>
                    <input type="text" name="shipping[estado]" placeholder="Estado" readonly>
                </div>
            </div>

            <div class="field">
                <div class="field">
                    <label style=" text-transform: capitalize">pais</label>
                    <div>
                        <input type="text" name="shipping[país]" placeholder="País" readonly>
                    </div>
                </div>
            </div>


            <div class="field">
                <label style=" text-transform: capitalize">e-amil</label>
                <div class="field">
                    <div class="field">
                        <input type="email" name="shipping[email]" placeholder="Email" readonly/>
                    </div>
                </div>
            </div>
        </div>

        <div class="two fields">
            <div class="field">
                <label style=" text-transform: capitalize">contato</label>
                <input type="text" name="card[number]" maxlength="16" placeholder="(xx) xxxxx-xxxx" readonly/>
            </div>

            <div class="field">
                <div class="field">
                    <label style=" text-transform: capitalize">endereço</label>
                    <div class="field">
                        <div class="field">
                            <input type="text" name="shipping[endereco]" placeholder="ENDEREÇO" readonly/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="ui dividing header">Documentação do Inscrito</h4>

        <table class="ui selectable green table">
            <thead>
                <tr>
                    <th>Documento</th>
                    <th class="center aligned">Ação</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Arquivo.pdf</td>
                    <td class="center aligned"><button class="ui button">Baixar</button></td>

                </tr>
            </tbody>
        </table>

        <?php
        
        $dados = json_decode($editais);
        $dados = json_decode($dados[0]->campos);
        
        ?>
        <h4 class="ui dividing header">Informações do Edital</h4>

        @foreach ($dados as $campos)
            @if ($campos->type === 'textarea')
                <div class="field">
                    <label>{{ $campos->titulo }}</label>
                    <textarea name="{{ $campos->nome }}" cols="30" rows="10" readonly></textarea>
                </div>
            @else
                <div class="field">
                    <label>{{ $campos->titulo }}</label>
                    <input type="{{ $campos->type }}" name="{{ $campos->nome }}"
                        placeholder=" Digite o {{ $campos->titulo }}" readonly>
                </div>
            @endif
        @endforeach
        <h2 class="ui dividing header">Habilitação</h2>
        <form action="">

            <div class="grouped fields">
                <label>Opção</label>
                <div class="field">
                    <div class="ui slider   checkbox">
                        <input type="radio" name="habilitacao" value="habilitado">
                        <label>Habilitado</label>
                    </div>
                </div>
                <div class="field">
                    <div class=" ui slider    checkbox">
                        <input type="radio" name="habilitacao" value="não habilitado" >
                        <label>Não habilitado</label>
                    </div>
                </div>


            </div>
            <div class="field">
                <label>Justificativa/Observação</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <input class="ui button" type="submit" value="Enviar">
        </form>
        <br><br>

    </div>
@endsection
