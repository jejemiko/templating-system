<?php
/** menyisipkan file config.php ke dalam file config.php */
require ( __DIR__ . '/config.php' );

/**
 * pengkondisian if inline untuk mengecek apa $_GET['page'] sudah diset atau belum
 * contoh $_GET['page'] belum diset, ketika url menunjukkan http://localhost/webkita
 * contoh $_GET['page'] sudah diset, ketika url menunjukkan http://localhost/webkita/?page=nilai
 * yang kemudian disimpan ke dalam $page karena nilai dari $_GET tersebut akan digunakan untuk memanggil
 * file di dalam folder themes. jika belum diset maka $page secara default bernilai 'home', jika sudah diset
 * $page akan bernilai sama dengan $_GET['page']
 */


$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'home';


/**
 * menyimpan alamat folder themes ke dalam variabel, agar lebih mudah di gunakan nantinya
 * /

$theme = __DIR__ . '/themes/';

// cek apakah ada nama file yang cocok dengan nilai $_GET['page'] di folder themes

if( file_exists($theme.$page.'.php')  )
{

	//jika ada file tersebut akan dipanggil dan ditampilkan kehalaman.
	require ( $theme.$page.'.php' );


}else{


	// jika tidak ada maka file 404.php yang akan dipanggil
	require ( $theme.'/404.php');
}
?>
