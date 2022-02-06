<?php include 'header.php'; ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product['name']; ?></h3>
                            <h4 class="card-title">Tk. <?php echo $product['price']; ?></h4>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Detail</a>
                            <a href="" class="btn btn-outline-info">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>