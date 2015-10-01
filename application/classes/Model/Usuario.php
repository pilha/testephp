<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuario extends ORM {
	
	public function verifica($email,$senha)
	{
		if($email){

			$this->where('email', '=', $email)
                                     ->where('senha', '=', $senha)
                                     ->find();
                        
                       if($this->loaded()){
                            return $this;
                       }else{
                           return FALSE;
                       }
		}else{
			
			return FALSE;
		}		
	}
}

