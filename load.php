<?php

require ( __DIR__ . '/config.php' );

$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'home';

$theme = __DIR__ . '/themes/';

if( file_exists($theme.$page.'.php')  )
{
	require ( $theme.$page.'.php' );

}else{

	require ( $theme.'/404.php');
}