<?php require_once ROOT . '/views/clothing/header.php'; ?>
        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Prodcut Details</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="/">Home</a></li>
                    <li class="active">product-details</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        <?php foreach ($singleProduct as $item): ?>
        <!--single-protfolio-area are start-->
        <div class="single-protfolio-area ptb-70">
          <div class="container">
              <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                       <div class="portfolio-thumbnil-area">
                        <div class="product-more-views">
                            <div class="tab_thumbnail" data-tabs="tabs">
                                <div class="thumbnail-carousel">
                                    <ul>
                                       <li class="active">
                                        <a href="#view11" class="shadow-box" aria-controls="view11" data-toggle="tab"><img src="/views/clothing/images/product/<?=$item['image'];?>" alt="" /></a></li>
                                       <li>
                                        <a href="#view22" class="shadow-box" aria-controls="view22" data-toggle="tab"><img src="/views/clothing/images/product/<?=$item['image_2'];?>" alt="" /></a></li>
                                       <li>
                                        <a href="#view33" class="shadow-box" aria-controls="view33" data-toggle="tab"><img src="/views/clothing/images/product/03.jpg" alt="" /></a></li>
                                       <li>
                                        <a href="#view44" class="shadow-box" aria-controls="view44" data-toggle="tab"><img src="/views/clothing/images/product/04.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content active-portfolio-area pos-rltv">
                           <div class="social-tag">
                              <a href="#"><i class="zmdi zmdi-share"></i></a>
                           </div>
                            <div role="tabpanel" class="tab-pane active" id="view11">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="/views/clothing/images/product/<?=$item['image'];?>"><img src="/views/clothing/images/product/<?=$item['image'];?>" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view22">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="/views/clothing/images/product/<?=$item['image_2'];?>"><img src="/views/clothing/images/product/<?=$item['image_2'];?>" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view33">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="/views/clothing/images/product/03.jpg"><img src="/views/clothing/images/product/03.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view44">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="/views/clothing/images/product/04.jpg"><img src="/views/clothing/images/product/04.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="single-product-description">
                           <div class="sp-top-des">
                                <h3><?=$item['name'];?><span>(Brand)</span></h3>
                                <div class="prodcut-ratting-price">
                                    <div class="prodcut-ratting">
                                        <? for($i = 0; $i < $item['rating']; $i++): ?>
                                            <a href="#" tabindex="0"><i class="fa fa-star"></i></a>
                                        <? endfor; ?>
                                        <? for($i = $item['rating']; $i < 5; $i++): ?>
                                            <a href="#" tabindex="0"><i class="fa fa-star-o"></i></a>
                                        <? endfor; ?>
                                    </div>
                                    <div class="prodcut-price">
                                        <div class="new-price"> $<?=$item['price'];?> </div>
                                        <div class="old-price"> <del>$250</del> </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sp-des">
                                <p><?=$item['description'];?></p>
                            </div>
                            <div class="sp-bottom-des">
                            <div class="single-product-option">
                                <div class="sort product-type">
                                    <label>Color: </label>
                                    <select id="input-sort-color">
                                        <option value="#">Red</option>
                                        <option value="#">Blue</option>
                                        <option value="#">Green</option>
                                        <option value="#">Purple</option>
                                        <option value="#">Yellow</option>
                                        <option value="#">Black</option>
                                        <option value="#">Grey</option>
                                        <option value="#">White</option>
                                        <option value="#" selected>Chose Your Color</option>
                                    </select>
                                </div>
                                <div class="sort product-type">
                                    <label>Size: </label>
                                    <select id="input-sort-size">
                                        <option value="#">S</option>
                                        <option value="#">M</option>
                                        <option value="#">L</option>
                                        <option value="#">XL</option>
                                        <option value="#">XXL</option>
                                        <option value="#" selected="">Chose Your Size</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quantity-area">
                                <label>Qty :</label>
                                <div class="cart-quantity">
                                    <form action="#" method="POST" id="myform">
                                        <div class="product-qty">
                                            <div class="cart-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="social-icon socile-icon-style-1">
                                <ul>
                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart add-cart-text" data-placement="left" tabindex="0">Add To Cart<i class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="#" data-tooltip="Wishlist" class="w-list" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" data-tooltip="Compare" class="cpare" tabindex="0"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                      </div>
                  </div>
              </div>
          </div>  
        </div>
        </div>
        <!--single-protfolio-area are start-->
        
        <!--descripton-area start -->
        <div class="descripton-area">
            <div class="container">
                <div class="row">
                    <div class="product-area tab-cars-style">
                        <div class="title-tab-product-category">
                            <div class="col-md-12 text-center">
                                <ul class="nav mb-40 heading-style-2" role="tablist">
                                    <li role="presentation"><a href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation" class="active"><a href="#bestsellr" aria-controls="bestsellr" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer" role="tab" data-toggle="tab">Tags</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12">
                            <div class="content-tab-product-category">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                    <div class="review-wraper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            <br> veniam, quis nostrud exercitation.</p>
                                        <h5>ABOUT ME</h5>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                        <h5>SIZE & FIT</h5>
                                        <ul>
                                            <li>Model wears: Style Photoliya U2980</li>
                                            <li>Model's height: 185”66</li>
                                        </ul>
                                        <h5>Overview</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fix fade in active" id="bestsellr">
                                    <div class="review-wraper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                                       <h5>SIZE & FIT</h5>
                                       <ul>
                                           <li>Model wears: Style Photoliya U2980</li>
                                           <li>Model's height: 185”66</li>
                                       </ul>
                                        <h5>ABOUT ME</h5>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                       <h5>Overview</h5>
                                       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fix fade in" id="specialoffer">
                                    <ul class="tag-filter">
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Winter</a></li>
                                        <li><a href="#">Street Style</a></li>
                                        <li><a href="#">Style</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Collection</a></li>
                                        <li><a href="#">Spring 2016</a></li>
                                        <li><a href="#">Street Style</a></li>
                                        <li><a href="#">Style</a></li>
                                        <li><a href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!--descripton-area end-->
        <?php endforeach; ?>
        <!--new arrival area start-->
        <?php require_once ROOT . '/views/clothing/shortcode/shortcode-related-product.php'; ?>
        <!--new arrival area end-->
<?php require_once ROOT . '/views/clothing/footer.php'; ?>
