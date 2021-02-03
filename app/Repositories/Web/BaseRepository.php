<?php
namespace App\Repositories\Web;
interface BaseRepository {
    public function All();
    public function Find($id);
    public function OnTop();
    public function Relate($id);
    public function Search($key);
     public function ByCategory($category_id);
    // public function update($id);
    // public function delete($id);
}
?>