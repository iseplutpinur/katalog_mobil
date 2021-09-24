<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loader extends CI_Controller
{

	public function javascripts($filename)
	{
		$this->output->set_content_type('js');

		$file = $this->security->sanitize_filename($filename);
		if (file_exists(VIEWPATH . "$file.js")) {
			$this->load->view("$file.js");
		} else {
			show_404();
		}
	}

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
}
