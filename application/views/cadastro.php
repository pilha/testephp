<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de novo usuário</title>

    <?php 
        echo View::factory("templates/header");
    ?>
            <!-- Conteúdo do Painel -->
            <article>
                <div class="container" class="clearfix"> 
                    <nav class="menu clearfix">
                        <ul>
                            <li class="button painel"><a href="<?php echo URL::site("welcome/painel"); ?>"><i class="glyphicon glyphicon-list"></i> Painel</a></li>
                            <li class="button cadastro"><a href="<?php echo URL::site("welcome/cadastro"); ?>"><i class="glyphicon glyphicon-plus"></i> Cadastrar novo usuário</a></li>
                        </ul>
                    </nav>
                    <section id="cadastro">
                        <h2>Novo Cadastro</h2>
                        <form id="formCadastro" action="#" method="post">   
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1" ><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1" ><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="E-mail" name="email" id="emailCadastro">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Senha" name="senha" id="senhaCadastro">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Confirmação de senha" name="senha" id="senhaCadastroConfirm">
                            </div>
                            <div class="col-md-6 not-padding">
                                <a class="btn" href="#" title="Limpar Campos">Limpar</a>
                            </div>
                            <div class="col-md-6 not-padding">
                                <input type="button" value="Cadastrar" id="cadastrar">
                            </div>
                        </form>
                    </section>
                </div>
            </article>
            
            <?php 
                echo View::factory("templates/footer");
            ?>
        </section>

    </body>
</html>