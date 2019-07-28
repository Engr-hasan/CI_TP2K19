<?php 
	class Admin extends MY_Controller
	{
		public function index()
		{
			// $this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required|alpha|max_length[6]');
			$this->form_validation->set_rules('password','Password','required|max_length[6]');
			// $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			if($this->form_validation->run())
			{
				echo "Validation Successfully";
			}else{
				$this->load->view('Users/article-list');
			}
		}
	}
 ?>