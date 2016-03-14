<?php

include "koneksi.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Komentar {

    private $id;
    private $id_posting;
    private $pengirim;
    private $tanggal;
    private $isi;

    public function getId() {
        return $this->id;
    }

    public function getId_posting() {
        return $this->id_posting;
    }

    public function getPengirim() {
        return $this->pengirim;
    }

    public function getTanggal() {
        return $this->tanggal;
    }

    public function getIsi() {
        return $this->isi;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_posting($id_posting) {
        $this->id_posting = $id_posting;
    }

    public function setPengirim($pengirim) {
        $this->pengirim = $pengirim;
    }

    public function setTanggal($tanggal) {
        $this->tanggal = $tanggal;
    }

    public function setIsi($isi) {
        $this->isi = $isi;
    }

}

interface Komentar_dao {

    public function save($id_posting, $pengirim, $isi);

    public function update($id, $id_posting, $pengirim, $isi);

    public function delete($id, $id_posting);
    
    public function delete_by_post($id_posting);

    public function find_one($id, $id_posting);

    public function find_by_post($id_posting);

    public function find_all();
    
    public function hitung_jumlah_komentar($id_posting);
}

class Komentar_dao_impl implements Komentar_dao{
    
    public function delete($id, $id_posting) {
        $query = "DELETE FROM komentar WHERE id = '$id' AND id_posting = '$id_posting'";
        mysql_query($query);
    }

    public function find_all() {
        $hasil = array();
        $query = "SELECT * FROM komentar";
        $sql = mysql_query($query);
        while($res = mysql_fetch_array($sql)){
            $k = new Komentar();
            $k->setId($res['id']);
            $k->setId_posting($res['id_posting']);
            $k->setPengirim($res['pengirim']);
            $k->setTanggal($res['tanggal']);
            $k->setIsi($res['isi']);
            $hasil[] = $k;
        }
        return $hasil;
    }

    public function find_by_post($id_posting) {
        $hasil = array();
        $query = "SELECT * FROM komentar WHERE id_posting = '$id_posting'";
        $sql = mysql_query($query);
        while($res = mysql_fetch_array($sql)){
            $k = new Komentar();
            $k->setId($res['id']);
            $k->setId_posting($res['id_posting']);
            $k->setPengirim($res['pengirim']);
            $k->setTanggal($res['tanggal']);
            $k->setIsi($res['isi']);
            $hasil[] = $k;
        }
        return $hasil;
    }

    public function find_one($id, $id_posting) {
        $k = new Komentar();
        $query = "SELECT * FROM komentar WHERE id = '$id' AND id_posting = '$id_posting'";
        $sql = mysql_query($query);
        if($sql){
            $res = mysql_fetch_array($sql);
            $k = new Komentar();
            $k->setId($res['id']);
            $k->setId_posting($res['id_posting']);
            $k->setPengirim($res['pengirim']);
            $k->setTanggal($res['tanggal']);
            $k->setIsi($res['isi']);
        }
        return $k;
    }

    public function save($id_posting, $pengirim, $isi) {
        $query = "INSERT INTO komentar(id_posting, pengirim, tanggal, isi)VALUES('$id_posting','$pengirim',now(),'$isi')";
        mysql_query($query);
    }

    public function update($id, $id_posting, $pengirim, $isi) {
        $query = "UPDATE komentar SET pengirim = '$pengirim', tanggal = now() isi = '$isi' WHERE id = '$id' AND id_posting = '$id_posting'";
        mysql_query($query);
    }

    public function hitung_jumlah_komentar($id_posting) {
        $jumlah = 0;
        $query = "SELECT COUNT(*) AS JUMLAH_KOMENTAR FROM komentar WHERE id_posting = '$id_posting'";
        $sql = mysql_query($query);
        while($res = mysql_fetch_array($sql)){
            $jumlah = $res['JUMLAH_KOMENTAR'];
        }
        return $jumlah;
    }

    public function delete_by_post($id_posting) {
        $query = "DELETE FROM komentar WHERE id_posting = '$id_posting'";
        mysql_query($query);
    }

}
