<?php
namespace App\Repositories\Admin;
interface CartInterface {
    public function All();
    public function Find($id);
    public function Update($id);
    public function Destroy($id);
    public function Search($key);
}
?>