<?php include('./carddata.php')?>

<style>
    .margin0{
        margin: 0 !important;
    }
    .row{
        margin: 0;
    }

</style>
<div class="album py-5 bg-light">
        <div class="container-fluid margin0">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 ">
                <?php
                foreach ($products as $product) {
                    echo "<div class='col'>
                        <div class='card shadow-sm'>
                            <img class='bd-placeholder-img card-img-top' src='".$product["image"]."' width='100%' height='225' />

                            <div class='card-body'>
                                <h5 class='card-title'>".$product["pname"]."</h5>
                                <p class='card-text'>Price: ".$product["price"]."</p>
                                <p class='card-text'>Quantity: ".$product["quantity"]."</p>
                            </div>
                        </div>
                    </div>";
                }
                ?>

            </div>