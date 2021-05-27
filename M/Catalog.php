<?php
include_once "DB.class.php";

class Catalog extends DB
{
    public function getCars($id_s, $count) {
        return $this->Select("SELECT * FROM `products` WHERE `ID` > {$id_s} LIMIT {$count}");
    }
}