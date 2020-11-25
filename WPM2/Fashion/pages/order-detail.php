<?php  
	if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
?>



<div class="container shopping-cart">
	<div class="row">
		<div class="col-md-12">
			<h3 class="title">
				Shopping Cart
			</h3>
			<div class="clearfix">
			</div>
			<form action="index.php?page=updateCart" method="POST" name="frm_updateCart">
				<table class="shop-table">
					<thead>
						<tr>
							<th>
								Image
							</th>
							<th>
								Dtails
							</th>
							<th>
								Price
							</th>
							<th>
								Quantity
							</th>
							<th>
								Price
							</th>
							<th>
								Delete
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$_SESSION['sumPrice'] = 0; 
							foreach ($_SESSION['cart'] as $cart) {
						?>
								<tr>
									<td>
										<img src="images/products/<?php echo $cart['img']; ?>" alt="">
									</td>
									<td>
										<div class="shop-details">
											<div class="productname">
												<?php echo $cart['name']; ?>
											</div>
											<!-- <p>
												<img alt="" src="images/star.png">
												<a class="review_num" href="#">
													02 Review(s)
												</a>
											</p>
											<div class="color-choser">
												<span class="text">
													Product Color : 
												</span>
												<ul>
													<li>
														<a class="black-bg " href="#">
															black
														</a>
													</li>
													<li>
														<a class="red-bg" href="#">
															light red
														</a>
													</li>
												</ul>
											</div>
											<p>
												Product Code : 
												<strong class="pcode">
													Dress 120
												</strong>
											</p> -->
										</div>
									</td>
									<td>
										<h5>
											<?php echo number_format($cart['price']); ?>
										</h5>
									</td>
									<td>
										<input type="number" id="<?php echo $cart['id']; ?>" min="1" max="5" name="<?php echo $cart['id']; ?>" class="form-control" value="<?php echo $cart['qty']; ?>">
									</td>
									<td>
										<h5>
											<strong class="red">
												<?php 
													$total = $cart['price'] * $cart['qty'];
													$_SESSION['sumPrice'] += $total;
													echo number_format($total);
												?>
											</strong>
										</h5>
									</td>
									<td>
										<a href="index.php?page=delCart&id=<?php echo $cart['id']; ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng không?');">
											<img src="images/remove.png" alt="">
										</a>
										<button>Xoa ajax</button>
									</td>
								</tr>
						<?php
							}
						?>
						
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6">
								<button class="pull-left">
									Continue Shopping
								</button>
								<button type="submit" value="" name="updateCart" class="pull-right" />
								Update Shopping Cart
								</button>
							</td>
						</tr>
					</tfoot>
				</table>
			</form>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6"></div>
				<div class="col-md-4 col-sm-6"></div>
				<div class="col-md-4 col-sm-6">
					<div class="shippingbox">
						<div class="subtotal">
							<h5>
								Total
							</h5>
							<span style="color: red; font-weight: bold; font-size: 20px;">
								<?php echo number_format($_SESSION['sumPrice']); ?>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="shippingbox">
						<h5>
							Check Out
						</h5>
						<form action="index.php?page=ordered" method="POST">
							<label for="name">Name</label>
							<input type="text" required="" name="name" value="" placeholder="Input name...">
							<div class="clearfix"></div>

							<label for="phone">Phone</label>
							<input type="number" required="" name="phone" value="" placeholder="Input phone...">
							<div class="clearfix"></div>

							<label for="email">Email</label>
							<input type="email" required="" name="email" value="" placeholder="Input email...">
							<div class="clearfix"></div>

							<label for="addres">Addres</label>
							<input type="text" required="" name="addres" value="" placeholder="Input addres...">
							<div class="clearfix"></div>

							<label for="note">Note</label>
							<textarea name="note" id="note" cols="30" class="form-control" rows="10"></textarea>
							<div class="clearfix"></div>
							<br>
							<button type="submit" value="<?php echo $cart['id'] ?>" name="ordered">
								Check out
							</button>
						</form>
					</div>
				</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<?php
	}else{
?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Thông báo: </strong> Giỏ hàng trống <a href="index.php">Mua hàng</a>
	</div>
<?php
	}
?>