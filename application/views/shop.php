        <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Shop</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-12">
              <p class="text-muted lead">Text here.</p>
              <div class="row products products-big">
                <?php foreach($product as $p) { ?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shopdetail/<?php echo $p->id_product; ?>"><img src="<?php echo base_url('assets/product_images/'); ?><?php echo $p->product_img1; ?>" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shopdetail/<?php echo $p->id_product; ?>"><?php echo $p->product_title; ?></a></h3>
                      <p class="price"><?php echo $p->product_price; ?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
              <div class="pages">
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <?php echo $pagination; ?>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>