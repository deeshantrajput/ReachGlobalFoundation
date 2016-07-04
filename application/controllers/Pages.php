<?php

class Pages extends CI_Controller {
    
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/Pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer', $data);
      }
     function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->helper('url_helper');
    } 
    public function about(){
                        $this->load->view('templates/header');
			$this->load->view('pages/about');
			$this->load->view('templates/footer');
		}
    public function thankyou()
            {
                        $this->load->view('templates/header');
			$this->load->view('pages/ThankYou');
			$this->load->view('templates/footer');
		}
      
    public function sponsor()
    {
         $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobileno', 'Mobile', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
         if ($this->form_validation->run() == FALSE) {
             $this->load->view('templates/header');
			$this->load->view('pages/sponsorachild');
			$this->load->view('templates/footer');
         }
         else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobileno = $this->input->post('mobileno');
            $address = $this->input->post('address');
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobileno' => $this->input->post('mobileno'),
                'address' => $this->input->post('address')
         );
            $this->Contact_model->Sponsor_Child($data);
           ini_set('SMTP', "server.com");
            ini_set('smtp_port', "25");
             $config['mailtype'] = 'html';
            $this->load->library('email', $config);
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('nainashukla3300@gmail.com');
            $this->email->subject('Customer Query');
            $msg = "";
            $msg.= "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:10pt; border:1px solid #ccc;'> ";
            $msg.= "<tr>";
            $msg.= "<td width='16' height='25'>&nbsp;</td>";
            $msg.= "<td width='96'>Name</td>";
            $msg.= "<td width='10' height='25'><strong>:</strong></td>";
            $msg.= "<td height='25'>$name</td>";
            $msg.= "</tr>";
            $msg.= "<tr>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>Email</td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>$email</td>";
            $msg.= "</tr>";
            $msg.= "<tr>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>Mobile</td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>$mobileno</td>";
            $msg.= "</tr>";
            $msg.= "<tr>";
            $msg.= "<td height='95'>&nbsp;</td>";
            $msg.= "<td height='95'>Address</td>";
            $msg.= "<td height='95'><strong>:</strong></td>";
            $msg.= "<td height='95'>$address</td>";
            $msg.= "</tr>";
            $msg.= "</table>";
            $this->email->message($msg);
            if ($this->email->send()) {               
            redirect(base_url());            
         }        
             redirect(base_url()."pages/ThankYou");
            
         }
    }
    public function whatweedo(){
			$this->load->view('templates/header');
			$this->load->view('pages/whatweedo');
			$this->load->view('templates/footer');
		}
   
    public function sponsorachild(){
			$this->load->view('templates/header');
			$this->load->view('pages/sponsorachild');
			$this->load->view('templates/footer');
		}
    public function donate(){
			$this->load->view('templates/header');
			$this->load->view('pages/donate');
			$this->load->view('templates/footer');
		}
     
    public function Reach_Global_Foundation(){
                        $this->load->view('templates/header');
			$this->load->view('pages/HOME');
			$this->load->view('templates/footer');
		}
    public function contacts(){
                        $this->load->view('templates/header');
			$this->load->view('pages/contacts');
			$this->load->view('templates/footer');
		}
    
            
            public function contactus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobileno', 'Mobile', 'required');
         $this->form_validation->set_rules('address', 'Address', 'required');
         $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('templates/header');
			$this->load->view('pages/contacts');
			$this->load->view('templates/footer');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobileno' => $this->input->post('mobileno'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'message' => $this->input->post('message'),   
                
            );
            $this->Contact_model->form_insert($data);
            redirect(base_url()."pages/ThankYou");
    }
        }
            }
   


