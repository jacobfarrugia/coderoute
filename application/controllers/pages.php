<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{

		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		
		$this->load->helper('url');
		
		
		$data['page'] = $page;
		$data['nav'] = array('home'=>'Home','the-course'=>'The Course','about'=>'About','admissions'=>'Admissions','faq'=>'FAQ');
		$data['title'] = ucfirst($page); // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);


	}
}

?>