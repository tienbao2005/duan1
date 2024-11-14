<?php 

class HomeController
{

public $modelSanPham;
public function __construct()
{
    $this->modelSanPham =new SanPham();
}

  public function home(){
    echo "đây là home ";
  }  
  public function trangchu(){
    echo "đây là trangchu ";
}

public function danhSachSanPham(){
    $listProduct= $this->modelSanPham->getAllProduct();
    // var_dump($listProduct);die();
    require_once './views/listProduct.php'
}


}
?>