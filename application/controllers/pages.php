<?php

class Pages extends CI_Controller {
	
	
	public function __construct()
     {
            parent::__construct();
            // Your own constructor code
		$this->data['nav'] = array('home'=>'Home','the-course'=>'The Course','about'=>'About','faq'=>'FAQ','contact'=>'Contact');
	}

	public function view($page = 'home')
	{

		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		
		$this->load->helper('url');
		
		
		$this->data['page'] = $page;
		
		$this->data['title'] = ucfirst($page); // Capitalize the first letter
	
		$this->load->view('templates/header', $this->data);
		$this->load->view('pages/'.$page, $this->data);
		$this->load->view('templates/footer', $this->data);

	}
	
	
	function enquiry()
    {
    	die('sdfsdfsfd');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

            $this->form_validation->set_rules('first-name', 'Imie', 'required|min_length[5]|max_length[25]|required|alpha'); 
            $this->form_validation->set_rules('last-name', 'Nazwisko', 'required|min_length[5]|max_length[25]|required|alpha'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'required|max_length[30]');  
	}
	
	
}

?>