<?php 

	class Opciones extends Controllers{
	
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function Opciones()
		{
		
			$data['page_name'] = "tienda_virtual";
			$this->views->getView($this,"opciones",$data);
		}

	}
 ?>