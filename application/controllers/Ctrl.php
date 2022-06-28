<?php

class Ctrl extends CI_Controller {		
	var $data=array();// 
    function __construct()
    {
		parent::__construct();
		$this->load->model('Query');
		$this->load->library("session");
	}

	public function index()
	{
		$data['user']=false;
		if($this->session->id!=""){
			$data['user']=true;
		}
		// print_r($data['user']."3".$this->session->id);
		// load view admin/overview.php
		$data['penyakit']=$this->Query->_func("SELECT count(kdPenyakit) as t FROM `penyakit`");
		$data['histori']=$this->Query->_func("SELECT count(id) as t FROM `histori`");
		$data['gejala']=$this->Query->_func("SELECT count(kdGejala) as t FROM `gejala`");
		$data['admin']=$this->Query->_func("SELECT count(id) as t FROM `admin`");
		
		$this->load->view("dasboard/index",$data); 
       
	}
	public function login(){
		$data['msg']=false;
		$this->load->view("login/login.php",$data);	
  	}

  	public function inputPenyakit(){
		$data['user']=true;
		if($this->session->id==""){
			return $this->logout();
		}
	
	  	$data['data']=$this->Query->_func("SELECT `kdPenyakit`, `nmPenyakit`, detailPenyakit, `img`,  saran, `status` FROM `penyakit`");
		$this->load->view("inputPenyakit/inputPenyakit.php",$data);
	}

	public function dasboard(){
		$data['user']=false;
		if($this->session->id==""){
			$data['user']=true;
		}
		$data['histori']=$this->Query->_func("SELECT count(id) as t FROM `histori`");
		$data['gejala']=$this->Query->_func("SELECT count(kdGejala) as t FROM `gejala`");
		$data['admin']=$this->Query->_func("SELECT count(id) as t FROM `admin`");
		
		$this->load->view("dasboard/index.php",$data);
	}
	public function admin(){
		$data['user']=true;
		if($this->session->id==""){
			return $this->logout();
		}
		$data['data']=$this->Query->_func("SELECT * FROM `admin`");
		$this->load->view("admin/admin.php",$data);
	}

	public function aturan(){
		$data['user']=true;
		if($this->session->id==""){
			return $this->logout();
		}
		$data['data']=$this->Query->_func("
			SELECT a.*, b.nmPenyakit FROM gejala a
			JOIN penyakit b
			on a.kdPenyakit = b.kdPenyakit
		");	
		$data['penyakit']=$this->Query->_func("SELECT * FROM penyakit");
		$this->load->view("gejala/penyakit.php",$data);
	}

	function gejala(){
		$data['user']=true;
		if($this->session->id==""){
			return $this->logout();
		}
		$data['data']=$this->Query->_func("SELECT nmGejala,mb,md,kdGejala FROM gejala
			GROUP BY trim(nmGejala)
			ORDER by nmGejala ASC");	
		$this->load->view("gabungan/penyakit.php",$data);
	}

	public function diagnosa(){
		$data['user']=false;
		if($this->session->id!=""){
			$data['user']=true;
		}
		// SELECT *,'' as cek,(select COUNT(kdGejala) from gejala  WHERE nmGejala like '%%') as total FROM `gejala` GROUP BY nmGejala ORDER BY kdPenyakit (a.cf*((cast(a.mb as Decimal(2,2))-cast(a.md as Decimal(2,2)))))
		$data['data']=$this->Query->_func("
			SELECT a.*,'' as cek,'' as mb1, (select COUNT(nmGejala) from gejala  WHERE nmGejala like a.nmGejala) as total,(a.cf*((cast(a.mb as Decimal(2,2))-cast(a.md as Decimal(2,2))))) as cfKombinasi FROM `gejala` as a  GROUP BY a.nmGejala ORDER BY a.kdPenyakit
		");
		$this->load->view("diagnosa/index",$data);
		
	}

	public function histori(){
		$data['user']=false;
		if($this->session->id!=""){
			$data['user']=true;
		}
		$data['data']=$this->Query->_func("SELECT * FROM histori");
		$this->load->view("histori/index",$data);
	}

	function logout(){
		$this->session->sess_destroy();
		session_destroy();
		redirect("ctrl");
	}

	function tentang(){
		$data['user']=false;
		if($this->session->id!=""){
			$data['user']=true;
		}
		$this->load->view("tentang/tentang.php",$data);
	}

	function keterangan(){
		$data['user']=false;
		if($this->session->id!=""){
			$data['user']=true;
		}
	  	$data['data']=$this->Query->_func("SELECT * FROM `penyakit`");
		$this->load->view("keterangan/index.php",$data);
	}


}	
?>