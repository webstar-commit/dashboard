<?php
	include("../../src/config.php");
	$cmd = isset($_GET['cmd'])?$_GET['cmd']:"";

	
	$o_bond = new Bond();
	switch($cmd)
	{		
		case "getTurn":		
			echo $o_bond->getTurn();
			break;
		case "del":
			echo $o_bond->deleteRecord();
			break;
		default:
			
			echo $o_bond->getRecords();
			break;
	}
	
?>
