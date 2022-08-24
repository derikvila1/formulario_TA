@extends("layouts.page")

@section('title')
Editais da Cultura
@endsection

@section('content')
    <style>
        .font-sytle-titulo {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

    </style>

    <script>
        document.getElementById('floating-editais').classList.add('active');
        document.getElementById('sidebar-editais').classList.add('active');
        document.getElementById('top-editais').classList.add('active');
    </script>
    <img src="/editais/assets/banner.jpg">
    <div class=" ui container" style="padding: 30px;">
        <div class="centered" align="center">
            <h1 class="ui header">Editais da Cultura</h1>
        </div>
        <hr>
        <div>
            <div >
                <form >

                    <div class="ui action input" style="padding-bottom: 5px;">
                        <input type="text" placeholder="Procurar">
                        <div class="ui  button sec-bg">Buscar</div>
                    </div>
                </form>

                <div class="ui grid">
                    <div class="eight wide column" align="center">
                        <div class="ui floating labeled icon dropdown button sec-bg ">
                            <div class="text"><i class="filter icon"></i>categoria</div>
                            <i class="dropdown icon"></i>
                            <div class="menu sec-bg">
                                @foreach ($estados as $estado)
                                    <div class="item"> <a href="#" style="color:black;">{{ $estado->nome }}</a></div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                    <div class="eight wide column" align="center">
                        <div class="ui floating labeled icon dropdown button sec-bg">
                            <div class="text"><i class="filter icon"></i>arquivos</div>
                            <i class="dropdown icon"></i>
                            <div class="menu sec-bg">

                                <div class="item"> <a href="#" style="color:black;">janeiro</a></div>
                                <div class="item"> <a href="#" style="color:black;">fevereiro</a></div>
                                <div class="item"> <a href="#" style="color:black;">março</a></div>
                                <div class="item"> <a href="#" style="color:black;">abril</a></div>
                                <div class="item"> <a href="#" style="color:black;">maio</a></div>
                                <div class="item"> <a href="#" style="color:black;">junho</a></div>
                                <div class="item"> <a href="#" style="color:black;">julho</a></div>
                                <div class="item"> <a href="#" style="color:black;">agosto</a></div>
                                <div class="item"> <a href="#" style="color:black;">setembro</a></div>
                                <div class="item"> <a href="#" style="color:black;">outubro</a></div>
                                <div class="item"> <a href="#" style="color:black;">novembro</a></div>
                                <div class="item"> <a href="#" style="color:black;">dezembro</a></div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div style="padding: 20px;">
                <!-- <div style="padding: 20px;" align="center">
                    <h2 class="ui header"> Editais em destaque</h2>
                </div> -->
                @foreach ($editais as $edital)
                    <div class="ui segment">
                        <a href="/detalhes/{{ $edital->id }}">
                            <h4 class="ui large header">{{ $edital->nome }}</h4>
                        </a>
                        <small style="color: #006e73;"><i class="info circle icon"></i>{{ $edital->estado }}</small>
                        <p class="font-sytle-titulo" style="padding-left: 5px;">
                            {{ $edital->descricao }}
                        </p>
                        <div align="right">

                            <a class="ui sec-bg button  " href="/detail/{{ $edital->id }}">mais detalhes</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>




        <div style="display: flex;justify-self: center;justify-content: center;"></div>
        <div style="display: flex;justify-self: center;justify-content: center;"></div>
    </div>
    <script>
        $('div.dropdown')
            .dropdown();

        ;
    </script>

@endsection
