<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
            $view = View::factory("index");
            //$view->nomeUsuario = "Franklin";            
            $this->response->body($view);
	}

        public function action_verificar()
	{
            $ret = 0;
            if ($this->request->post()){
                 
                $tabela = new Model_usuario();
                $acesso = $tabela->verifica($this->request->post('email'), $this->request->post('senha'));
                if ($acesso) $ret = 1;
             }             
             $this->response->body(json_encode($ret));             
	}
        
        public function action_painel()
 	{
            $view = View::factory("painel");
            $this->response->body($view);
	}
        
        public function action_listar()
	{
	    $lista = ORM::factory('usuario')->find_all();
            $this->response->body($lista);
	}
    
        public function action_cadastro()
	{		
            $view = View::factory("cadastro");
            $this->response->body($view);		
	}
        
       	public function action_deletar()
	{
	    $id = $this->request->post('id');	
            $tabela = new Model_usuario();
            $tabela->excluir($id);
	    $this->action_painel();
                
	}
        
        public function update()
	{
	    $view = View::factory("atualiza");
            $this->response->body($view);
	}
}
