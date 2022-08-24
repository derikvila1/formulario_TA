<?php
use App\Http\Controllers\PermissionController;
?>

<div class="item">
    <a class="ui logo icon image" href="/">
        <img src="/img/secretaria.svg">
    </a>
    <a href="/"><b>cultura.am</b></a>
</div>
<a class="item" href="/dashboard">
    <b>Início</b>
</a>

@if (PermissionController::checkPermission(101))
    <div class="item">
        <div class=" header">Administração</div>
        <div class="menu">
            <a class="item" href="{{ '//sso' . env('SESSION_DOMAIN') . '/permissions' }}">
                Permissões
            </a>
            <a class="item" href="{{ '//sso' . env('SESSION_DOMAIN') . '/users' }}">
                Usuários
            </a>
            <a class="item" href="{{ '//sso' . env('SESSION_DOMAIN') . '/users/create' }}">
                Adicionar novo usuário
            </a>
        </div>
    </div>
@endif

@if (PermissionController::checkPermission(101))
    <div class="item">
        <div class=" header">Editais</div>
        <div class="menu">
            <a class="item" href="/publish">
                Lista
            </a>
            <a class="item" href="/new">
                Adicionar novo edital
            </a>
        </div>
    </div>
@endif
<div class="item">
    <div class=" header">Conta</div>
    <div class="menu">
        <a class="item" href="{{ '//sso' . env('SESSION_DOMAIN') . '/user/profile' }}">
            Meu perfil
        </a>
        <a class="item" onclick="document.getElementById('logout').submit()">
            Sair
        </a>
    </div>
</div>
