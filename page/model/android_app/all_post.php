<?php

include '../kelas_post.php';
include '../kelas_author.php';

$pdao = new Post_dao_impl();
$adao = new Author_dao_impl();
$listPost = $pdao->find_all();


$response['data'] = array();

if(count($listPost) > 0){
    for($i=0;$i<count($listPost);$i++){
        $p = $listPost[$i];
        $data['id'] = $p->getId();
        
        $author = $adao->find_one($p->getId_author());
		$author_id = $author->getId();
        $author_name = $author->getNama_author();
		$data['id_author'] = $author_id;
        $data['author'] = $author_name;
        $data['judul'] = $p->getJudul_post();
        $data['isi'] = $p->getIsi();
        $data['tanggal'] = $p->getTanggal();
        array_push($response['data'], $data);
    }
    
    $response['success'] = 1;
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "Tidak ada data yang ditemukan";
    echo json_encode($response);
}
