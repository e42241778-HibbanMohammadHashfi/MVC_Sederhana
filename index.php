<?php
require_once "controller/ProdukController.php";

// Buat objek controller
$controller = new ProdukController();

// Jalankan method index
$controller->index();
?>
