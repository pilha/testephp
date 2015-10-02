<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">

	<title>DataTables example - Zero configuration</title>
        
        <!-- Folhas de estilo -->
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap-theme.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/style.css"); ?>">
        <!-- Scripts DataTables -->
	<script type="text/javascript" language="javascript" src="<?php echo URL::site("assets/js/scripts/jquery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" language="javascript" src="<?php echo URL::site("assets/js/plugins/jquery.dataTables.js"); ?>"></script>

</head>

 <body>

        <section id="painel">
            <header>
            <div class="container" class="clearfix">
                <div class="col-md-6 col-xs-12">
                    <h1>Área de Usuário</h1>
                </div>
                <div class="col-md-6 col-xs-12 user">
                    <?php ?>
                    <p>Olá $nameUser</p>                    
                </div>
            </div>
            </header>
            <!-- Conteúdo do Painel -->
            <article>
                <div class="container" class="clearfix"> 
                    <nav class="menu clearfix">
                        <ul>
                            <li class="button painel"><a href=""><i class="glyphicon glyphicon-list"></i> Painel</a></li>
                            <li class="button cadastro"><a href=""><i class="glyphicon glyphicon-plus"></i> Cadastrar novo usuário</a></li>
                        </ul>
                    </nav>
                   <table id="tableController" class="display table table-striped" cellspacing="0" width="100%">
				<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th class="acoes">Editar</th>
                                        <th class="acoes">Remover</th>
                                    </tr>
				</thead>

				<tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th class="acoes">Editar</th>
                                        <th class="acoes">Remover</th>
                                    </tr>
				</tfoot>

				<tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Ericson Cardoso</td>
                                        <td>ericson@pilhadigital.com.br</td>
                                        <td class="acoes"><a href="#" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                        <td class="acoes"><a href="#" title="Deletar"><i class="glyphicon glyphicon-remove"></i></a></td>
                                    </tr>
				</tbody>
			</table>
                </div>
            </article>
            
            <footer>
                <div class="container" class="clearfix">
                    <div class="col-md-2 col-xs-12 col-sm-4">
                        <img src="<?php echo URL::site("assets/img/logo-pilha-branco.png"); ?>" alt="Logotipo Pilha Digital" title="Logotipo Pilha Digital">
                    </div>
                    <div class="col-md-10 col-xs-12 col-sm-8">
                        <p>© 2008 Pilha. Todos os direitos reservados. Agência Pilha</p>
                    </div>
                </div>
            </footer>
        </section>
        
        <!-- Scripts -->
        <script src="<?php echo URL::site("assets/js/scripts_painel.js"); ?>"></script>
    </body>
</html>