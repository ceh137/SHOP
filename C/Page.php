<?php

include_once "Base.php";
include_once "M/Catalog.php";

class Page extends Base
{
    function __construct()
    {
        parent::__construct();
    }

    public function act_index() {
        $this->title = "Main page of the shop.";
        $this->content = $this->Template('V/v_main.php', array());
    }

    public function act_catalog() {
        $this->title = "Our cars for sale";
        $cars = new Catalog();
        $products = $cars->getCars(1, 10);
        $this->content=$this->Template('V/v_catalog.php', array('cars' => $products));

    }
}