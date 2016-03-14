<?php
include '../kelas_author.php';

$response = array();

if(isset($_POST['username'])){
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    $adao = new Author_dao_impl();
    $a = $adao->login($username, $password);
    
    if($a->getUsername() == $username && $a->getPassword() == $password){
        $response['success'] = 1;
        $response['message'] = "Youve been login.. ";
        $response['username'] = $a->getUsername();
        $response['password'] = $a->getPassword();
        $response['id'] = $a->getId();
	echo json_encode($response);
    }  else {
        $response['success'] = 0;
        $response['message'] = "Username atau password tidak valid !! ";
		echo json_encode($response);
    }
    
}

