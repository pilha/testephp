<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuario extends ORM {
	protected $_table_name = "usuario";
        
	public function verifica($email,$senha)
	{
	    $this->where('email', '=', $email)
                 ->where('senha', '=', $senha)
                 ->find();
           
           if($this->loaded()){
                return $this;
           }else{
                 return FALSE;                       
           }
                		
	}
        
        public function salvar($dados)
	{
	    $user = ORM::factory('usuario');
            $user->nome  = $dados['nome'];
            $user->email = $dados['email'];
            $user->senha = $dados['senha']; 
            $user->save();
	}

	public function alterar($dados,$id)
	{
		$user = ORM::factory('usuario', $dados['id']);
                $user->nome = $dados['nome'];
                $user->email = $dados['email'];
                $user->senha = $dados['senha'];
                $user->save();
	}

	public function excluir($id)
	{
            $user = ORM::factory('usuario', $id);
            $user->delete();
	}

	public function listar()
	{
            return $lista = ORM::factory('usuario')->find_all();	
	}

	public function get_id($id)
	{
	    $this->where('id', '=', $id)
                 ->find();
                        
	    if($this->loaded()){
                return $this;
            }else{
                 return FALSE;                       
           }
	}
}

