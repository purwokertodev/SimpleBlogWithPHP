<?php

include '../kelas_post.php';

$response['data'] = array();

if (isset($_GET['id'])) {
    $id_author = filter_input(INPUT_GET, 'id');

    $pdao = new Post_dao_impl();
    $listPost = $pdao->find_by_author($id_author);




    if (count($listPost) > 0) {
        for ($i = 0; $i < count($listPost); $i++) {
            $p = $listPost[$i];
            $data['id'] = $p->getId();
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
} else {
    $response["success"] = 0;
    $response["message"] = "Tidak ada data yang ditemukan";
    echo json_encode($response);
}

