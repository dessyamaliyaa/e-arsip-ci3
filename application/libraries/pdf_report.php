<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__file__).'/tcpdf/tcpdf.php';

class Pdf_report extends TCPDF{

	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}

}
?>