<?php
namespace App\Repositories\Admin;
interface AdminProductInterface {
    public function All();
    public function Find($id);
    public function update($id);
    public function Destroy($id);
    public function Search($key);
}
?>