<?php 

class Config
{
	protected $db_name;
	protected $user;
	protected $password;
	protected $SERVERURL;

	public function __construct(){
		$this->SERVERURL = "http://localhost:8080/senov_v2.0/usuario/";
		$this->db_name = "senov";
		$this->user = "root";
		$this->password = "";
	}

	public function getSERVERURL(){
		return $this->SERVERURL;
	}

	public function get_db_name(){
		return $this->db_name;
	}

	public function get_user(){
		return $this->user;
	}

	public function get_password(){
		return $this->password;
	}

}//clase config**