<?php
include "includes/head.php"
?>

<body>

    <div class="site-wrap">
        <?php
    include "includes/header.php"
    ?>
        <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
                            <h1>Welcome To Pharma</h1>
                            <p>
                                <a href="store.php" class="btn btn-primary px-5 py-3">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-stretch section-overlap">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap bg-primary h-100">
                            <a href="#" class="h-100">
                                <h5>Free <br> Shipping</h5>
                                <p>
                                    रु0 charge for all your orders delivery
                                    <strong>for Orders above रु199.</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap h-100">
                            <a href="#" class="h-100">
                                <h5>Season <br> Sale 50% Off</h5>
                                <p>
                                    Up to 80% off on health products.

                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap bg-warning h-100">
                            <a href="#" class="h-100">
                                <h5>New <br> Products</h5>
                                <p>
                                    Explore more than 10,000 products.
                                </p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">Products You Might Like</h2>
                    </div>
                </div>

                <div class="row">
                    <?php
          $data = all_products();
          $num = sizeof($data);
          for ($i = 0; $i < $num; $i++) {
          ?>
                    <div class="col-sm-6 col-lg-4 text-center item mb-4">
                        <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"> <img
                                class="rounded mx-auto d-block" style="width:20vw ; height:40vh ;"
                                src="images/<?php echo $data[$i]['item_image'] ?>" alt="Image"></a>
                        <?php if (strlen($data[$i]['item_title']) <= 20) { ?>
                        <h3 class="text-dark"><a
                                href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"><?php echo $data[$i]['item_title'] ?></a>
                        </h3>
                        <?php
              } else {
              ?>
                        <h3 class="text-dark"><a
                                href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></a>
                        </h3>
                        <?php
              }
              ?>
                        <p class="price">रु<?php echo $data[$i]['item_price'] ?></p>
                    </div>
                    <?php
            if ($i == 5) {
              break;
            }
          }
          ?>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="store.php" class="btn btn-primary px-4 py-3">View All Products</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">New Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 block-3 products-wrap">
                        <div class="nonloop-block-3 owl-carousel">
                            <?php
              $data = all_products_reverse();

              $num = sizeof($data);
              for ($i = 0; $i < $num; $i++) {
              ?>
                            <!--  -->
                            <div class="  text-center item mb-4">
                                <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"> <img
                                        class="rounded mx-auto d-block" style="width:20vw ; height:vh ;"
                                        src="images/<?php echo $data[$i]['item_image'] ?>" alt="Image"></a>

                                <h3 class="text-dark"><a
                                        href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>">Umcka Cold
                                        Care</a></h3>

                                <p class="price">रु<?php echo $data[$i]['item_price'] ?></p>
                            </div>
                            <!--  -->
                            <?php
                if ($i == 5) {
                  break;
                }
              }
              ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">Testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 block-3 products-wrap">
                        <div class="nonloop-block-3 no-direction owl-carousel">

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_1.jpg" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione ducimus quidem eligendi consectetur mollitia veniam dolore dolorem suscipit praesentium? Optio beatae debitis animi vel quae nemo minus culpa reiciendis facere.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; saklhfskj</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_2.jpg" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid saepe amet facere, impedit, animi tempora tenetur eum sit rem ex adipisci porro nulla error enim! Odio, iusto? Aliquid, similique animi.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Sanam Adhikari</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_3.jpg" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis incidunt accusamus maxime natus. Minus doloribus consectetur sit, eveniet aperiam labore voluptas minima vitae doloremque aspernatur ea accusamus cum corporis qui!&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Nashib Bhujel</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_4.jpg" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ad soluta facere fugit maxime ab quidem dolor ducimus aut unde labore iure facilis officia in dolores repellat ipsum laborum nihil.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Er.Amrit Paudel</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
    include "includes/footer.php"
    ?>
    </div>



</body>

</html>