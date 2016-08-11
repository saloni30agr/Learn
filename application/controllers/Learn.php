<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learn extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$v=2;
		echo "hi ,this is new project" ;
		echo $v;
		
	}
}