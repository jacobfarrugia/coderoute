<?php

class Pages extends CI_Controller {
	
	
	public function __construct()
    {
		parent::__construct();
     
		$this->data['nav'] = array('home'=>'Home','the-course'=>'The Course','about'=>'About','faq'=>'FAQ','contact'=>'Contact');
		
		 $this->load->helper(array('form', 'url'));
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
	

		$show_template = true;
		if($page == 'apply'){
			// $show_template = false;
		}
		
		if($show_template){
			$this->load->view('templates/header', $this->data);
		}

			$this->load->view('pages/'.$page, $this->data);
		
		if($show_template){
			$this->load->view('templates/footer', $this->data);
		}
	}
	
	
	function enquiry()
    {
    	
       

        $this->load->library('form_validation');

        $this->form_validation->set_rules('first-name','First Name', 'required|min_length[2]|max_length[25]|required|alpha'); 
        $this->form_validation->set_rules('last-name', 'Last Name', 'required|min_length[2]|max_length[25]|required|alpha'); 
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required|max_length[30]');  
		
		if ($this->form_validation->run() == FALSE)
		{
			
			// $this->form_validation->set_message('first-name', 'Tell Us');
			
			$this->data['enquiry_status'] = false;
			$this->view('contact');
		}
		else
		{
			// $this->load->view('formsuccess');
			$this->enquiry_email();
			$this->data['enquiry_status'] = true;
			$this->view('contact');
		}
		
	}
	
	
	function enquiry_email()
	{
		$this->load->library('email');

		$this->email->from($this->input->post('email'), $this->input->post('first-name') . ' ' . $this->input->post('last-name') );
		$this->email->to('getinvolved@coderoute.co.uk');
		
		$this->email->subject('Enquiry');
		$this->email->message($this->enquiry_message());
		
		$this->email->send();
		
		// echo $this->email->print_debugger();
	}
	
	function enquiry_message()
	{
		$message ="";
		
		$message .= $this->input->post('first-name') . ' ' . $this->input->post('last-name');
		$message .= "\n";
		$message .= $this->input->post('email');
		$message .= "\n";
		$message .= $this->input->post('message');
		
		return $message;	
	}








	function application()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('full-name','Full Name', 'required|min_length[2]|max_length[25]|required'); 
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone','Phone', 'required|min_length[8]|max_length[25]'); 
        $this->form_validation->set_rules('course-date','Course Date', 'required'); 
		$this->form_validation->set_rules('reason', 'Reason', 'required|min_length[4]');
		$this->form_validation->set_rules('experience', 'Experience', 'required|min_length[4]');  
		

		if ($this->form_validation->run() == FALSE)
		{
			
			
			$this->data['enquiry_status'] = false;
			$this->view('apply');
		}
		else
		{
			
			$this->load->database();	
			// $this->load->view('formsuccess');
			$this->application_email();
			$this->db->insert('applications', $_POST); 

			$this->data['enquiry_status'] = true;
			$this->view('apply');
		}
		
	}
	
	

	function application_email()
	{
		$this->load->library('email');

		$this->email->from($this->input->post('email'), $this->input->post('full-name') );
		$this->email->to('getinvolved@coderoute.co.uk');
		
		$this->email->subject('Application');
		$this->email->message($this->application_message());
		
		$this->email->send();
		
		// echo $this->email->print_debugger();
	}


	
	function application_message()
	{
		$message ="";
		
		$message .= $this->input->post('full-name');
		$message .= "\n";
		$message .= $this->input->post('email');
		$message .= "\n";
		$message .= $this->input->post('phone');
		$message .= "\n";
		$message .= $this->input->post('course-date');
		$message .= "\n";
		$message .= $this->input->post('reason');
		$message .= "\n";
		$message .= $this->input->post('experience');
		$message .= "\n";
		$message .= $this->input->post('how-hear');
		
		return $message;	
	}




	
}

?>