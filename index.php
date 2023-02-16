

<?php include('layouts/header.php'); ?>


      <!--Home-->
      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1><span>Best Prices</span> This Season</h1>
          <p>Satt Vedic offers the best products for the most affordable prices</p>
          <button>Shop Now</button>
        </div>
      </section>

      <!--Brand
      <section id="brand" class="container">
        <div class="row m-0">
           <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.png"/>
           <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.png"/>
           <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.jpeg"/>
        </div>
      </section>-->

      <!--New-->
      <section id="new" class="w-100">
        <div class="row p-0 m-0">
          <!--One-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/1.jpeg"/>
            <div class="details">
              <h2>Pure and Natural pulses </h2>
              <button class="text-uppercase"><a href="/shop.php">Shop Now</a></button>
            </div>
          </div>
          <!--Two-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/2.jpeg"/>
            <div class="details">
              <h2>Hand-picked Dry Fruits</h2>
              <button class="text-uppercase"><a href="/shop.php">Shop Now</a></button>
            </div>
          </div>

          <!--Three-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/3.jpeg"/>
            <div class="details">
              <h2>50% OFF on Oil Products</h2>
              <button class="text-uppercase"><a href="/shop.php">Shop Now</a></button>
            </div>
          </div>
        </div>
      </section>



      <!--Featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Our Featured</h3>
          <hr class="mx-auto">
          <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_featured_products.php'); ?>


        <?php while($row= $featured_products->fetch_assoc()){ ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
           <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>
      
 
          <?php } ?>
        </div>
      </section>


      <!--Banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>Autumn Collection <br> UP to 30% OFF</h1>
          <button class="text-uppercase">shop now</button>
        </div>
      </section>
   

      <!--Seeds-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Seeds</h3>
          <hr class="mx-auto">
          <p>Checkout our hand-picked seeds</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_seeds.php'); ?>

        <?php while($row=$seeds_products->fetch_assoc()){ ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$ <?php echo $row['product_price']; ?> </h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>
          
          <?php } ?>
         
          
        </div>
      </section>


      <!--Organic Herbs-->
     <section id="herbes" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Organic Herbal Extracts</h3>
        <hr class="mx-auto">
        <p>Check out our organic herbal extracts.</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_herbes.php'); ?>
      <?php while($row=$herbes_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
        </div>

      <?php } ?>
        
     
      </div>
     </section>

      <!--Spices-->
      <section id="spices" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Hot Spices</h3>
          <hr class="mx-auto">
          <p>Here you can check out our amazing hot spices.</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_spices.php');?>

        <?php while($row=$spices->fetch_assoc()){ ?>


          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>

        <?php } ?>
         
        
        </div>
      </section>

    
 


<?php include('layouts/footer.php'); ?>
