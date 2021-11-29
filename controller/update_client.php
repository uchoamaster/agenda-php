<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$update_client = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)) {
	$manager->updateClient("registros", $update_client, $id);

	header("Location: ../index.php?client_update");
}

?>