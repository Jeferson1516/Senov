<?php 

class Config
{	
	protected $admin_user = array();
	protected $db_name;
	protected $user;
	protected $password;
	protected $SERVERURL;

	public function __construct(){
		$this->SERVERURL = "http://localhost:8080/senov_v2.0/admin/";
		$this->db_name = "senov";
		$this->user = "root";
		$this->password = "";
		$this->admin_user[0] = "senov";
		$this->admin_user[1] = "123";
	}

	public function getSERVERURL(){
		return (String) $this->SERVERURL;
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

	public function get_admin_user(){
		return $this->admin_user;
	}


}//clase config**