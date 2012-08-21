<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

	/**
	 * 
	 */
	class Users extends CI_Controller {
		
		function __construct() {
			
			parent::__construct();
		}
		
		function index(){
			
			$this->load->view('login_view');
		}
		
		function staff(){
			
			$this->load->view('staff_view');
		}
		
		function student() {
			
			$this->load->view('student_view');
		}
		
		function room_task() {
			
			$this->load->view('room_task_view');
		}
		
		function center_task() {
			
			$this->load->view('center_task_view');
		}
		
	}
	






?>