<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

	<title>DataTables example - Zero configuration</title>
        
        <!-- Folhas de estilo -->
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/bootstrap-theme.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo URL::site("assets/css/style.css"); ?>">
        <!-- Folha de estilo DataTables -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL::site("assets/cssmedia/css/jquery.dataTables.css"); ?>">
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
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>

				<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>61</td>
						<td>2011/04/25</td>
						<td>$320,800</td>
					</tr>
					<tr>
						<td>Garrett Winters</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>63</td>
						<td>2011/07/25</td>
						<td>$170,750</td>
					</tr>
					<tr>
						<td>Ashton Cox</td>
						<td>Junior Technical Author</td>
						<td>San Francisco</td>
						<td>66</td>
						<td>2009/01/12</td>
						<td>$86,000</td>
					</tr>
					<tr>
						<td>Cedric Kelly</td>
						<td>Senior Javascript Developer</td>
						<td>Edinburgh</td>
						<td>22</td>
						<td>2012/03/29</td>
						<td>$433,060</td>
					</tr>
					<tr>
						<td>Airi Satou</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>33</td>
						<td>2008/11/28</td>
						<td>$162,700</td>
					</tr>
					<tr>
						<td>Brielle Williamson</td>
						<td>Integration Specialist</td>
						<td>New York</td>
						<td>61</td>
						<td>2012/12/02</td>
						<td>$372,000</td>
					</tr>
					<tr>
						<td>Herrod Chandler</td>
						<td>Sales Assistant</td>
						<td>San Francisco</td>
						<td>59</td>
						<td>2012/08/06</td>
						<td>$137,500</td>
					</tr>
					<tr>
						<td>Rhona Davidson</td>
						<td>Integration Specialist</td>
						<td>Tokyo</td>
						<td>55</td>
						<td>2010/10/14</td>
						<td>$327,900</td>
					</tr>
					<tr>
						<td>Colleen Hurst</td>
						<td>Javascript Developer</td>
						<td>San Francisco</td>
						<td>39</td>
						<td>2009/09/15</td>
						<td>$205,500</td>
					</tr>
					<tr>
						<td>Sonya Frost</td>
						<td>Software Engineer</td>
						<td>Edinburgh</td>
						<td>23</td>
						<td>2008/12/13</td>
						<td>$103,600</td>
					</tr>
					<tr>
						<td>Jena Gaines</td>
						<td>Office Manager</td>
						<td>London</td>
						<td>30</td>
						<td>2008/12/19</td>
						<td>$90,560</td>
					</tr>
					<tr>
						<td>Quinn Flynn</td>
						<td>Support Lead</td>
						<td>Edinburgh</td>
						<td>22</td>
						<td>2013/03/03</td>
						<td>$342,000</td>
					</tr>
					<tr>
						<td>Charde Marshall</td>
						<td>Regional Director</td>
						<td>San Francisco</td>
						<td>36</td>
						<td>2008/10/16</td>
						<td>$470,600</td>
					</tr>
					<tr>
						<td>Haley Kennedy</td>
						<td>Senior Marketing Designer</td>
						<td>London</td>
						<td>43</td>
						<td>2012/12/18</td>
						<td>$313,500</td>
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