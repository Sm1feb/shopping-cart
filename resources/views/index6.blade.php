@if(session()->has('user_session'))
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-4</title>
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
					<a href="displayproduct"><li>ALL PRODUCTS</li></a>
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
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						<ul>
							<li>TVs</li>
						<a href="index3">	<li>Dishwasher</li></a>
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
						<p>Television</p>
					</div>
					<div class="product-info">
						<span>Sort by:</span>
						<form>
							<select>
								<option>product name</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</form>
					</div>
					<div class="display-product">
						<span>Displaying 1 to 5(of 6 new product)</span>
						<div class="btnnn">
							<input  class="pre" type="submit" name="" value="Previous">
							<input class="nxt" type="submit" name="" value="Next">
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{asset('tv1.jpg')}}">
							</div>
							<div class="stock">
								<p>In Stock: 988</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-06-01  08:05:32</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>Television</p>
							</div>
							<div class="model-info">
								<span>Model:Television</span>
								<p>Manufacturer:Television</p>
                                <input type="hidden" name="Item_name" value="Television">
										<input type="hidden" name="Item_price" value="15000">
							</div>
                            <div class="quantity">
								<form>
                                    <input type="hidden" name="productid">
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="" name=""></td>
										</tr>
									</table>
								</form>
							<div class="price">
								<span>Rs.26500</span>
							</div>
                              </div>
							<div class="checkout">
								<input type="submit" name="" value="Add to Cart">
							</div>
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{asset('tv2.jpg')}}">
							</div>
							<img  class="lg" src="{{asset('logo.png')}}">
							<div class="stock-0">
								<p>In Stock:30</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-07-21  09:05:45</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p> Samsung Television</p>
							</div>
							<div class="model-info">
								<span>Model:Samsung Television</span>
								<p>Manufacturer:Samsung Television</p>
							</div>
							<div class="price">
								<span>Rs.38600</span>
							</div>
                            <div class="quantity">
								<form>
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="" name=""></td>
										</tr>
									</table>
								</form>
							<div class="checkout">
								<input type="submit" name="" value="Add to Cart">
							</div>
                       </div>
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{asset('tv3.jpg')}}">
							</div>
							<div class="stock">
								<p>In Stock:365</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-06-01  08:05:32</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>MI Televison</p>
							</div>
							<div class="model-info">
								<span>Model:Television</span>
								<p>Manufacturer:MI Television</p>
							</div>
							<div class="price">
								<span>Rs.12999</span>
							</div>
                            <div class="quantity">
								<form>
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="" name=""></td>
										</tr>
									</table>
								</form>
							<div class="checkout">
								<input type="submit" name="" value="ADD TO CART">
							</div>
                   </div>
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{asset('tv4.jpg')}}">
							</div>
							<div class="stock">
								<p>In Stock:10</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-05-31  20:25:14</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>Smart-LED TV</p>
							</div>
							<div class="model-info">
								<span>Model:LED TV</span>
								<p>Manufacturer:LED TV</p>
							</div>
							<div class="price">
								<span>Rs.23950</span>
							</div>
                            <div class="quantity">
								<form>
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="" name=""></td>
										</tr>
									</table>
								</form>
							<div class="checkout">
								<input type="submit" name="" value="ADD TO CART">
							</div>
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