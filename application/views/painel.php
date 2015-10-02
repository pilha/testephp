<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>

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
            
            <?php 
                echo View::factory("templates/footer");
            ?>
        </section>
        
        <!-- Scripts -->
        <script type="text/javascript" language="javascript" src="<?php echo URL::site("assets/js/plugins/jquery.dataTables.js"); ?>"></script>
        <script src="<?php echo URL::site("assets/js/scripts_painel.js"); ?>"></script>
        
    </body>
</html>