<?php

include "koneksi.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Post {

    private $id;
    private $id_author;
    private $tanggal;
    private $judul_post;
    private $isi;

    public function getId() {
        return $this->id;
    }

    public function getId_author() {
        return $this->id_author;
    }

    public function getTanggal() {
        return $this->tanggal;
    }
    
    public function getJudul_post() {
        return $this->judul_post;
    }

    
    public function getIsi() {
        return $this->isi;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_author($id_author) {
        $this->id_author = $id_author;
    }

    public function setTanggal($tanggal) {
        $this->tanggal = $tanggal;
    }
    
    public function setJudul_post($judul_post) {
        $this->judul_post = $judul_post;
    }

    
    public function setIsi($isi) {
        $this->isi = $isi;
    }

}

interface Post_dao {

    public function save($id_author,$judul_post, $isi);

    public function update($id, $id_author, $judul_post, $isi);

    public function delete($id, $id_author);

    public function find_one($id);
    
    public function find_one_by_author($id, $id_author);

    public function find_by_author($id_author);

    public function find_all();
    
    public function jumlah_post_by_author($id_author);
}

class Post_dao_impl implements Post_dao{
    public function delete($id, $id_author) {
        $query = "DELETE FROM posting WHERE id = '$id' AND id_author = '$id_author'";
        mysql_query($query);
    }

    public function find_all() {
        $hasil = array();
        $query = "SELECT * FROM posting ORDER BY id DESC";
        $sql = mysql_query($query);
        while($res = mysql_fetch_array($sql)){
            $p = new Post();
            $p->setId($res['id']);
            $p->setId_author($res['id_author']);
            $p->setTanggal($res['tanggal']);
            $p->setJudul_post($res['judul_post']);
            $p->setIsi($res['isi']);
            $hasil[] = $p;
        }
        return $hasil;
    }

    public function find_by_author($id_author) {
        $hasil = array();
        $query = "SELECT * FROM posting WHERE id_author = '$id_author' ORDER BY id DESC";
        $sql = mysql_query($query);
        while($res = mysql_fetch_array($sql)){
            $p = new Post();
            $p->setId($res['id']);
            $p->setId_author($res['id_author']);
            $p->setTanggal($res['tanggal']);
            $p->setJudul_post($res['judul_post']);
            $p->setIsi($res['isi']);
            $hasil[] = $p;
        }
        return $hasil;
    }

    public function find_one($id) {
        $p = new Post();
        $query = "SELECT * FROM posting WHERE id = '$id'";
        $sql = mysql_query($query);
        if($sql){
            $res = mysql_fetch_array($sql);
            $p->setId($res['id']);
            $p->setId_author($res['id_author']);
            $p->setTanggal($res['tanggal']);
            $p->setJudul_post($res['judul_post']);
            $p->setIsi($res['isi']);
        }
        return $p;
    }

    public function save($id_author,$judul_post, $isi) {
        $query = "INSERT INTO posting(id_author, tanggal, judul_post, isi)VALUES($id_author,now(),'$judul_post','$isi')";
        mysql_query($query);
    }

    public function update($id, $id_author,$judul_post, $isi) {
        $query = "UPDATE posting SET judul_post = '$judul_post', isi = '$isi' WHERE id = '$id' AND id_author = '$id_author'";
        mysql_query($query);
    }

    public function find_one_by_author($id, $id_author) {
        $p = new Post();
        $query = "SELECT * FROM posting WHERE id = '$id' AND id_author = '$id_author'";
        $sql = mysql_query($query);
        if($sql){
            $res = mysql_fetch_array($sql);
            $p->setId($res['id']);
            $p->setId_author($res['id_author']);
			$p->setJudul_post($res['judul_post']);
            $p->setTanggal($res['tanggal']);
            $p->setIsi($res['isi']);
        }
        return $p;
    }

    public function jumlah_post_by_author($id_author) {
        $jumlah = 0;
        $query = "SELECT COUNT(*) AS JUMLAH_POST FROM posting WHERE id_author = '$id_author'";
        $sql = mysql_query($query);
        while($res = mysql_fetch_array($sql)){
            $jumlah = $res['JUMLAH_POST'];
        }
        return $jumlah;
    }

}
