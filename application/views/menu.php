<?php 

$level = $this->session->userdata('level_user');

if ($level == "Staf TU") {
	$this->load->view('menu/menu_staf');
} elseif ($level == "Ka. Subag TU" || $level == "Kepala Sekolah") {
	$this->load->view('menu/menu_kepala');
} else {
	$this->load->view('menu/menu_sadmin');
}
 ?>
