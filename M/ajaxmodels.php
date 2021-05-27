<?php
include "Catalog.php";

function AddMore($id) {
    $cars = new Catalog();
    $last_id = $id;
    $products = $cars->getCars( $last_id , 10);
    $htmlStr = '';
    foreach ( $products as $car) {
        $id = $car['ID'];
        $img = $car['img'];
        $name = $car['brand'] . " " . $car['car'];
        $htmlStr .= "<div class='col''>";
        $htmlStr .= "<div class='card' id=$id>";
        $htmlStr .= "<img src='photos/$img.jpg' class='card-img-top' alt='...'>";
        $htmlStr .=  "<div class='card-body'>";
        $htmlStr .=   "<h5 class='card-title'>$name</h5>";
        $htmlStr .=  "<p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <a type='button' onclick='ToCart( $id )' class='btn btn-outline-secondary'> To Cart </a> </div> </div> </div> ";
    };

     echo $htmlStr;
}

//if (isset($_POST['last_id'])) {
    $id = $_POST['last_id'];
    AddMore($id);
//}

