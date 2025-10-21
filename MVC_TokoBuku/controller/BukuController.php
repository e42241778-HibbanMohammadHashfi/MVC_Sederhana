<?php
require_once "model/Buku.php";
require_once "view/bukuView.php";

class BukuController {
    public function index() {
        $model = new Buku();
        $view = new BukuView();
        $bukuList = $model->getAllBuku();
        $view->tampilkan($bukuList);
    }
}
?>

