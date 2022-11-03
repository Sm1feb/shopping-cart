@if(session()->has('user_session'))
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
	<link rel="stylesheet" type="text/css" href="{{asset('http://localhost/ecommerce/resources/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		<div class="head-div">
			<div class="main">
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn">
				<a href="{{url('/logout-user')}}">Logout</a>
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
			 <div class="list">
					<ul>
					<a href="index5"><li>HOME</li></a>
					<a href="addpro"><li>Add Product</li></a>
						<li>SPECIAL</li>
					<a href="product"><li>ALL PRODUCTS</li></a>
						<li>REVIEWS</li>
						<a href="index"><li>CONTACT</li></a>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="search">
					<div class="search-1">
						<div class="input">
							<input type="text" name="">
						</div>
						<div class="btnn">
							<input type="button" name="" value="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="main-img">
					<img src="{{asset('16.png')}}">
				</div>
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						<ul>
							<li>TVs</li>
							<li>Dishwasher</li>
							<li>Ranges</li>
							<li>Computer</li>
							<li>Blu-ray & DVD Player</li>
							<li>Projectors</li>
							<li>Hometheater System</li>
							<li>Cameras</li>
							<li>Camcorders</li>
							<li>Washer & Dryers</li>
							<li>Refrigerators</li>
							<li>Microwaves</li>
						</ul>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>
					<div class="Camera-info">
						<!-- <div class="cam-info"> -->
							<div class="samsung-cam">
								<div class="cam-info">
									<img src="{{asset('sam.png')}}" name="image">
									<div class="sam-prc">
									<form action="{{url('/addcart')}}" method="post">
                {{csrf_field()}}
										<span>Samsung LED</span>
										<p>Rs.20000</p>
										
										
									</div>
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
									<img src="{{asset('nk2.jpeg')}}">
									<div class="nik-prc">
									<form action="{{url('/addcart1')}}" method="post">
                {{csrf_field()}}
										<span>Nikon D7000</span>
										<p>Rs.3000</p>
										<input type="hidden" name="Item_name" value="Nikon D7000">
										<input type="hidden" name="Item_price" value="3000">
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
								</form>
							</div>
						</div>

					</div>
					
				</div>
				<div class="list-1">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="footer-2">
					<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@else
<script>window.location="{{url('/index2')}}"</script>
@endif