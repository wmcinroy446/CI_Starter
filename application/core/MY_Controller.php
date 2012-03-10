<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class replaces the default Controller for CI with one that can 
 * have common functionality included in it.
 * 
 * @package libraries/My_Controller
 * @author Wessley McInroy
 * @version 1.0
 */

if ( ! class_exists('Controller'))
{
	class Controller extends CI_Controller {}
}

class MY_Controller extends Controller {

	function __construct()
	{
		parent::__construct();
	}
}
