<?php
$this->load->view('_std/header');
//Conteúdo
if($tela != '') {$this->load->view('_pages/'.$page);}
//Conteúdo
$this->load->view('_std/footer');
?>

