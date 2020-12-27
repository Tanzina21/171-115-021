<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expert extends CI_Controller {

		public function __construct()
    {
        parent::__construct();

        if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=="Expert")){

}
else{
$message='<div class="alert alert-info">Please Sign In As Expert </div>';
$this->session->set_flashdata('message',$message);
redirect('login');
        }

    }

	public function index()
	{
			$this->load->view('expert/include/header2');
			$this->load->view('expert/home');
			$this->load->view('expert/include/footer');
	}
	
	
	
	
	
	
	
	public function view_booking()
		{

			$data['booking'] =$this->db->select('*')->from('tbl_booking,tbl_user')->where('tbl_booking.User_ID=tbl_user.ID')->get()->result_array();
			

			$this->load->view('expert/include/header2');
			$this->load->view('expert/view_booking',$data);
			$this->load->view('expert/include/footer');

		}


		public function delete_booking($id)
		{

			$this->db->where('B_ID',$id)->delete('tbl_booking');
 			

 			redirect('expert/view_booking');

		}
		
	public function add_expert()
	{
		$this->form_validation->set_rules('Name', 'Name', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('CPassword', 'Confirm Password', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('doctype', 'Department', 'required');
		
		
		 
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('expert/include/header2');
			$this->load->view('expert/add_expert');
			$this->load->view('expert/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('Name');
			$idata['Email']=$this->input->post('Email');
			$idata['Description']=$this->input->post('Description');
			$idata['Password']=$this->input->post('Password');
			$idata['Dept']=$this->input->post('doctype');
		 
			$idata['Type']='Expert';
			

			if(!empty($_FILES) && ($_FILES['Picture']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('Picture')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('Expert/add_expert');
			 } else {
			  $avatar = $this->upload->data();
			  $Picture = $avatar['file_name'];

			  $idata['Picture']=$Picture;
			 }

			}else{
 
			$message='<div class="alert alert-danger">Add Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('Expert/add_expert');



			}

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('expert/add_expert');

		}
	}
	public function view_expert()
	{
		
		    $data['users']=$this->db->where('Type','Expert')->get('tbl_user')->result_array();
			
			
			$this->load->view('expert/include/header2');
			$this->load->view('expert/view_expert',$data);
			$this->load->view('expert/include/footer');
	}
	
		public function edit_expert($id="")
		{


			$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
			$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|check_is_popular');
			$this->form_validation->set_rules('Description', 'Description', 'required');
			$this->form_validation->set_rules('doctype', 'Department', 'required');

			$this->form_validation->set_message('check_is_popular','Only gmail, Yahoo, Hotmail is Accepted');
	

			function check_is_popular($val){

				$new=explode ("@", $val);

				if($new['1']=='gmail.com'||$new['1']=='yahoo.com'||$new['1']=='hotmail.com'){

					return true;
				}
				
				else{

					return false;
				}

			}

			if ($this->form_validation->run() == FALSE)
			{


				$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
				$this->load->view('expert/include/header');
				$this->load->view('expert/edit_expert',$edata);
				$this->load->view('expert/include/footer');

			}
			
			else{

				$idata['Name']=$this->input->post('Name');
				$idata['Email']=$this->input->post('Email');
				$idata['Description']=$this->input->post('Description');
				$idata['Dept']=$this->input->post('doctype');
				
				if(!empty($_FILES) && ($_FILES['Picture']['name'])){
			

				  $config['upload_path'] = 'images/';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg';
				  $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('Picture')) {
					 $this->session->set_flashdata('message', $this->upload->display_errors());
				 
						redirect('expert/add_expert');
				 } else {
				  $avatar = $this->upload->data();
				  $Picture = $avatar['file_name'];

				  $idata['Picture']=$Picture;
				 }

				}
				
				
				$this->db->where('id',$id)->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('expert/view_expert');

			}
		}
	


	
	
	
	}
	
	