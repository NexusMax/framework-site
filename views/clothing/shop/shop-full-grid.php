<?php
require_once ROOT . '/views/clothing/header.php';
?>
        
        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Product Grid View</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="/">Home</a></li>
                    <li class="active">Shop Full Grid</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!--shop main area are start-->
        <div class="shop-main-area ptb-70">
            <div class="container">
                <div class="row">
                      <div class="col-xs-12">
                           <div class="shop-area-top">
                               <div class="row">
                                   <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                       <div class="sort product-show">
                                           <label>View</label>
                                            <select id="input-amount">
                                              <option value="volvo">10</option>
                                              <option value="saab">15</option>
                                              <option value="vw">20</option>
                                              <option value="audi" selected>25</option>
                                            </select>
                                        </div>
                                        <div class="sort product-type">
                                            <label>Sort By</label>
                                            <select id="input-sort">
                                                <option value="#" selected>Default</option>
                                                <option value="#">Name (A - Z)</option>
                                                <option value="#">Name (Z - A)</option>
                                                <option value="#">Price (Low &gt; High)</option>
                                                <option value="#">Price (High &gt; Low)</option>
                                                <option value="#">Rating (Highest)</option>
                                                <option value="#">Rating (Lowest)</option>
                                                <option value="#">Model (A - Z)</option>
                                                <option value="#">Model (Z - A)</option>
                                            </select>
                                        </div>
                                    </div>
                                   <div class="col-lg-4 col-md-3 col-sm-2 col-xs-12">
                                        <div class="list-grid-view text-center">
                                            <ul class="nav" role="tablist">
                                                <li role="presentation"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="zmdi zmdi-widgets"></i></a></li>
                                                <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                   <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                                        <div class="total-showing text-right">
                                            Showing - <span>10</span> to <span>18</span>  Of  Total <span>36</span>
                                        </div>
                                    </div>
                               </div>
                           </div>
                       </div>
                       <div class="clearfix"></div>
                      <div class="shop-total-product-area clearfix mt-35">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!--tab grid are start-->
                            <div role="tabpanel" class="tab-pane fade in active" id="grid">
                                <div class="total-shop-product-grid">
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">New</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/01.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/02.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/03.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/04.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">Sale</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/02.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                     </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/04.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                            
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/03.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/04.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">Sale</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/02.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                     </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/04.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div> 
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">New</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/01.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/02.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/03.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/04.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                      
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/04.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                            
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/03.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/04.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">Sale</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/02.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                     </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/04.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div> 
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">New</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/01.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/02.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 col-sm-4 col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/03.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/04.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>                          
                                    <div class="col-md-3 hidden-sm col-xs-12 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">Sale</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/02.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                                <div class="product-icon socile-icon-tooltip text-center">
                                                    <ul>
                                                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.php">Quisque fringilla</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                     </div>     
                                </div>
                            </div>
                            <!--shop grid are end-->
                            
                            <!--shop product list start-->
                            <div role="tabpanel" class="tab-pane  fade in" id="list">
                                <div class="total-shop-product-list">
                                    <div class="col-md-12 item">
                                        <!-- single product start-->
                                        <div class="single-product single-product-list full-widht-list">
                                            <div class="product-img">
                                                <div class="product-label red">
                                                    <div class="new">Sale</div>
                                                </div>
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/02.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/03.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text prodcut-text-list fix">
                                                <div class="prodcut-name list-name montserrat"> <a href="single-product.php">Magnetic Force Bralette</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting list-ratting">  
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price list-price">
                                                        <div class="new-price"> $220 </div>
                                                        <div class="old-price"> <del>$250</del> </div>
                                                    </div>
                                                </div>
                                                <div class="list-product-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit 
                                                    blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam 
                                                    id quam vitae odio scelerisque ultrices.</p>
                                                </div>
                                                <div class="social-icon-wraper mt-25">
                                                    <div class="social-icon socile-icon-style-1">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                     </div>  
                                    <div class="col-md-12 item">
                                        <!-- single product start-->
                                        <div class="single-product single-product-list full-widht-list">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/03.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/04.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text prodcut-text-list fix">
                                                <div class="prodcut-name list-name montserrat"> <a href="single-product.php">Magnetic Force Bralette</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting list-ratting">  
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price list-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                                <div class="list-product-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit 
                                                    blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam 
                                                    id quam vitae odio scelerisque ultrices.</p>
                                                </div>
                                                <div class="social-icon-wraper mt-25">
                                                    <div class="social-icon socile-icon-style-1">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>  
                                    <div class="col-md-12 item">
                                        <!-- single product start-->
                                        <div class="single-product single-product-list full-widht-list">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/05.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/06.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text prodcut-text-list fix">
                                                <div class="prodcut-name list-name montserrat"> <a href="single-product.php">Magnetic Force Bralette</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting list-ratting">  
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price list-price">
                                                        <div class="new-price"> $200 </div>
                                                        <div class="old-price"> <del>$300</del> </div>
                                                    </div>
                                                </div>
                                                <div class="list-product-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit 
                                                    blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam 
                                                    id quam vitae odio scelerisque ultrices.</p>
                                                </div>
                                                <div class="social-icon-wraper mt-25">
                                                    <div class="social-icon socile-icon-style-1">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>    
                                    <div class="col-md-12 item">
                                        <!-- single product start-->
                                        <div class="single-product single-product-list full-widht-list">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/04.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/05.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text prodcut-text-list fix">
                                                <div class="prodcut-name list-name montserrat"> <a href="single-product.php">Magnetic Force Bralette</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting list-ratting">  
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price list-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                                <div class="list-product-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit 
                                                    blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam 
                                                    id quam vitae odio scelerisque ultrices.</p>
                                                </div>
                                                <div class="social-icon-wraper mt-25">
                                                    <div class="social-icon socile-icon-style-1">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>  
                                    <div class="col-md-12 item">
                                        <!-- single product start-->
                                        <div class="single-product single-product-list full-widht-list">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.php"> <img alt="" src="views/clothing/images/product/06.jpg" class="primary-image"> <img alt="" src="views/clothing/images/product/07.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text prodcut-text-list fix">
                                                <div class="prodcut-name list-name montserrat"> <a href="single-product.php">Magnetic Force Bralette</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting list-ratting">  
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                        <a href="#"><i class="fa fa-star-o"></i></a> 
                                                    </div>
                                                    <div class="prodcut-price list-price">
                                                        <div class="new-price"> $200 </div>
                                                        <div class="old-price"> <del>$300</del> </div>
                                                    </div>
                                                </div>
                                                <div class="list-product-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit 
                                                    blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam 
                                                    id quam vitae odio scelerisque ultrices.</p>
                                                </div>
                                                <div class="social-icon-wraper mt-25">
                                                    <div class="social-icon socile-icon-style-1">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>  
                                </div>
                            </div>
                            <!--shop product list end-->

                            <!--pagination start-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="pagination-btn text-center">
                                    <ul class="page-numbers">
                                       <li><a href="#" class="next page-numbers"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="page-numbers">3</a></li>
                                        <li><a href="#" class="next page-numbers"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--pagination end-->
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <!--shop main area are end-->
<?php
require_once ROOT . '/views/clothing/footer.php';
?>