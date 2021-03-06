<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão de usuário</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<header>

</header>
<section class="menu">
    @include('component.navBar')
</section>
<main>
    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if(Session::has('mensagem'))
                <div class="container">
                    <div class="row">
                        <div class="card {{ Session::get('mensagem')['class'] }}">
                            <div align="center" class="card-content">
                                {{ Session::get('mensagem')['msg'] }}
                            </div>
                        </div>
                    </div>

                </div>
            @endif

        </div>
        <div class="col-md-3"></div>
    </div>
</main>
<section class="content">
    @yield('conteudo')
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
