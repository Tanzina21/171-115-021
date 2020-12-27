<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct()
    {
        parent::__construct();
        
    }



	public function index()
	{

 
			
			$this->load->view('include/header');
			$this->load->view('home');
			$this->load->view('include/footer');
	

		 

		 

	}

   public function about()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('about');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function services()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('services');
			$this->load->view('include/footer');
	

		 

		 

	}
	
	
	
	public function f_gallery()
	{

 
			$data['f_gallery'] =$this->db->where('Type','Fitness')->get('tbl_gallery')->result_array();
			$this->load->view('include/header2');
			$this->load->view('f_gallery',$data);
			$this->load->view('include/footer');
	
	}
	
	
	public function d_gallery()
	{

 
			$data['d_gallery'] =$this->db->where('Type','Depression')->get('tbl_gallery')->result_array();
			$this->load->view('include/header2');
			$this->load->view('d_gallery',$data);
			$this->load->view('include/footer');
	

		 

		 

	}
	
	public function p_gallery()
	{

 
			$data['p_gallery'] =$this->db->where('Type','Pregnancy Care')->get('tbl_gallery')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('p_gallery',$data);
			$this->load->view('include/footer');
	

		 

		 

	}
	public function s_gallery()
	{

 
			$data['s_gallery'] =$this->db->where('Type','Skin Care')->get('tbl_gallery')->result_array();
			$this->load->view('include/header2');
			$this->load->view('s_gallery',$data);
			$this->load->view('include/footer');
	

		 

		 

	}
	
	
	
	public function fitness()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('fitness');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function pregnancy()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('pregnancy');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function skincare()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('skincare');
			$this->load->view('include/footer');
	

		 

		 

	}public function depression()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('depression');
			$this->load->view('include/footer');
	

		 

		 

	}
	
	
	public function gym()
	{
                    $type='gym';

			$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
 
			
			$this->load->view('include/header2');
			$this->load->view('gym',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}public function diet()
	{

          $type='Diet Guideline';

			$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('diet',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}
	public function specialtips()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('specialtips');
			$this->load->view('include/footer');
	

		 

		 
	}
	
	public function normalcare()
	{

    $type='Normal Care';

			$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('normalcare',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}
	public function othercares()
	{

   $type='Skin Problem';

			
		$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();	
			$this->load->view('include/header2');
			$this->load->view('othercares',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}
	
	public function normalcarep()
	{

 
			
			$type='Pregnancy Care';

			$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('normalcarep',$edata);
			$this->load->view('include/footer');
	


		 

		 
	}
	public function othercarep()
	{

            $type='Complications';
			$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('othercarep',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}
	
	
	public function search()
	{
		
			$this->form_validation->set_rules('doctype', 'Dept', 'required');
			
			if ($this->form_validation->run() ==  FALSE) {

			 	$data['results']='';


			$this->load->view('include/header2');
			$this->load->view('search',$data);
			$this->load->view('include/footer');
	
			} else {

			$data['results']=$this->db->where('Dept',$this->input->post('doctype'))->get('tbl_user')->result_array();
			
			if(!$data['results'])
			{
				$message='<div class="alert alert-danger">Sorry!! No Data Found</div>';

				$this->session->set_flashdata('message',$message);
				
				redirect('welcome/search');
			
			}
			else
			{
				
				$this->load->view('include/header2');
				$this->load->view('search',$data);
				$this->load->view('include/footer');
				 
			} 
		} 

		 
	}
	public function healthy()
	{

                $type='Depression Free Tips';
               $edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
 
			
			$this->load->view('include/header2');
			$this->load->view('healthy',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}
	public function caredep()
	{

 
            $type='Dipression Type & Solution';
			$edata['results']=$this->db->where('Type',$type)->get('tbl_department')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('caredep',$edata);
			$this->load->view('include/footer');
	

		 

		 
	}
	public function specialistd()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('specialistd');
			$this->load->view('include/footer');
	

		 

		 
	}
	public function aboutdoctor($id="")
	{

			$data['experts']=$this->db->where('ID',$id)->get('tbl_user')->result_array();
 
		$this->form_validation->set_rules('Date', 'Date', 'required');
		
		
		 
		
		if ($this->form_validation->run() == FALSE)
		{
		
			$this->load->view('include/header2');
			$this->load->view('aboutdoctor',$data);
			$this->load->view('include/footer');

		}else{

			$is_available=$this->db->where('Expert_ID',$this->input->post('Expert_ID'))->get('tbl_booking')->num_rows();


			if($is_available>10){

			$message='<div class="alert alert-danger">Sorry No Seat Available </div>';

			$this->session->set_flashdata('message',$message);

			redirect('Welcome/aboutdoctor');

			}

			$idata['User_ID']=$this->session->userdata('ID');
			$idata['Expert_ID']=$this->input->post('Expert_ID');
			$idata['Date']=$this->input->post('Date');
			 
			 
			$this->db->insert('tbl_booking',$idata);

				$message='<div class="alert alert-success">Booking Added </div>';

			$this->session->set_flashdata('message',$message);

			redirect('Welcome/aboutdoctor');


		}
	

		 

		 
	}
	
	public function Bookings()
		{
		  	 $data['bookings'] =$this->db->select('*')->from('tbl_booking,tbl_user')->where('tbl_booking.Expert_ID=tbl_user.ID')->where('tbl_booking.User_ID',$this->session->userdata('ID'))->get()->result_array();
			
			 
				$this->load->view('include/header2');
				$this->load->view('bookings',$data);
				$this->load->view('include/footer');


			 

		}
	
	
	
	
	
	
	
	

	
	
	
}
