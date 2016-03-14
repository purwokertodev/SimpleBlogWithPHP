<?php
include '../kelas_post.php';
	
	
$response = array();

if(isset($_POST['id_author'])){

	$idAuthor = filter_input(INPUT_POST, 'id_author');
	$judul = filter_input(INPUT_POST, 'judul');
	$isi = filter_input(INPUT_POST, 'isi');
	
	settype($idAuthor,'int');
	
	$pdao = new Post_dao_impl();
	$pdao->save($idAuthor, $judul, $isi);
	
	$response['success'] = 1;
	$response['message'] = 'Data inserted';
	echo json_encode($response);
}