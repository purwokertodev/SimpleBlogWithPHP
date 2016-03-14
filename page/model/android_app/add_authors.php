<?php

include_once '../kelas_author.php';


$response = array();
if(isset($_POST['nama'])){
    $nama = filter_input(INPUT_POST, 'nama');
    $email = filter_input(INPUT_POST, 'email');
    $website = filter_input(INPUT_POST, 'website');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    $adao = new Author_dao_impl();
    
    $adao->save($nama, $email, $website, $username, $password);
    
	$response['success'] = 1;
	$response['message'] = "Data inserted..";
	echo json_encode($response);
}