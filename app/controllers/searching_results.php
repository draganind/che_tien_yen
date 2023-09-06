<?php 

	class searching_results extends DController{
		
		public function __construct(){

			$data = array();
			parent::__construct();

		}
		public function index(){
			$this->searching_results();
		}

		public function searching_results(){
			Session::init();
			$table = 'tbl_product';

			$categorymodel = $this->load->model('categorymodel');


			$title = $_GET['search'] ? $_GET['search'] : '';

			$data = $categorymodel->found_products($table, $title);
			
			$this->load->view('header');
			//$this->load->view('slider');
			$this->load->view('searching-results', $data);
			$this->load->view('footer');

		}
	}


?>