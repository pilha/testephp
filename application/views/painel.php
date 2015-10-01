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
        <!-- Folha de estilo DataTables -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("assets/js/jquery-1.11.3.min.js"); ?>http://localhost/testephp/assets/jquery.dataTables.css">
        <!-- Scripts DataTables -->
	<script type="text/javascript" language="javascript" src="<?php echo URL::site("assets/js/jquery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" language="javascript" src="<?php echo URL::site("assets/js/jquery.dataTables.js"); ?>"></script>

</head>

 <body>

        <section id="painel">
            <header>
            <div class="container" class="clearfix">
                <div class="col-md-6 col-xs-12">
                    <h1>Área de Usuário</h1>
                </div>
                <div class="col-md-6 col-xs-12">
                    Olá $nameUser
                </div>
            </div>
            </header>
            <!-- Conteúdo do Painel -->
            <article>
                <div class="container" class="clearfix">
                   <table id="tableController" class="display table table-striped" cellspacing="0" width="100%">
				<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
				</thead>

				<tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
				</tfoot>

				<tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Ericson Cardoso</td>
                                        <td>ericson@pilhadigital.com.br</td>
                                        <td>
                                            <th><a href="#" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a></th>
                                            <th><a href="#" title="Editar"><i class="glyphicon glyphicon-ok"></i></a></th>
                                        </td>
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
        <script src="<?php echo URL::site("assets/js/scripts.js"); ?>"></script>
    </body>
</html>