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
                <div class="col-md-12 logo">
                    <img src="<?php echo URL::site("assets/img/logo-pilha.png"); ?>" alt="Logotipo Pilha Digital" title="Logotipo Pilha Digital">
                    <p>Uma agência que traz inovação.</p>
                </div>
                <div class="col-md-12 form">
                    <h2>Acesso ao sistema</h2>
                <form action="#">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1" ><i class="glyphicon glyphicon-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="Seu e-mail" name="email" id="email">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="text" class="form-control" placeholder="Sua Senha" name="senha" id="senha">
                    </div>
                    <div class="col-md-6 not-padding">
                        <a class="btn" href="#" title="recuperar senha">Esqueci minha senha</a>
                    </div>
                    <div class="col-md-6 not-padding">
                        <input type="submit" value="Entrar" id="verifica">
                    </div>
                </form>
                </div>
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
