<?php while ($items = mysqli_fetch_assoc($names)) : ?>
    <h2 id="page_title"><?php echo $items['name']?></h2>
<?php endwhile; ?>

<div id="container">
    <?php while($product = mysqli_fetch_assoc($img_source)) : ?>
        <div class="col-6 col-md-4" >
            <h4 id="names"> <?= $product['nameof']; ?></h4>
            <div class="card">
                <img src="<?=$product['img_source1']; ?>" alt="Card Back"  id="images" href="#" role="button"/>
                <img src="<?=$product['img_source2']; ?>" alt="Card Front" class="img-top" id="second_images" href="#" role="button"/>
            </div>
            <p id="prices">Our price: $<?=$product['price']; ?></p>
            <p id="description"><?=$product['description'];?></p>
        </div>
    <?php endwhile; ?>
</div>
<footer class="text-center" id="footer">&copy; Copyright 2018 BeDazzle Shop</footer>
<footer class="text-center" id="footer">e-mail: nminyailo99@gmail.com</footer>