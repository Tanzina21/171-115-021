<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
    {
        parent::__construct();

        if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=="Admin")){

}
else{
$message='<div class="alert alert-info">Please Sign In As Admin</div>';
$this->session->set_flashdata('message',$message);
redirect('login');
        }

    }

	public function index()
	{
			$this->load->view('admin/include/header');
			$this->load->view('admin/home');
			$this->load->view('admin/include/footer');
	}
	
	public function add_department()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('details1', 'Details1', 'required');
		
		
		$this->form_validation->set_rules('details2', 'Details2', 'required');
		$this->form_validation->set_rules('details3', 'Details3', 'required');
		$this->form_validation->set_rules('details4', 'Details4', 'required');
		$this->form_validation->set_rules('details5', 'Details5', 'required');
		$this->form_validation->set_rules('header1', 'Header1', 'required');
		$this->form_validation->set_rules('header2', 'Header2', 'required');
		$this->form_validation->set_rules('header3', 'Header3', 'required');
		$this->form_validation->set_rules('header4', 'Header4', 'required');
		$this->form_validation->set_rules('header5', 'Header5', 'required');
		$this->form_validation->set_rules('Type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header');
			$this->load->view('admin/add_department');
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('name');
			$idata['Description']=$this->input->post('description');
			$idata['Details1']=$this->input->post('details1');
			$idata['Details2']=$this->input->post('details2');
			$idata['Details3']=$this->input->post('details3');
			$idata['Details4']=$this->input->post('details4');
			$idata['Details5']=$this->input->post('details5');
			$idata['Header1']=$this->input->post('header1');
			$idata['Header2']=$this->input->post('header2');
			$idata['Header3']=$this->input->post('header3');
			$idata['Header4']=$this->input->post('header4');
			$idata['Header5']=$this->input->post('header5');
			
			$idata['Type']=$this->input->post('Type');
			

			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image = $avatar['file_name'];

			  $idata['Image']=$organization_image;
			 }

			}

			$this->db->insert('tbl_department',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/add_department');

		}
	}
	
	
	
	public function view_expert()
	{
		
		    $data['users']=$this->db->where('Type','Expert')->get('tbl_user')->result_array();
			
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/view_expert',$data);
			$this->load->view('admin/include/footer');
	}
	
	public function view_user()
	{
		
		    $data['users']=$this->db->get('tbl_user')->result_array();
			
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/view_user',$data);
			$this->load->view('admin/include/footer');
	}
	
	public function view_department()
	{
		
		    $data['users']=$this->db->get('tbl_department')->result_array();
			
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/view_department',$data);
			$this->load->view('admin/include/footer');
	}
	
	
	
		public function delete_user($id)
		{

			$this->db->where('ID',$id)->delete('tbl_user');
 			

 			redirect('admin/view_user');

		}
		
		
		public function delete_expert($id)
		{

			$this->db->where('ID',$id)->delete('tbl_user');
 			

 			redirect('admin/view_expert');

		}
	
		public function delete_department($id)
		{

			$this->db->where('ID',$id)->delete('tbl_department');
 			

 			redirect('admin/view_department');

		}
	
	
	
		public function edit_user($id="")
		{


			$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
			$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|check_is_popular');
			$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[+][0-9]*$/]|exact_length[14]');
			$this->form_validation->set_rules('user_type', 'Type', 'required');

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
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_user',$edata);
				$this->load->view('admin/include/footer');

			}
			
			else{

				$idata['name']=$this->input->post('user_name');
				$idata['email']=$this->input->post('user_email');
				$idata['mobile']=$this->input->post('user_mobile');
				$idata['type']=$this->input->post('user_type');

				$this->db->where('id',$id)->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_user');

			}
		}
	
		public function edit_department($id="")
		{


			$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('details1', 'Details1', 'required');
			$this->form_validation->set_rules('details2', 'Details2', 'required');
			$this->form_validation->set_rules('details3', 'Details3', 'required');
			$this->form_validation->set_rules('details4', 'Details4', 'required');
			$this->form_validation->set_rules('details5', 'Details5', 'required');
			$this->form_validation->set_rules('header1', 'Header1', 'required');
			$this->form_validation->set_rules('header2', 'Header2', 'required');
			$this->form_validation->set_rules('header3', 'Header3', 'required');
			$this->form_validation->set_rules('header4', 'Header4', 'required');
			$this->form_validation->set_rules('header4', 'Header5', 'required');
			$this->form_validation->set_rules('Type', 'Type', 'required');
							
			if ($this->form_validation->run() == FALSE)
			{
				
				$edata['user']=$this->db->where('ID',$id)->get('tbl_department')->result_array();
				
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_department',$edata);
				$this->load->view('admin/include/footer');

			}
				
			else{

				$idata['Name']=$this->input->post('name');
				$idata['Description']=$this->input->post('description');
				$idata['Details1']=$this->input->post('details1');
				$idata['Details2']=$this->input->post('details2');
				$idata['Details3']=$this->input->post('details3');
				$idata['Details4']=$this->input->post('details4');
				$idata['Details5']=$this->input->post('details5');
				$idata['Header1']=$this->input->post('header1');
				$idata['Header2']=$this->input->post('header2');
				$idata['Header3']=$this->input->post('header3');
				$idata['Header4']=$this->input->post('header4');
				$idata['Header5']=$this->input->post('header5');
				$idata['Type']=$this->input->post('Type');
				
				if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

				  $config['upload_path'] = 'images/';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg';
				  $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('organization_image')) {
					 $this->session->set_flashdata('message', $this->upload->display_errors());
				 
						redirect('signup');
				 } else {
				  $avatar = $this->upload->data();
				  $organization_image = $avatar['file_name'];

				  $idata['Image']=$organization_image;
				 }

				}

				$this->db->where('ID',$id)->update('tbl_department',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_department');

			
			}
			}
			
	public function add_user()
	{
			
		$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|check_is_popular');
		$this->form_validation->set_rules('user_password', 'Password', 'required');                  
		$this->form_validation->set_message('check_is_popular','Only Gmail, Yahoo, Hotmail is Accepted');
		$this->form_validation->set_rules('user_c_password', 'Confirm Password', 'required|matches[user_password]');                  
		$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|exact_length[14]');
		
		function check_is_popular($val){

			$new=explode ("@", $val);

			if($new['1']=='gmail.com'||$new['1']=='yahoo.com'||$new['1']=='hotmail.com'){

				return true;
			}else{

				return false;
			}

		}
		
		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('admin/include/header');
			$this->load->view('admin/add_user');
			$this->load->view('admin/include/footer');

		}else{
			
						
			$idata['Name']=$this->input->post('user_name');
			$idata['Email']=$this->input->post('user_email');
			$idata['Password']=$this->input->post('user_password');
			$idata['Mobile']=$this->input->post('user_mobile');
			$idata['Type']='User';
			
			$this->db->insert('tbl_user',$idata);
			
			$message='<div class="alert alert-success" role="alert">
						  <strong>Congratulations!</strong> Your subscription is <strong>Successful.</strong> Please Sign In for further process
						</div>';

			$this->session->set_flashdata('message',$message);
			redirect(login);
		}
	
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
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_expert',$edata);
				$this->load->view('admin/include/footer');

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
				 
						redirect('Admin/add_expert');
				 } else {
				  $avatar = $this->upload->data();
				  $Picture = $avatar['file_name'];

				  $idata['Picture']=$Picture;
				 }

				}
				
				
				$this->db->where('id',$id)->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_expert');

			}
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
			$this->load->view('admin/include/header');
			$this->load->view('admin/add_expert');
			$this->load->view('admin/include/footer');

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
			 
					redirect('Admin/add_expert');
			 } else {
			  $avatar = $this->upload->data();
			  $Picture = $avatar['file_name'];

			  $idata['Picture']=$Picture;
			 }

			}else{
 
			$message='<div class="alert alert-danger">Add Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('Admin/add_expert');



			}

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('Admin/add_expert');

		}
	}
	
	
	
	
	
	public function view_booking()
		{

			$data['booking'] =$this->db->select('*')->from('tbl_booking,tbl_user')->where('tbl_booking.User_ID=tbl_user.ID')->get()->result_array();
			

			$this->load->view('admin/include/header');
			$this->load->view('admin/view_booking',$data);
			$this->load->view('admin/include/footer');

		}


		public function delete_booking($id)
		{

			$this->db->where('B_ID',$id)->delete('tbl_booking');
 			

 			redirect('admin/view_booking');

		}
		
		public function view_gallery()
	{
		
		    $data['users']=$this->db->get('tbl_gallery')->result_array();
			
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/view_gallery',$data);
			$this->load->view('admin/include/footer');
	}
		public function delete_gallery($id)
		{

			$this->db->where('ID',$id)->delete('tbl_department');
 			

 			redirect('admin/view_gallery');

		}
	
	
}
