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
           // die('teste'); 
            if ($this->request->post()){
                 
                  $tabela = new Model_usuario();
                  $acesso = $tabela->verifica($this->request->post('email'), $this->request->post('senha'));
                          
                    if ($acesso){
                        return TRUE;                       
                    }else{
                        return FALSE;
                    }
                                        
             }else{
                    return FALSE;
             }      
	}
        
        public function action_painel()
	{
            $view = View::factory("painel");
            $this->response->body($view);
	}
}
