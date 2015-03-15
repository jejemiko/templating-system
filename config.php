<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */
 
 $url = 'http://localhost/templating-system/';

 $dbhost = '';
 $dbuser = '';
 $dbpass = '';
 $dbname = '';
 
 $connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

 if( $connect->connect_error )
 {
 	die('Gagal Sambungan : '. $connect->connect_error);
 }
 ?>
