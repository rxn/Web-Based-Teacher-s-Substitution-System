<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admincontrol extends CI_Controller {

	public function index() {

		$data['admincontent'] = 'dashboard';
		$this -> load ->view('base/admin/template', $data);
	}

		public function schedule(){

		$data['admincontent'] ='teacherschedules';
		$this -> load ->view('base/admin/template', $data);
	}



	public function request() {

		$data['admincontent'] ='requestsubstitution';
		$this -> load ->view('base/admin/template', $data);
	}


	public function vouch(){

		$data['admincontent'] ='vouchteachers';
		$this -> load ->view('base/admin/template', $data);
	}

	public function remind(){

		$data['admincontent'] ='remindsubteachers';
		$this -> load ->view('base/admin/template', $data);
	}

	public function viewabsent(){

		$data['admincontent'] ='viewabsentteacher';
		$this -> load ->view('base/admin/template', $data);
	}

	public function viewsubstitute(){

		$data['admincontent'] ='viewsubstituteteacher';
		$this -> load ->view('base/admin/template', $data);
	}


	public function user()
	{

		$data['admincontent'] = 'adduser';
		$this -> load -> view ('base/admin/template', $data);

	}

		public function useraccount()
	{

		$data['admincontent'] = 'viewusers';
		$this -> load -> view ('base/admin/template', $data);

	}

}