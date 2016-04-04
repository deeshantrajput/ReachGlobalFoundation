<?php

class Pages extends CI_Controller {
    
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer', $data);
      }
    public function about(){
                        $this->load->view('templates/header');
			$this->load->view('pages/about');
			$this->load->view('templates/footer');
		}
    public function services(){
			$this->load->view('templates/header');
			$this->load->view('pages/services');
			$this->load->view('templates/footer');
		}
    public function donars(){
			$this->load->view('templates/header');
			$this->load->view('pages/donars');
			$this->load->view('templates/footer');
		}
     public function contacts(){
			$this->load->view('templates/header');
			$this->load->view('pages/contacts');
			$this->load->view('templates/footer');
		}
    
           
}

