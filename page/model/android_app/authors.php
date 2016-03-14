<?php

include_once '../kelas_author.php';

$adao = new Author_dao_impl();
$listAuthor = $adao->find_all();

$response['data'] = array();

if (count($listAuthor) > 0) {
    for ($i = 0; $i < count($listAuthor); $i++) {
        $a = $listAuthor[$i];

        $data = array();

        $data['id'] = $a->getId();
        $data['nama'] = $a->getNama_author();
        $data['email'] = $a->getEmail();
        $data['website'] = $a->getWeb_site();
        $data['username'] = $a->getUsername();
        $data['password'] = $a->getPassword();

        array_push($response['data'], $data);
    }

    // sukses
    $response["success"] = 1;

    // echo JSON response
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "Tidak ada data yang ditemukan";
    echo json_encode($response);
}
