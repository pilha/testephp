<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área de Login</title>

        <!-- Folhas de estilo -->
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap-theme.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/style.css"); ?>">

    </head>
    <body>

        <section id="login">
            <header class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Seja bem vindo à agência Pilha Digital!</h1>
                        <p>Esta é uma área de login exclusivo para nossos clientes.</p>
                    </div>
                </div>
            </header>

            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Acesso ao sistema</h2>
                    </div>
                </div>
                <form action="#">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1" ><i class="glyphicon glyphicon-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="Seu e-mail" id="emaila">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="text" class="form-control" placeholder="Sua Senha" id="senhaa">
                    </div>
                    <input type="submit" value="Entrar" id="verifica" id="verifica">
                </form>
            </section>
        </section>

        <!-- Scripts -->
        <script src="<?php echo URL::site("assets/js/jquery.min.js"); ?>"></script>
        <script src="<?php echo URL::site("assets/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo URL::site("assets/js/verifica.js"); ?>"></script>
    </body>
</html>
