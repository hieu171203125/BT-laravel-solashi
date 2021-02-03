<?php
namespace App\Repositories\Web;
interface CartInterface {
    public function AddCartHome($product_id);
    public function AddCartDetail($product_id,$quantity);
    public function Update($product_id,$quantity);
    public function Delete($product_id);
}
?>