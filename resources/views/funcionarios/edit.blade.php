<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Grupo Mercado Móveis</title>

    <link href={{asset('css/bootstrap.min.css ')}} rel="stylesheet">

    <meta name="theme-color" content="#7952b3">

</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3">MMTECH</a>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">
                            <span data-feather="home"></span>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/funcionarios/novo')}}">
                            <span data-feather="file"></span>
                            Cadastrar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/funcionarios/listar')}}">
                            <span data-feather="file"></span>
                            Listar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="pb-2 border-bottom">Editar Funcionario</h2>
            <div class="row-cols-lg-2">
                <div class="text-align-center">
                    <form action="{{ route('alterar_funcionario', ['id' => $funcionario->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Nome *</label>
                            <div class="col-md-8">
                                <input type="text" name="nome" class="form-control input-md" value="{{ $funcionario->nome }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Email *</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="email" name="email" class="form-control" placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="{{ $funcionario->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Telefone *</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="tel" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" value="{{ $funcionario->telefone }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-3">
                            <button class="btn-group-lg btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('js/bootstrap.min.js') }}" > </script>
</body>
</html>
