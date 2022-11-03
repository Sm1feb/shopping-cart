<hr class="hr2">
									<div class="cart-btn">
										<i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="save" value="Add to cart">
									</div>
									</form>
								</div>
							</div>
							<div class="nikon-cam">
								<div class="cam-info">
								<img src="uploads/{{$row->image}}">
									<div class="nik-prc">
									
										<span></span>
										<p>Rs.3000</p>
										
									</div>
									<hr class="hr2">
									<div class="cart-1-btn">
										<i class="fa fa-plus-circle" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="save1" value="Add to cart">
									</div>
</form>
								</div>
							</div>
							<div class="kodak-cam">
								<div class="cam-info">
									<img src="{{asset('kod.jpg')}}">
									<div class="kod-prc">
									<form action="{{url('/addcart2')}}" method="post">
                {{csrf_field()}}
										<span>Kodak Camera</span>
										<p>Rs.3500</p>
										<input type="hidden" name="Item_name" value="Kodak Camera">
										<input type="hidden" name="Item_price" value="3500">
									</div>
									<hr class="hr2">
									<div class="cart-2-btn">
										<i class="fa fa-plus-circle" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="save2" value="Add to cart">
									</div>
</form>
								</div>
							</div>
						<!-- </div> -->
					</div>
					<div class="Camera-info">
						<div class="samsung-cam">
							<div class="cam-info">
								<img src="{{asset('sam-pro.jpg')}}">
								<div class="sam-prc">
								<form action="{{url('/addcart3')}}" method="post">
                {{csrf_field()}}
									<span>Samsung Projector</span>
									<p>Rs.27950</p>
									<input type="hidden" name="Item_name" value="Samsung Projector">
										<input type="hidden" name="Item_price" value="27950">
								</div>
								<hr class="hr2">
								<div class="cart-btn">
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
									<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<input type="submit" name="save3" value="Add to cart">
								</div>
</form>
							</div>
						</div>
						<div class="nikon-cam">
							<div class="cam-info">
								<img src="{{asset('sony.png')}}">
								<div class="nik-prc">
								<form action="{{url('/addcart4')}}" method="post">
                {{csrf_field()}}
									<span>Sony camcorders</span>
									<p>Rs.16000</p>
									<input type="hidden" name="Item_name" value="Sony camcorders">
										<input type="hidden" name="Item_price" value="16000">
								</div>
								<hr class="hr2">
								<div class="cart-1-btn">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
									<input type="submit" name="save4" value="Add to cart">
								</div>
</form>
							</div>
						</div>
						<div class="kodak-cam">
							<div class="cam-info">
								<img src="{{asset('acer.jpg')}}">
								<div class="kod-prc">
								<form action="{{url('/addcart5')}}" method="post">
                {{csrf_field()}}
									<span>Acer Monitor</span>
									<p>Rs.15000</p>
									<input type="hidden" name="Item_name" value="Acer Monitor">
										<input type="hidden" name="Item_price" value="15000">
								</div>
								<hr class="hr2">
								<div class="cart-2-btn">
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
									<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<input type="submit" name="save5" value="Add to cart">
								</div>