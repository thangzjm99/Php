<div class="hot-products">
   <h3 class="title"><strong>Hot</strong> Products</h3>

   <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a>
   </div>
   <ul id="hot">
      <li>
         <div class="row">
            <?php
            $proHot = getProductHot();
            foreach ($proHot as $hot) {
            ?>
               <div class="col-md-3 col-sm-6">
                  <div class="products">
                     <div class="thumbnail"><a href="details.html"><img src="images/products/<?php echo $hot['img'] ?>" alt="Product Name"></a></div>
                     <div class="productname"><?php echo $hot['name']; ?></div>
                     <h4 class="price"><?php echo $hot['price']; ?></h4>
                     <div class="button_group">
                        <a href="index.php?page=order&id=<?php echo $hot['id'] ?>">
                           <button class="button add-cart" type="button">Add To Cart</button>
                        </a>
                        <button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
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

<div class="featured-products">
   <h3 class="title"><strong>Featured </strong> Products</h3>
   <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
   <ul id="featured">
      <li>
         <div class="row">
            <?php
            $proFeat = getProductFeat();
            foreach ($proFeat as $feat) {
            ?>

               <div class="col-md-3 col-sm-6">
                  <div class="products">
                     <div class="thumbnail"><a href="details.html"><img src="images/products/<?php echo $feat['img'] ?>" alt="Product Name"></a></div>
                     <div class="productname"><?php echo $feat['name']; ?></div>
                     <h4 class="price"><?php echo $feat['price']; ?></h4>
                     <div class="button_group">
                     <a href="index.php?page=order&id=<?php echo $feat['id'] ?>">
                                <button class="button add-cart" type="button">Add To Cart</button>
                            </a>
                           <button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
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