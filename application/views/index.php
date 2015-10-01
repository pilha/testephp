<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Área de Login</title>

        <!-- Folhas de estilo -->
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap-theme.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/style.css"); ?>">

    </head>
    <body>

        <section id="login">
            <section class="container">
                <div class="col-md-5 col-xs-12 col-sm-4 logo">
                    <img src="<?php echo URL::site("assets/img/logo-pilha.png"); ?>" alt="Logotipo Pilha Digital" title="Logotipo Pilha Digital">
                    <p>Uma agência que trás inovação.</p>
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
        <script src="<?php echo URL::site("assets/js/jquery.validate.min.js"); ?>"></script>
        <script src="<?php echo URL::site("assets/js/scripts.js"); ?>"></script>
    </body>
</html>
