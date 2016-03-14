<?php

include'../kelas_post.php';

$response = array();

if (isset($_GET['id_post'])) {
    $idPost = filter_input(INPUT_GET, 'id_post');
    $idAuthor = filter_input(INPUT_GET, 'id_author');

    $pdao = new Post_dao_impl();
    $p = $pdao->find_one_by_author($idPost, $idAuthor);
	$response['id_author'] = $p->getId_author();
    $response['id_post'] = $p->getId();
    $response['judul'] = $p->getJudul_post();
    $response['isi'] = $p->getIsi();
    
    $response['success'] = 1;
    echo json_encode($response);
}else{
    $response['success'] = 0;
    echo json_encode($response);
}

