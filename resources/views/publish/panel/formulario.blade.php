<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/css/form.css">
    <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');
        main {
            margin: 0 10%;
            border-style: solid;
            border-width: 1px;
            border-radius: 10px;
        }
        
        .color-titulos {
            font-size: 1.5rem!important;
        }
        
        .p-padrao {
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            margin: 0;
        }
        
        #img-header {
            display: flex;
            justify-content: center;
        }
        /*selection de idiomas*/
        
        #idiomas {
            display: flex;
            margin-top: 1rem;
            flex-direction: row;
            align-items: center;
            justify-content: end;
        }
        
        .idiomas {
            display: flex;
        }
        
        .idiomas img {
            width: 24px;
            margin: 0 2px;
            cursor: pointer;
        }
        /*titulos*/
        
        .titulo-BR {
            font-size: 1.2rem;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            margin-bottom: 0.4rem;
        }
        
        @media (max-width:768px) {
            .titulo-BR {
                font-size: 1.4rem;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-weight: normal;
            }
            main {
                margin: 0;
                border-style: none;
                border-width: 1px;
                border-radius: 10px;
            }
        }
        
        @media (max-width:426px) {
            .titulo-BR {
                font-size: 1.2rem!important;
                margin-top: 2rem;
                font-family: 'Roboto', sans-serif;
                font-weight: normal;
                margin-bottom: 0.4rem;
            }
        }
        /*formulario*/
        
        #form {
            margin: 1rem 6.5%;
            border-style: solid;
            border-width: 1px;
            border-radius: 5px;
            padding: 1rem;
        }
        
        label {
            margin: 1rem 1rem !important;
        }
        
        input {
            border-radius: 4px;
            padding: 7px;
            font-size: 15px;
        }
        
        .nome-input {
            width: 20rem;
        }
        
        .form-titulo {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .nomecontatoemail {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: row;
        }
        
        .paiscidade {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: row;
        }
        
        @media (max-width:426px) {
            input {
                width: 100% !important;
                margin: 0rem 1rem;
            }
            .nomecontatoemail {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
            }
            .paiscidade {
                display: flex;
                margin: 0;
                flex-wrap: wrap;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
            }
            #form {
                margin: 1rem 0;
                border-style: solid;
                border-width: 1px;
                border-radius: 5px;
            }
            .fix-div {
                width: 89%;
                margin-top: 1rem;
               
            }
        }
        /*seção de avalicao por checkbox*/
        
        .radios {
            margin-top: 2rem;
            padding: 1rem;
        }
        
        .topicos {
            padding: 1rem;
            border-radius: 5px;
            border-style: solid;
            border-width: 1px;
            margin: 0 20.0%;
        }
        
        .topicos-opcoes {
            display: flex;
            justify-content: space-around;
        }
        
        .topico-opcoes-label {
            margin: 0 !important;
            font-family: 'Roboto', sans-serif;
        }
        
        @media (max-width:426px) {
            .topicos {
                padding: 0;
                border-radius: 5px;
                border-style: none;
                border-width: 1px;
                margin: 0;
            }
            .radios {
                padding: 0;
            }
            .topicos-opcoes-mobile-fix {
                display: flex;
                align-items: center;
                margin: 0 1rem;
                flex-direction: column;
            }
            .radio-titulo {
                font-size: 25px;
                text-align: center;

            }
            /*area de criticas*/
        }
        .radio-titulo {
                font-size: 25px;
                text-align: center!important;
                margin-bottom: 2rem;
            }
        .criticas {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .criticas input {
            width: 50%;
            height: 4rem;
        }
        
        .button-confirmar {
            background-color: #1EE633;
            color: white;
            border-style: none;
            box-shadow: 1px 1px 1px 1px;
            margin-top: 1rem;
            font-size: 1.3rem;
            transition: 0.5s;
        }
        
        .button-confirmar:hover {
            background-color: #14FC6D;
        }
        
        @media (max-width:426px) {
            textarea {
                width: 90%;
            }
        }
    </style> -->
</head>

<body>
    <main>
        <!--Img Teatro-->
        <section id="img-header">
        <a href="https://teatroamazonas.com.br/">
            <img src="/img/teatro img.png" a  alt="">
        </a>
        </section>
        <!--Idiomas div-->
        <section id="idiomas">
            <p class="p-padrao idioma-text">Idioma :</p>
            <section class="idiomas">
                <img class="portugues" src="/img/bandeirabrasil.png" alt="">
                <img class="ingles" src="/img/bandeira-estados-unidos.webp" alt="" srcset="">
                <img class="espanhol" src="/img/espanhabandeiraxx.webp" alt="" srcset="">
            </section>
        </section>
        <!--Titulo 1-->
        <section id="titulos">
            <h2 style="margin-bottom:2rem;" class="Idioma-titulo titulo-BR color-titulos">Gostaríamos de obter seu grau de satisfação em relação à experiência de conhecer nosso maior patrimônio histórico e cultural. Vamos lá?</h2>
        </section>
        <!--Form-->
      
        <form class="ui form" method="POST" accept="/formularioSave" enctype="multipart/form-data">
        @csrf



            <h2 class="p-padrao form-titulo color-titulos titulo-form">FORMULÁRIO</h2>
            <!--Form input Nome Contato Email-->
            <section class="nomecontatoemail">
                <section class="fix-div">
                    <label for="nome" class=" nome-form p-padrao nome-input">Nome:</label>
                    <input type="text" id="nome" class="nome-input"  name="nome" required>
                </section>
                <section class="fix-div">
                    <label for="tel" class=" contato-form p-padrao">Contato:</label>
                    <input type="tel" id="tel"  name="tel" required>
                </section>
                <section class="fix-div">
                    <label for="email" class="email-form p-padrao">E-mail:</label>
                    <input type="email" id="email"  name="email" required>
                </section>
            </section>
            <!--Form Pais Cidade-->
            <section class="paiscidade">
                <section class="fix-div">
                    <label for="pais" class=" pais-form p-padrao">Pais:</label>
                    <input type="text" id="pais" name="pais" required>
                </section>
                <section class="fix-div">
                    <label for="cidade" class=" cidade-form p-padrao">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" required>
                </section>
            </section>
            <!--Input de escohas-->
            <section class="radios">
                <h2 class="p-padrao radio-titulo color-titulos">Com relação ao Teatro Amazonas, avalie os seguintes tópicos</h2>
                <section class="topicos">
                    <!--Topico Cafe-->
                    <section  id="cafe">
                        <h3 style="font-size:30px;" class=" cafe-idioma p-padrao form-titulo">Café</h3>
                        <p style="font-size:20px;" class=" atendimento-idioma p-padrao atendimento form-titulo">Atendimento</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-otimo" name="cafe_atendimento" value="otimo" class="outline custom-radio " >
                                <label class="otimo topico-opcoes-label" for="atendimento-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bom" name="cafe_atendimento" value="bom" >
                                <label for="atendimento-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-regular" name="cafe_atendimento" value="regular" >
                                <label class="topico-opcoes-label regular" for="atendimento-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-ruim" name="cafe_atendimento" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="atendimento-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao variedade form-titulo">Variedade de Produtos
                        </p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-otimo" name="cafe_variedade" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="variedade-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-bom" name="cafe_variedade" value="bom" >
                                <label for="variedade-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-regular" name="cafe_variedade" value="regular" >
                                <label class="topico-opcoes-label regular" for="variedade-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-ruim" name="cafe_variedade" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="variedade-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao cordialidade form-titulo">Cordialidade</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-otimo" name="cafe_cordialidade" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="cordialidade-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bom" name="cafe_cordialidade" value="bom" >
                                <label for="cordialidade-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-regular" name="cafe_cordialidade" value="regular" >
                                <label class="topico-opcoes-label regular" for="cordialidade-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-ruim" name="cafe_cordialidade" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="cordialidade-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao valores form-titulo">Valores</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-otimo" name="cafe_valores" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="Valores-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-bom" name="cafe_valores" value="bom" >
                                <label for="Valores-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-regular" name="cafe_valores" value="regular" >
                                <label class="topico-opcoes-label regular" for="Valores-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix" style="margin-bottom: 3rem;">
                                <input type="radio" id="Valores-ruim" name="cafe_valores" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="Valores-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>
                    <!--Topico Loja-->
                    <section id="loja">
                        <h3 style="font-size:30px; padding-top: 1rem;" class="p-padrao loja-idioma form-titulo">Loja</h3>
                        <p style="font-size:20px;" class="p-padrao atendimento form-titulo">Atendimento</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-otimo" name="loja_atendimento" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="atendimento-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-bom" name="loja_atendimento" value="bom" >
                                <label for="atendimento-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-regular" name="loja_atendimento" value="regular" >
                                <label class="topico-opcoes-label regular" for="atendimento-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-ruim" name="loja_atendimento" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="atendimento-loja-ruim">Ruim</label>
                            </section>

                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao variedade form-titulo">Variedade de Produtos
                        </p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-otimo" name="loja_variedade" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="variedade-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-bom" name="loja_variedade" value="bom" >
                                <label for="variedade-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-regular" name="loja_variedade" value="regular" >
                                <label class="topico-opcoes-label regular" for="variedade-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-ruim" name="loja_variedade" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="variedade-loja-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao cordialidade form-titulo">Cordialidade</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-otimo" name="loja_cordialidade" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="cordialidade-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-bom" name="loja_cordialidade" value="bom" >
                                <label for="cordialidade-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-regular" name="loja_cordialidade" value="regular" >
                                <label class="topico-opcoes-label regular" for="cordialidade-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-ruim" name="loja_cordialidade" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="cordialidade-loja-ruim">Ruim</label>
                            </section>

                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao valores form-titulo">Valores</p>
                        <section class="topicos-opcoes" style="margin-bottom: 4rem;">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-otimo" name="loja_valores" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="Valores-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-bom" name="loja_valores" value="bom" >
                                <label for="Valores-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-regular" name="loja_valores" value="regular" >
                                <label class="topico-opcoes-label regular" for="Valores-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-ruim" name="loja_valores" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="Valores-loja-ruim">Ruim</label>
                            </section>

                        </section>
                    </section>
                    <hr>
                    <!--Topico Bilheteria-->
                    <section id="bilheteria">
                        <h3 style="font-size:30px; padding-top: 1rem;" class="p-padrao bilheteria form-titulo">Bilheteria</h3>
                        <p style="font-size:20px;" class="p-padrao form-titulo atendimento">Atendimento</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-otimo" name="bilheteria_atendimento" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="atendimento-bilheteria-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-bom" name="bilheteria_atendimento" value="bom" >
                                <label for="atendimento-bilheteria-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-regular" name="bilheteria_atendimento" value="regular" >
                                <label class="topico-opcoes-label regular" for="atendimento-bilheteria-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-ruim" name="bilheteria_atendimento" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="atendimento-bilheteria-ruim">Ruim</label>
                            </section>

                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao eficiencia form-titulo">Eficiência</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-otimo" name="bilheteria_eficiencia" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="eficiencia-bilheteria-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-bom" name="bilheteria_eficiencia" value="bom" >
                                <label for="eficiencia-bilheteria-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-regular" name="bilheteria_eficiencia" value="regular" >
                                <label class="topico-opcoes-label regular" for="eficiencia-bilheteria-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-ruim" name="bilheteria_eficiencia" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="eficiencia-bilheteria-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao cordialidade form-titulo">Cordialidade</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-otimo" name="bilheteria_cordialidade" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="cordialidade-bilheteria-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-bom" name="bilheteria_cordialidade" value="bom" >
                                <label for="cordialidade-bilheteria-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-regular" name="bilheteria_cordialidade" value="regular" >
                                <label class="topico-opcoes-label regular" for="cordialidade-bilheteria-regular">Regular</label>
                            </section>

                            <section style="margin-bottom:4rem ;" class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-ruim" name="bilheteria_cordialidade" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="cordialidade-bilheteria-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>
                    <!--Topico Condutores-->
                    <section id="Condutores/Visitação">
                        <h3 style=" padding-top: 1rem;" class="p-padrao condutores form-titulo">Condutores/Visitação</h3>
                        <p style="font-size:20px;" class="p-padrao cordialidade form-titulo">Cordialidade</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao-otimo" name="condutores_cordialidade" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="cordialidade-visitacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao-bom" name="condutores_cordialidade" value="bom" >
                                <label for="cordialidade-visitacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao-regular" name="condutores_cordialidade" value="regular" >
                                <label class="topico-opcoes-label regular" for="cordialidade-visitacao-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao" name="condutores_cordialidade" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="cordialidade-visitacao">Ruim</label>
                            </section>

                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao postura form-titulo">Postura</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-otimo" name="condutores_postura" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="postura-visitacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-bom" name="condutores_postura" value="bom" >
                                <label for="postura-visitacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-regular" name="condutores_postura" value="regular" >
                                <label class="topico-opcoes-label regular" for="postura-visitacao-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-ruim" name="condutores_postura" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="postura-visitacao-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao contexto form-titulo">Contextualização Histórica
                        </p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-otimo" name="condutores_contex" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="contextualizacao-historica-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-bom"  name="condutores_contex" value="bom">
                                <label for="contextualizacao-historica-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-regular"  name="condutores_contex" value="regular">
                                <label class="topico-opcoes-label regular" for="contextualizacao-historica-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-ruim"  name="condutores_contex" value="ruim">
                                <label class="topico-opcoes-label ruim" for="contextualizacao-historica-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao valores form-titulo">Valores</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-otimo" name="condutores_valores" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="valores-visitacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-bom"name="condutores_valores" value="bom" >
                                <label for="valores-visitacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-regular"name="condutores_valores" value="regular" >
                                <label class="topico-opcoes-label regular" for="valores-visitacao-regular">Regular</label>
                            </section>

                            <section style="margin-bottom: 4rem;" class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-ruim"name="condutores_valores" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="valores-visitacao-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>
                    <!--Instalações-->
                    <section id="Instalacoes">
                        <h3 style="font-size:30px; padding-top: 1rem;" class="p-padrao instalacoes form-titulo">Instalações</h3>
                        <p style="font-size:20px;" class="p-padrao conforto form-titulo">Conforto</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-otimo" name="instalacoes_conforto" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="instalacoes-conforto-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-bom" name="instalacoes_conforto" value="bom" >
                                <label for="instalacoes-conforto-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-regular" name="instalacoes_conforto" value="regular" >
                                <label class="topico-opcoes-label regular" for="instalacoes-conforto-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-ruim" name="instalacoes_conforto" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="instalacoes-conforto-ruim">Ruim</label>
                            </section>

                        </section>
                        <p style="margin-top:4rem ;font-size:20px;" class="p-padrao sinalizacao form-titulo">Sinalização</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-otimo" name="instalacoes_sinalizacao" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="instalacoes-sinalizacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-bom" name="instalacoes_sinalizacao" value="bom" >
                                <label for="instalacoes-sinalizacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-regular" name="instalacoes_sinalizacao" value="regular" >
                                <label class="topico-opcoes-label regular" for="instalacoes-sinalizacao-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-ruim" name="instalacoes_sinalizacao" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="instalacoes-sinalizacao-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao limpeza form-titulo">Limpeza</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-otimo" name="instalacoes_limpeza" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="instalacoes-limpeza-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-bom" name="instalacoes_limpeza" value="bom" >
                                <label class="topico-opcoes-label" for="instalacoes-limpeza-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-regular" name="instalacoes_limpeza" value="regular" >
                                <label class="topico-opcoes-label regular" for="instalacoes-limpeza-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-ruim" name="instalacoes_limpeza" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="instalacoes-limpeza-ruim">Ruim</label>
                            </section>
                        </section>
                        <p style="margin-top:4rem;font-size:20px;" class="p-padrao conservacao form-titulo">Conservação</p>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-otimo" name="instalacoes_conservacao" value="otimo" >
                                <label class="otimo topico-opcoes-label" for="instalacoes-conservacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-bom" name="instalacoes_conservacao" value="bom" >
                                <label for="instalacoes-conservacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-regular" name="instalacoes_conservacao" value="regular" >
                                <label class="topico-opcoes-label regular" for="instalacoes-conservacao-regular">Regular</label>
                            </section>

                            <section style="margin-bottom: 3rem;" class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-ruim" name="instalacoes_conservacao" value="ruim" >
                                <label class="topico-opcoes-label ruim" for="instalacoes-conservacao-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
            <!--Area de Criticas e Confirmação-->
            <section class="criticas">
                <h4 class="titulo-BR color-titulos criticas-titulo">Críticas, Elogios ou Sugestões:</h4>
                <textarea name="criticas_elogios" id="" maxlength="254" cols="100" rows="10"></textarea>
                <input class="button-confirmar" type="submit" " value="Confirmar Avaliação">
            </section>
        </form>
        </section>
    </main>
    <<script src="/js/script.js"></script>
</body>

</html>