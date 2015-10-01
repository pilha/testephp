<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
            $view = View::factory("index");
            $view->nomeUsuario = "Franklin";
            
            $this->response->body($view);
	}

} // End Welcome
