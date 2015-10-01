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
                <div class="col-md-6 col-xs-12 col-sm-8 form">
                    <h2>Acesso ao sistema</h2>

                    <form id="formLogin" method="post" action="#">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input type="email" class="form-control" name="email" placeholder="Seu e-mail" required>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="senha" placeholder="Sua Senha" required>
                        </div>
                        <div class="col-md-6 not-padding">
                            <a class="btn" href="#" title="Recuperar senha">Esqueci minha senha</a>
                        </div>
                        <div class="col-md-6 not-padding">
                            <input type="submit" value="Entrar">
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
