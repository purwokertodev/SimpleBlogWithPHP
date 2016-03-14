<?php
include '../kelas_post.php';
	
	
$response = array();

if(isset($_POST['id_post'])){

    $id = filter_input(INPUT_POST, 'id_post');
	$idAuthor = filter_input(INPUT_POST, 'id_author');
	$judul = filter_input(INPUT_POST, 'judul');
	$isi = filter_input(INPUT_POST, 'isi');
	
	settype($idAuthor,'int');
	
	$pdao = new Post_dao_impl();
	$pdao->update($id, $idAuthor, $judul, $isi);
	
	$response['success'] = 1;
	$response['message'] = 'Data updated';
	echo json_encode($response);
}