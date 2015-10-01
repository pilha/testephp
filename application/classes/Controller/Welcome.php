<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
            $view = View::factory("index");
            $view->nomeUsuario = "Franklin";            
            $this->response->body($view);
	}

        public function action_verificar()
	{
             if ($this->request->post()){
                    // Try to login
                    if (Auth::instance()->login($this->request->post('username'), $this->request->post('password')))
                    {
                        $this->redirect('home');
                    }                
                    
             }else{
                    $this->redirect('index');
             }           
	}
        
        public function action_home()
	{
            $view = View::factory("home");
            $this->response->body($view);
	}
} // End Welcome
