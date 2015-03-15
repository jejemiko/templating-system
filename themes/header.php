<?php
$pages = ( isset($_GET['page']) )? $_GET['page'] : 'Home';
?>

<html>
	<head>
		<title>Halaman <?php echo $pages;?></title>
	</head>
<body>
<h1>Header</h1>
<hr>

<?php require('menu.php');?>