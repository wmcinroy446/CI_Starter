<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		// get the path of the page we wish to view
		$path = $this->uri->segment(1);

		if($path == '') {
			// if no path, get the default page
			$data = '';
		} else {
			// lookup the page from the database
			$data = '';
		}

		if(empty($data)) {
			// if we cant find the page in the db, show a 404.
			show_404($path, true);
		} else {
			// otherwise set the content to the page
		}
	}
}
