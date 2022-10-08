<?php require_once('../process/process.php') ?>
<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<body class="animsition">

  <?php include('header.php'); ?>

  <!-- Product Detail -->
  <section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="row">
          <div class="col-md-6 col-lg-7 p-b-30">
            <div class="p-l-25 p-r-30 p-lr-0-lg">
              <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>
                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                <div class="slick3 gallery-lb">
                  <div class="item-slick3" data-thumb="../assets/images/product-07.jpg">
                    <div class="wrap-pic-w pos-relative">
                      <img src="../assets/images/product-07.jpg" alt="IMG-PRODUCT" />

                      <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../assets/images/product-07.jpg">
                        <i class="fa fa-expand"></i>
                      </a>
                    </div>
                  </div>

                  <div class="item-slick3" data-thumb="../assets/images/product-07.jpg">
                    <div class="wrap-pic-w pos-relative">
                      <img src="../assets/images/product-07.jpg" alt="IMG-PRODUCT" />

                      <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../assets/images/product-07.jpg">
                        <i class="fa fa-expand"></i>
                      </a>
                    </div>
                  </div>

                  <div class="item-slick3" data-thumb="../assets/images/product-07.jpg">
                    <div class="wrap-pic-w pos-relative">
                      <img src="../assets/images/product-07.jpg" alt="IMG-PRODUCT" />

                      <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../assets/images/product-07.jpg">
                        <i class="fa fa-expand"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 p-b-30">
            <div class="p-r-50 p-t-5 p-lr-0-lg">
            <?php
              if (count($errors) == 1) {
              ?>
                <div class="alert alert-danger text-center">
                  <?php
                  foreach ($errors as $showerror) {
                    echo $showerror;
                  }
                  ?>
                </div>
              <?php
              } elseif (count($success) == 1) {
              ?>
                <div class="alert alert-success text-center">
                  <?php
                  foreach ($success as $showsuccess) {
                    echo $showsuccess;
                  }
                  ?>
                </div>
              <?php
              }
              ?>
              <input type="hidden" name="prod_id" value="m3">
              <input type="hidden" name="prod_name" value="Men Style 3">
              <h4 class="mtext-105 cl2 js-name-detail p-b-14">Men Style 3</h4>

              <input type="hidden" name="prod_price" value="25">
              <span class="mtext-106 cl2"> $25.00 </span>

              <!--  -->
              <div class="p-t-33">
                <div class="flex-w flex-r-m p-b-10">
                  <div class="size-204 flex-w flex-m respon6">
                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                      <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-minus"></i>
                      </div>

                      <input class="mtext-104 cl3 txt-center num-product" type="number" name="prod_qty" value="1" readonly />

                      <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-plus"></i>
                      </div>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" name="addtocart" type="submit">
                        Add to cart
                      </button>
                      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" name="buynow" type="submit">
                        Buy Now
                      </button>
                    </div>
                  </div>


                  <div class="size-204 respon6-next  p-t-23">
                    <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                          <button class="accordion-button stext-101" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Description
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                          <div class="accordion-body stext-102">
                            Aenean sit amet gravida nisi. Nam fermentum est felis, quis
                            feugiat nunc fringilla sit amet. Ut in blandit ipsum.
                            Quisque luctus dui at ante aliquet, in hendrerit lectus
                            interdum. Morbi elementum sapien rhoncus pretium maximus.
                            Nulla lectus enim, cursus et elementum sed, sodales vitae
                            eros. Ut ex quam, porta consequat interdum in, faucibus eu
                            velit. Quisque rhoncus ex ac libero varius molestie. Aenean
                            tempor sit amet orci nec iaculis. Cras sit amet nulla
                            libero. Curabitur dignissim, nunc nec laoreet consequat,
                            purus nunc porta lacus, vel efficitur tellus augue in ipsum.
                            Cras in arcu sed metus rutrum iaculis. Nulla non tempor
                            erat. Duis in egestas nunc.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed stext-101" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Additional information
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <ul class="p-lr-28 p-lr-15-sm">
                              <li class="flex-w flex-t p-b-7">
                                <span class="stext-101 cl3"> Weight: </span>

                                <span class="stext-102 cl6 p-l-10"> 0.79 kg </span>
                              </li>

                              <li class="flex-w flex-t p-b-7">
                                <span class="stext-101 cl3"> Dimensions: </span>

                                <span class="stext-102 cl6 p-l-10">
                                  110 x 33 x 100 cm
                                </span>
                              </li>

                              <li class="flex-w flex-t p-b-7">
                                <span class="stext-101 cl3"> Materials: </span>

                                <span class="stext-102 cl6 p-l-10"> 60% cotton </span>
                              </li>

                              <li class="flex-w flex-t p-b-7">
                                <span class="stext-101 cl3"> Color: </span>

                                <span class="stext-102 cl6 p-l-10">
                                  Black, Blue, Grey, Green, Red, White
                                </span>
                              </li>

                              <li class="flex-w flex-t p-b-7">
                                <span class="stext-101 cl3"> Size: </span>

                                <span class="stext-102 cl6 p-l-10">
                                  XL, L, M, S
                                </span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
    </div>
  </section>

  <!-- Related Products -->
  <section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
      <div class="p-b-45">
        <h3 class="ltext-106 cl5 txt-center">Related Products</h3>
      </div>

      <!-- Slide2 -->
      <div class="wrap-slick2">
        <div class="slick2">
          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="../assets/images/product-05.jpg" alt="IMG-PRODUCT" />
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l">
                  <a href="men-style-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Men Style 1
                  </a>

                  <span class="stext-105 cl3"> $16.64 </span>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="../assets/images/product-06.jpg" alt="IMG-PRODUCT" />
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l">
                  <a href="men-style-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Men Style 2
                  </a>

                  <span class="stext-105 cl3"> $35.31 </span>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="../assets/images/product-08.jpg" alt="IMG-PRODUCT" />
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l">
                  <a href="men-style-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Men Style 4
                  </a>

                  <span class="stext-105 cl3"> $25.50 </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php') ?>

</body>

</html>