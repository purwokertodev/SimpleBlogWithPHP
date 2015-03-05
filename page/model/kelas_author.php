<?php

include "./koneksi.php";

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Author {

    private $id;
    private $nama_author;
    private $email;
    private $web_site;
    private $username;
    private $password;

    public function getId() {
        return $this->id;
    }

    public function getNama_author() {
        return $this->nama_author;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getWeb_site() {
        return $this->web_site;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNama_author($nama_author) {
        $this->nama_author = $nama_author;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setWeb_site($web_site) {
        $this->web_site = $web_site;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}

interface Author_dao {

    public function save($nama_author, $email, $web_site, $username, $password);

    public function update($id, $nama_author, $email, $web_site, $username, $password);

    public function delete($id);

    public function find_one($id);

    public function login($username, $password);

    public function find_all();
}

class Author_dao_impl implements Author_dao {

    public function save($nama_author, $email, $web_site, $username, $password) {
        $query = "INSERT INTO author(nama_author, email, web_site, username, password)VALUES('$nama_author','$email','$web_site','$username','$password')";
        mysql_query($query);
    }

    public function update($id, $nama_author, $email, $web_site, $username, $password) {
        $query = "UPDATE author SET nama_author = '$nama_author', email = '$email', web_site = '$web_site',username = '$username', password = '$password' WHERE id = '$id'";
        mysql_query($query);
    }

    public function delete($id) {
        $query = "DELETE FROM author WHERE id = '$id'";
        mysql_query($query);
    }

    public function find_one($id) {
        $a = new Author();
        $query = "SELECT * FROM author WHERE id = '$id'";
        $sql = mysql_query($query);
        if ($sql) {
            $res = mysql_fetch_array($sql);
            $a->setId($res['id']);
            $a->setNama_author($res['nama_author']);
            $a->setEmail($res['email']);
            $a->setWeb_site($res['web_site']);
            $a->setUsername($res['username']);
            $a->setPassword($res['password']);
        }
        return $a;
    }
               
    public function login($username, $password) {
        $a = new Author();
        $query = "SELECT * FROM author WHERE username = '$username' AND password = '$password'";
        $sql = mysql_query($query);
        if ($sql) {
            $res = mysql_fetch_array($sql);
            $a->setId($res['id']);
            $a->setNama_author($res['nama_author']);
            $a->setEmail($res['email']);
            $a->setWeb_site($res['web_site']);
            $a->setUsername($res['username']);
            $a->setPassword($res['password']);
        }
        return $a;
    }

    public function find_all() {
        $hasil = array();
        $query = "SELECT * FROM author";
        $sql = mysql_query($query);
        while ($res = mysql_fetch_array($sql)) {
            $a = new Author();
            $a->setId($res['id']);
            $a->setNama_author($res['nama_author']);
            $a->setEmail($res['email']);
            $a->setWeb_site($res['web_site']);
            $a->setUsername($res['username']);
            $a->setPassword($res['password']);
            $hasil[] = $a;
        }
        return $hasil;
    }

}
