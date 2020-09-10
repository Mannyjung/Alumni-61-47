<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller {

function __construct(){
	parent::__construct();
	echo "My construct"."</br>";
}
	public function index()
	{
		$this->load->view('welcome_message');
		

	}
	public function show($name=null,$last=null)
	{
		echo "Hello ".$name." ".$last;
		$this->_display();
		
	}
	
	public function _display()
	{
		echo "</br>"."SEEEE"."</br>";
		// $data['name'] = "Muangman";
		// $data['email'] = "Muangman@gmail.com";
		$data['student'] = array("614259041","Muangman","Srathongjeen","Software Engineer");
		$this->load->view("hello_view",$data);
		}
	
}
