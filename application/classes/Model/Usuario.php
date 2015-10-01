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
	    $this->nome  = $dados['nome'];
            $this->email = $dados['email'];
            $this->senha = $dados['senha']; 
            $this->save();
	}

	public function alterar($dados,$id)
	{
               $this->where('id', '=', $id)->find();	
               $this->nome = $dados['nome'];
               $this->email = $dados['email'];
               $this->senha = $dados['senha'];
               $this->save();
                
                
	}

	public function excluir($id)
	{
            $this->where('id', '=', $id)->delete();
	}

	public function listar()    
	{
            return $this->find_all();	
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

