<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    </style>
</head>
<br><br>

<body>
    <main>
        <br> <br>
        <!--Img Teatro-->
        <section id="img-header">
            <img src="/img/teatro img.png" alt="">
        </section>
        <br>
        <h1 class="titulo-BR" >AGRADECEMOS A SUA COLABORAÇÃO !</h1>
        <br><br><br>
        </section>
    </main>
    <<script src="/js/script.js"></script>
</body>

</html>