<div class="hot-products">
   <h3 class="title"><strong>Hot</strong> Products</h3>
   <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
   <ul id="hot">
      <li>
         <div class="row">
            <?php  
               $proHot = getProductHot();
               foreach ($proHot as $hot) {
            ?>
               <div class="col-md-3 col-sm-6">
                  <div class="products">
                     <!-- <div class="offer">- %20</div> -->
                     <div class="thumbnail"><a href="details.html">
                        <img src="images/products/<?php echo $hot['img']; ?>" alt=""></a>
                     </div>
                     <div class="productname"><?php echo $hot['name']; ?></div>
                     <h4 class="price"><?php echo number_format($hot['price']).'<sup style="font-size: 11px;">đ</sup>'; ?></h4>
                     <div class="button_group">
                        <a href="index.php?page=order&id=<?php echo $hot['id']; ?>">
                           <button class="button add-cart" type="button">Add To Cart</button>
                        </a>
                        <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                        <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                     </div>
                  </div>
               </div>
            <?php
               }
            ?>
            
         </div>
      </li>

      <li>
         <div class="row">
            <?php  
               $proFeatured = getProductFeat();
               foreach ($proFeatured as $feat) {
            ?>
               <div class="col-md-3 col-sm-6">
                  <div class="products">
                     <!-- <div class="offer">- %20</div> -->
                     <div class="thumbnail"><a href="details.html">
                        <img src="images/products/<?php echo $feat['img']; ?>" alt=""></a>
                     </div>
                     <div class="productname"><?php echo $feat['name']; ?></div>
                     <h4 class="price"><?php echo number_format($feat['price']).'<sup style="font-size: 11px;">đ</sup>'; ?></h4>
                     <div class="button_group">
                        <a href="index.php?page=order&id=<?php echo $feat['id']; ?>">
                           <button class="button add-cart" type="button">Add To Cart</button>
                        </a>
                        <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                        <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                     </div>
                  </div>
               </div>
            <?php
               }
            ?>
            
         </div>
      </li>
      
   </ul>
</div>
<div class="clearfix"></div>

<!-- <div class="featured-products">
   <h3 class="title"><strong>Featured </strong> Products</h3>
   <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
   <ul id="featured">
      <li>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-06.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="offer">New</div>
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-07.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
         </div>
      </li>
      <li>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
         </div>
      </li>
   </ul>
</div> -->
<div class="clearfix"></div>