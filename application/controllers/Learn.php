<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learn extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$no=2;
		echo $no*3;
	}
}