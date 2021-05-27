<div class="row row-cols-1 row-cols-md-2 g-4 my-5" id="cars">
    <?php foreach ($cars as $car) { ?>
        <div class="col">
            <div class="card" id="<?= $car['ID'] ?>">
                <img src="photos/<?= $car['img'] ?>.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $car['brand'] . " " . $car['car'] ?></h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a type="button" onclick="ToCart(<?= $car['ID'] ?>)" class="btn btn-outline-secondary">To Cart</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end my-2">
    <a class="btn btn-primary me-md-2" onclick="AddMore($( '.card' ).last().attr('id'))" type="button"> Next 10 cars </a>
</div>

