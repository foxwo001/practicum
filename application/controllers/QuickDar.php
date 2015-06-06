<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuickDar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/QuickDar
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/QuickDar/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// load the main page
		$this->load->view('header');
		$this->load->view('quickdar');
		$this->load->view("footer");
		
	}

	/**this gets the data from post**/
	public function data_submitted()
	{
		
		// create a session for the user
		$session_id = session_id();
		
		// configure the file to be uploaded from post data
		$config['file_name']= $session_id . '.htm';
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'htm';
		$config['max_size']	= '10000';

		// store file from post
		$this->load->library('upload', $config);

		//do the upload
		if ( ! $this->upload->do_upload('file'))
		{
			// if theres an error spit out some errors
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{	
			// if theres good data spit that out
			$data = array('upload_data' => $this->upload->data());
		}

		// redirect the post
		redirect('../mysummary');

	}

	public function mysummary()
	{
		// get the session data
		$session_id = session_id();
				//read the uploaded file to this string
		// i probably need a better variable
		$myDar=read_file('./uploads/'.$session_id.'.htm');

		////summarise file
		//get html from string
		
		//////////////////

		// package html for the page
		$data = array('mydata'=>$myDar);
		
		// load this page
		$this->load->view("header");
		$this->load->view("mysummary",$data);
		$this->load->view("summaryfooter");


	}

	public function error()
	{
		//todo handle errors


	}



	public function _take_out_trash()
	{
		// only a scheduled chron job should call this 
		$path=$this->config->base_url()."../uploads";
		delete_files($path, true);
		// copy a 403 forbiden page to the uploads folder
		$string = read_file('/application/views/index.html');
		write_file($path, $string);

	}




}
