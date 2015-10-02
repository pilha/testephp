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
            
            $tabela = new Model_usuario();
            $view = View::factory("painel");
            $view->lista = $tabela->listar();
            $this->response->body($view);
 }
        
        public function action_listar()
 {
     $lista = ORM::factory('usuario')->find_all();
            $this->response->body($lista);
 }
    
        public function action_cadastro()
 {  
            if ($this->request->post()){
               
                   $validation = Validation::factory($this->request->post())
                        ->rule('nome', 'not_empty')
                        ->rule('nome', 'regex', array(':value', '/^[a-z_.]++$/iD'))
                       

                        ->rule('senha', 'not_empty')
                        ->rule('senha', 'min_length', array(':value', 6))
                        ->rule('confirmar',  'matches', array(':validation', ':field', 'senha'))

                        ->rule('email', 'not_empty')
                        ->rule('use_ssl', 'in_array', array(':value', array('yes', 'no')));
            }
            
            $view = View::factory("cadastro");
            $this->response->body($view);
            
            //$user = Model::factory('user');
 
                  /*  $validation = Validation::factory($this->request->post())
                        ->rule('username', 'not_empty')
                        ->rule('username', 'regex', array(':value', '/^[a-z_.]++$/iD'))
                        ->rule('username', array($user, 'unique_username'))

                        ->rule('password', 'not_empty')
                        ->rule('password', 'min_length', array(':value', 6))
                        ->rule('confirm',  'matches', array(':validation', ':field', 'password'))

                        ->rule('use_ssl', 'not_empty')
                        ->rule('use_ssl', 'in_array', array(':value', array('yes', 'no')));

                    if ($validation->check())
                    {
                        // Data has been validated, register the user
                        $user->register($this->request->post());

                        // Always redirect after a successful POST to prevent refresh warnings
                        $this->redirect('user/profile', 303);
                    }

                    // Validation failed, collect the errors
                    $errors = $validation->errors('user');

                    // Display the registration form
                    $this->response->body(View::factory('user/register'))
                        ->bind('post', $this->request->post())
                        ->bind('errors', $errors);*/
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