<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');
        main {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: green;
            font-family: 'Poppins', sans-serif;
        }


        .container{
    display: flex;
    justify-content: center;
}


header {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    color: white;
    font-family: Cambria, Arial;
    background-color: rgb(172, 172, 0);
    border-radius: 20px;
    border: 20px;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}


.card{
    width: 500px;
    height: 600px;
    border-radius: 25px;
    margin-top: 100px;
    background-color: rgb(222, 222, 222);
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

.card2{
    width: 500px;
    height: 730px;
    border-radius: 25px;
    margin-top: 100px;
    background-color: rgb(222, 222, 222);
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}


.card3{
    width: 500px;
    height: 3160px;
    border-radius: 25px;
    margin-top: 100px;
    background-color: rgb(222, 222, 222);
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}



.card4{
    width: 500px;
    height: 600px;
    border-radius: 25px;
    margin-top: 100px;
    background-color: rgb(222, 222, 222);
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}







.imagem{
    display: flex;
    justify-content: center;
}






.teatro{
    width: 170px;
    height: 170px;
    border-radius: 50%;
    margin-top: 20px;
}






.text-main{
    text-align: center;
    color: rgb(0, 122, 0);
    font-weight: 600;
    font-size: 25px;
    font-family: 'Poppins', sans-serif;
}

.text-main2{
    text-align: center;
    color: white;
    font-weight: 600;
    font-size: 25px;
    font-family: 'Poppins', sans-serif;

}






.desc {
    font-family: 'Poppins', sans-serif;
    color: rgb(44, 34, 34);
    font-weight: 300;
    text-align: center;
    font-size: 15px;
}


.desc2 {
    font-family: 'Poppins', sans-serif;
    color: green;
    font-weight: 400;
    text-align: center;
    font-size: 20px;
}









.btn{
    background-color:rgb(39, 143, 39);
    display: inline-block;
    padding: 15px 35px;
    color: white;
    border-radius: 6px;
    font-size: 16px;
    border: 0;
    cursor: pointer;
    background-color: rgb(210, 210, 25);
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

.btn2{
    background-color:rgb(39, 143, 39);
    display: inline-block;
    padding: 20px 40px;
    color: white;
    border-radius: 6px;
    font-size: 20px;
    border: 0;
    cursor: pointer;
    background-color: rgb(210, 210, 25);
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}





.button{
    display: flex;
    justify-content: center;
    margin-top: 40px;
}





        .main__cta{
       width: 100%;
       margin: 60px 0;
      text-align: center;
}  

.main__cta h2{
    color: rgb(45, 135, 45);
    font-size: 40px;
}

.main__cta p{
    color: black;
    font-size: 19px;
    margin: 10px 0;
}

.main__cta button{
    background-color: rgb(210, 210, 25);
    display: inline-block;
    padding: 15px 40px;
    color: white;
    border-radius: 6px;
    font-size: 16px;
    border: 0;
}

        .color-titulos {
            font-size: 1.5rem!important;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 2%;
            font-size:40px
        }
        
    
        #img-header {
            display: flex;
            justify-content: center;
            background-color: rgb(184, 184, 0);
            border-radius: 6px;
        }

        /*titulos*/
        .titulo-BR {
            font-size: 40px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
            margin-bottom: 0.4rem;
            border box: 10px;
        }
        
        @media (max-width:768px) {
            .titulo-BR {
                font-size: 2rem;
                text-align: center;
                font-family: 'Poppins', sans-serif;
                font-weight: normal;
            }
            main {
                margin: 0;
                border-style: none;
                border-width: 40px;
                border-radius: 40px;
                color: green;
                background-color: green;
            }
        }
        
        @media (max-width:426px) {
            .titulo-BR {
                font-size: 1.2rem!important;
                margin-top: 2rem;
                font-family: 'Poppins', sans-serif;
                font-weight: normal;
                margin-bottom: 0.4rem;
            }
        }


form {
    font-family: 'Poppins', sans-serif;
}


   form div{
    display: flex;
    flex-direction: column;
    margin-bottom: -16px;
    padding: 20px;
   }


form input, form textarea {   8888888888888888888888888888888888888888888888888
    outline: unset;
    padding: 10px;
    min-width: 50px;
    border: 10px ;
    border-radius: 10px;
    border: 2px solid  rgb(0, 79, 0);
}

form input:focus {
    background-color: rgb(206, 206, 206);
}

form textarea:focus {
    background-color: rgb(206, 206, 206);
}

form input[type=submit] {
    background-color: rgb(206, 206, 206);
    color: white;
    cursor: pointer;
}

form label {
    margin-left: 10px;
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
            border-width: 20px;
            margin: 0 20.0%;
        }
        
        .topicos-opcoes {
            display: flex;
            justify-content: space-around;
            font-family: 'Poppins', sans-serif;
            display: flex;
            margin-bottom: -16px;
            padding: 20px;
            font-size: 20px;
        }
        
        .topico-opcoes-label {
            margin: 0 !important;
            font-family: 'Poppins', sans-serif;
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
                color: rgb(202, 202, 17);
            }
            .topicos-opcoes-mobile-fix {
                display: flex;
                align-items: center;
                margin: 0 1rem;
                flex-direction: column;
                color: rgb(202, 202, 17);
            }
            .radio-titulo {
                font-size: 25px;
                text-align: center;
                color: rgb(202, 202, 17);

            }
            /*area de criticas*/
        }
        .radio-titulo {
                font-size: 25px;
                text-align: center!important;
                margin-bottom: 2rem;
                color: rgb(202, 202, 17);
            }
        .criticas {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .criticas input {
            width: 50%;
            height: 4rem;
            width: 500px;
            padding: 20px;
        }
        
        .button-confirmar {
            background-color: #1EE633;
            color: white;
            border-style: none;
            box-shadow: 1px 1px 1px 1px;
            margin-top: 1rem;
            font-size: 1.3rem;
            transition: 0.5s;
            padding: 20px;
        }
        
        .button-confirmar:hover {
            background-color: #14FC6D;
            border-radius: 6px;
        }
        
        @media (max-width:426px) {
            textarea {
                width: 90%;
            }
        }

    .text-maincafé{
        text-align: center;
    color: rgb(0, 122, 0);
    font-weight: 600;
    font-size: 25px;
    font-family: 'Poppins', sans-serif;
    }

    .desccafé{
        font-family: 'Poppins', sans-serif;
    color: YELLOW;
    font-weight: 300;
    text-align: center;
    font-size: 19px;
    }

.btncafé{
    background-color:  rgb(0, 125, 0);
    display: inline-block;
    padding: 2px 15px;
    color: white;
    border-radius: 6px;
    font-size: 16px;
    border: 0;
    cursor: pointer;
    background-color: rgb(0, 125, 0);
    outline: unset;
    min-width: 50px;
}



     .mano{
        border: 10px green;
    }






















    </style>
</head>

<body>
    <main>

       


        <div class="container">
        <div class="card">
        <section id="img-header">
            <img src="/img/teatro img.png" alt="">
        </section>
            <div class="texto">
                <h2 class="text-main">Gostaríamos de obter seu feedback em relação à experiência de conhecer nosso maior patrimônio histórico e cultural.</h2>
                <p class="desc"> Antes, precisamos saber de algumas informações.</p>
            </div>
            <div class="button">
                <button type="button" class="btn">Vamos lá?</button>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="card2">
            <div class="texto">
                <header>
                <h2 class="text-main2">Preencha o nosso formulário</h2>
               </header>
                <p class="desc2">Nos informe seus dados.</p>
            </div>
            <div class="button">
                <button type="button" class="btn2">FORMULÁRIO</button>
            </div>
      <form>
            <div>
                <label>Nome</label>
                <input type="text" placeholder="Digite seu nome" name="nome" required/>
            </div>
            <div>
                <label>Contato</label>
                <input type="text" placeholder="Digite seu contato" name="contato" required/>
            </div>
            <div>
                <label>Email</label>
                <input type="text" placeholder="Digite seu email" name="email" required/>
            </div>
            <div>
                <label>Cidade</label>
                <input type="text" placeholder="Digite sua cidade" name="cidade" required/>
            </div>
            <div>
                <label>País</label>
                <input type="text" placeholder="Digite seu país" name="país" required/>
            </div>
        </form>
        </div>
    </div>



    
    <div class="container">
        <div class="card3">
            <div class="texto">
                <header>
                <h2 class="text-main2">Nos avalie</h2>
               </header>
                <p class="desc2">Nos informe a sua avaliação sobre nossos seguintes departamentos</p>
            </div>
            <div class="button">
                <button type="button" class="btn2">AVALIAÇÃO</button>
            </div>




                    <!--Topico Cafe-->
                    <div class="texto">
                        <h3 class="text-maincafé">Café</h3>
                    </div>
                    <div class="button">
                <button type="button" class="btncafé">ATENDIMENTO</button>
                   </div>
             <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-otimo" name="cafe_atendimento" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="atendimento-otimo">Ótimo</label><br>
                            </section>


                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bom" name="cafe_atendimento" value="bom" required>
                                <label for="atendimento-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>


                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-regular" name="cafe_atendimento" value="regular" required>
                                <label class="topico-opcoes-label regular" for="atendimento-regular">Regular</label>
                            </section>


                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-ruim" name="cafe_atendimento" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="atendimento-ruim">Ruim</label>
                            </section>
                        </section>





                        




                
                    <div class="button">
                <button type="button" class="btncafé">VARIEDADE</button>
                   </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-otimo" name="cafe_variedade" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="variedade-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-bom" name="cafe_variedade" value="bom" required>
                                <label for="variedade-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-regular" name="cafe_variedade" value="regular" required>
                                <label class="topico-opcoes-label regular" for="variedade-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-ruim" name="cafe_variedade" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="variedade-ruim">Ruim</label>
                            </section>
                        </section>









                        <div class="button">
                <button type="button" class="btncafé">CORDIALIDADE</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-otimo" name="cafe_cordialidade" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="cordialidade-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bom" name="cafe_cordialidade" value="bom" required>
                                <label for="cordialidade-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-regular" name="cafe_cordialidade" value="regular" required>
                                <label class="topico-opcoes-label regular" for="cordialidade-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-ruim" name="cafe_cordialidade" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="cordialidade-ruim">Ruim</label>
                            </section>
                        </section>






                        <div class="button">
                <button type="button" class="btncafé">VALORES</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-otimo" name="cafe_valores" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="Valores-otimo">Ótimo</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-bom" name="cafe_valores" value="bom" required>
                                <label for="Valores-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-regular" name="cafe_valores" value="regular" required>
                                <label class="topico-opcoes-label regular" for="Valores-regular">Regular</label>
                            </section>
                            <section class="topicos-opcoes-mobile-fix" style="margin-bottom: 3rem;">
                                <input type="radio" id="Valores-ruim" name="cafe_valores" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="Valores-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>














                    <!--Topico Loja-->
                    <div class="texto">
                        <h4 class="text-maincafé">Loja</h4>
                    </div>
                    <div class="button">
                <button type="button" class="btncafé">ATENDIMENTO</button>
                   </div>
                    <section id="loja">
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-otimo" name="loja_atendimento" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="atendimento-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-bom" name="loja_atendimento" value="bom" required>
                                <label for="atendimento-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-regular" name="loja_atendimento" value="regular" required>
                                <label class="topico-opcoes-label regular" for="atendimento-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-loja-ruim" name="loja_atendimento" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="atendimento-loja-ruim">Ruim</label>
                            </section>
                        </section>





                        <div class="button">
                <button type="button" class="btncafé">VARIEDADE</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-otimo" name="loja_variedade" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="variedade-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-bom" name="loja_variedade" value="bom" required>
                                <label for="variedade-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-regular" name="loja_variedade" value="regular" required>
                                <label class="topico-opcoes-label regular" for="variedade-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="variedade-loja-ruim" name="loja_variedade" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="variedade-loja-ruim">Ruim</label>
                            </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">CORDIALIDADE</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-otimo" name="loja_cordialidade" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="cordialidade-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-bom" name="loja_cordialidade" value="bom" required>
                                <label for="cordialidade-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-regular" name="loja_cordialidade" value="regular" required>
                                <label class="topico-opcoes-label regular" for="cordialidade-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-loja-ruim" name="loja_cordialidade" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="cordialidade-loja-ruim">Ruim</label>
                            </section>
                        </section>




                        <div class="button">
                <button type="button" class="btncafé">VALORES</button>
                       </div>
                        <section class="topicos-opcoes" style="margin-bottom: 4rem;">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-otimo" name="loja_valores" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="Valores-loja-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-bom" name="loja_valores" value="bom" required>
                                <label for="Valores-loja-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-regular" name="loja_valores" value="regular" required>
                                <label class="topico-opcoes-label regular" for="Valores-loja-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="Valores-loja-ruim" name="loja_valores" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="Valores-loja-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>










                    <!--Topico Bilheteria-->
                    <div class="texto">
                        <h3 class="text-maincafé">Bilheteria</h3>
                    </div>
                    <div class="button">
                <button type="button" class="btncafé">ATENDIMENTO</button>
                   </div>
                    <section id="bilheteria">
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-otimo" name="bilheteria_atendimento" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="atendimento-bilheteria-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-bom" name="bilheteria_atendimento" value="bom" required>
                                <label for="atendimento-bilheteria-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-regular" name="bilheteria_atendimento" value="regular" required>
                                <label class="topico-opcoes-label regular" for="atendimento-bilheteria-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="atendimento-bilheteria-ruim" name="bilheteria_atendimento" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="atendimento-bilheteria-ruim">Ruim</label>
                          </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">EFICIÊNCIA</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-otimo" name="bilheteria_eficiencia" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="eficiencia-bilheteria-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-bom" name="bilheteria_eficiencia" value="ebom" required>
                                <label for="eficiencia-bilheteria-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-regular" name="bilheteria_eficiencia" value="regular" required>
                                <label class="topico-opcoes-label regular" for="eficiencia-bilheteria-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="eficiencia-bilheteria-ruim" name="bilheteria_eficiencia" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="eficiencia-bilheteria-ruim">Ruim</label>
                            </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">CORDIALIDADE</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-otimo" name="bilheteria_cordialidade" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="cordialidade-bilheteria-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-bom" name="bilheteria_cordialidade" value="bom" required>
                                <label for="cordialidade-bilheteria-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-regular" name="bilheteria_cordialidade" value="regular" required>
                                <label class="topico-opcoes-label regular" for="cordialidade-bilheteria-regular">Regular</label>
                            </section>

                            <section style="margin-bottom:4rem ;" class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-bilheteria-ruim" name="bilheteria_cordialidade" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="cordialidade-bilheteria-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>







                    <!--Topico Condutores-->
                    <div class="texto">
                        <h3 class="text-maincafé">Condutores/Visitação</h3>
                    </div>
                    <div class="button">
                <button type="button" class="btncafé">CORDIALIDADE</button>
                   </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao-otimo" name="condutores_cordialidade" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="cordialidade-visitacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao-bom" name="condutores_cordialidade" value="bom" required>
                                <label for="cordialidade-visitacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao-regular" name="condutores_cordialidade" value="regular" required>
                                <label class="topico-opcoes-label regular" for="cordialidade-visitacao-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="cordialidade-visitacao" name="condutores_cordialidade" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="cordialidade-visitacao">Ruim</label>
                            </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">POSTURA</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-otimo" name="condutores_postura" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="postura-visitacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-bom" name="condutores_postura" value="bom" required>
                                <label for="postura-visitacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-regular" name="condutores_postura" value="regular" required>
                                <label class="topico-opcoes-label regular" for="postura-visitacao-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="postura-visitacao-ruim" name="condutores_postura" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="postura-visitacao-ruim">Ruim</label>
                            </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">CONTEXTUALIZAÇÃO HISTÓRICA</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-otimo" name="condutores_contex" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="contextualizacao-historica-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-bom" required name="condutores_contex" value="bom">
                                <label for="contextualizacao-historica-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-regular" required name="condutores_contex" value="regular">
                                <label class="topico-opcoes-label regular" for="contextualizacao-historica-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="contextualizacao-historica-ruim" required name="condutores_contex" value="ruim">
                                <label class="topico-opcoes-label ruim" for="contextualizacao-historica-ruim">Ruim</label>
                            </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">VALORES</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-otimo" name="condutores_valores" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="valores-visitacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-bom"name="condutores_valores" value="bom" required>
                                <label for="valores-visitacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-regular"name="condutores_valores" value="regular" required>
                                <label class="topico-opcoes-label regular" for="valores-visitacao-regular">Regular</label>
                            </section>

                            <section style="margin-bottom: 4rem;" class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="valores-visitacao-ruim"name="condutores_valores" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="valores-visitacao-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                    <hr>



                    <!--Instalações-->
                    <div class="texto">
                        <h3 class="text-maincafé">Instalações</h3>
                    </div>
                    <div class="button">
                <button type="button" class="btncafé">CONFORTO</button>
                   </div>
                    <section id="Instalacoes">
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-otimo" name="instalacoes_conforto" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="instalacoes-conforto-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-bom" name="instalacoes_conforto" value="bom" required>
                                <label for="instalacoes-conforto-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-regular" name="instalacoes_conforto" value="regular" required>
                                <label class="topico-opcoes-label regular" for="instalacoes-conforto-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conforto-ruim" name="instalacoes_conforto" value="-ruim" required>
                                <label class="topico-opcoes-label ruim" for="instalacoes-conforto-ruim">Ruim</label>
                            </section>
                        </section>



                        <div class="button">
                <button type="button" class="btncafé">SINALIZAÇÃO</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-otimo" name="instalacoes_sinalizacao" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="instalacoes-sinalizacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-bom" name="instalacoes_sinalizacao" value="bom" required>
                                <label for="instalacoes-sinalizacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-regular" name="instalacoes_sinalizacao" value="regular" required>
                                <label class="topico-opcoes-label regular" for="instalacoes-sinalizacao-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-sinalizacao-ruim" name="instalacoes_sinalizacao" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="instalacoes-sinalizacao-ruim">Ruim</label>
                            </section>
                        </section>


                        <div class="button">
                <button type="button" class="btncafé">LIMPEZA</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-otimo" name="instalacoes_limpeza" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="instalacoes-limpeza-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-bom" name="instalacoes_limpeza" value="bom" required>
                                <label class="topico-opcoes-label" for="instalacoes-limpeza-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-regular" name="instalacoes_limpeza" value="regular" required>
                                <label class="topico-opcoes-label regular" for="instalacoes-limpeza-regular">Regular</label>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-limpeza-ruim" name="instalacoes_limpeza" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="instalacoes-limpeza-ruim">Ruim</label>
                            </section>
                        </section>

                        
                        

                        <div class="button">
                <button type="button" class="btncafé">CONSERVAÇÃO</button>
                       </div>
                        <section class="topicos-opcoes">
                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-otimo" name="instalacoes_conservacao" value="otimo" required>
                                <label class="otimo topico-opcoes-label" for="instalacoes-conservacao-otimo">Ótimo</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-bom" name="instalacoes_conservacao" value="bom" required>
                                <label for="instalacoes-conservacao-bom" class="Bom topico-opcoes-label">Bom</label><br>
                            </section>

                            <section class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-regular" name="instalacoes_conservacao" value="regular" required>
                                <label class="topico-opcoes-label regular" for="instalacoes-conservacao-regular">Regular</label>
                            </section>

                            <section style="margin-bottom: 3rem;" class="topicos-opcoes-mobile-fix">
                                <input type="radio" id="instalacoes-conservacao-ruim" name="instalacoes_conservacao" value="ruim" required>
                                <label class="topico-opcoes-label ruim" for="instalacoes-conservacao-ruim">Ruim</label>
                            </section>
                        </section>
                    </section>
                </section>
            </section>





            <!--Area de Criticas e Confirmação-->
            <div class="container">
                <div class="card4">
                <div class="texto">
            <header>
                <h4 class="text-main2">Críticas, elogios ou sugestões:</h4>
            </header>
            <p class="desc2">Deixe aqui sua crítica, elogio ou sugestão</p>
            </div>







            <section class="mano">
                <form>
                    <div>
                <textarea rows="10" name="msg" required></textarea>
                   </div>
               </form>
          </section>




          <div class="button">
                <button type="button" class="btn2">CONFIRMAR</button>
            </div>
  





    <script src="/js/script.js"></script>
</body>

</html>