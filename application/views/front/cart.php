<!--Breadcrumb start-->
<!-- <script type="text/javascript">
	function updatecartitem(obj,rowid) {
		alert('hii');
                 $.ajax({
            url: "<?php echo base_url('front/updateitemQty')?>",
            type: 'POST',
              dataType: "json",
            data: $(form).serialize(),
            success: function(response) {
              if(response == "ok"){
                location.reload();
              }else{
                   alert('cart update failed, please try again')
              }
            }            
        });
	}
</script> -->
<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>cart</h2>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="index-2.html">home</a></li>

					<li>//</li>

					<li><a href="about.html">cart</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--Breadcrumb end--> 



<!-- Cart section Start -->

<div class="ast_cart_wrapper ast_toppadder70 ast_bottompadder70">

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-xs-12">

				<div class="table-responsive cart_table">

					<table class="table">

						<tr>

							<th>Products</th>

							<th>Price</th>

							<!-- <th>Quantity</th> -->

							<th>Total</th>

							<th>Action</th>

						</tr>

		 <?php 
                 $sub_product_total = 0;
		 if($this->cart->total_items()>0){ 
                           foreach ($cartitems as $row) {
                                  $sub_product_total += $row['price'];
                           	?>
						<tr>
                           

							<td>


								<span class="prod_thumb">


									<img src="http://rcsieducation.com/horoscope//assets/categories_image/<?php echo $row['image']?>" alt="" class="img-responsive" />


								</span>


								<div class="product_details">


									<h4><a href="#"><?php echo $row['name'];?></a></h4>


								</div>


							</td>


							<td><?php echo $row['price'];?></td>


							<!-- <td><input type="number" name="pro_quantity" class="pro_quantity" onchange="updatecartitem(this,<?php echo $row['rowid']?>)" value="<?php echo $row['qty'];?>"></td> -->
							<td><?php echo $row['subtotal'];?></td>


							<td>


								<span class="close_pro"><i class="fa fa-trash"></i></span>


							</td>


						</tr>
					<?php }}?>

						<tr>

							<td>

								<div class="cupon_code_wrap">

									<input type="text" name="cupon_code" placeholder="####" class="cupon_code">

									<button type="submit" class="cupon_btn ast_btn" value="Apply Cupon Code">Apply Coupon Code</button>

								</div>

							</td>

							<td>&nbsp;</td>

							<td>Total</td>

							<td><?php echo $sub_product_total;?></td>

							<td>&nbsp;</td>

						</tr>

					</table>

					<a href="checkout.html" class="proceed_btn ast_btn" value="Apply Cupon Code">checkout</a>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- cart section end --> 

