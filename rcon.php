<?php
  require 'config.php';
  require './PHP-Minecraft-Query/src/MinecraftQuery.php';
	require './PHP-Minecraft-Query/src/MinecraftQueryException.php';

	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;

	$Query = new MinecraftQuery( );

	try
	{
		$Query->Connect( 'localhost', 25565 );

		print_r( $Query->GetInfo( ) );
		print_r( $Query->GetPlayers( ) );
	}
	catch( MinecraftQueryException $e )
	{
		echo $e->getMessage( );
	}
  function send_item($command){
    //ส่งของผ่าน rcon
    return true;//ส่งสำเร็จไหม
  }
?>
