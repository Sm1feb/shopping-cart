<!DOCTYPE html>
<html>
<head>
	<title>ENEST-3</title>
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
				<a href="{{url('/logout-user')}}" class="hlo">Logout</a>
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<a href="products"><li>ALL PRODUCTS</li></a>
						<li>REVIEWS</li>
					<a href="index">	<li>CONTACT</li></a>
						<li>FAQS</li>
						<li><a href="{{url('/ca/'.session()->get('user_session'))}}">My Cart</a></li>&nbsp;
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
					<div class="items" style="height: 277px;">
						<ul>
                        <li>TVs</li>
							<li><a href="{{url('/product')}}">Dishwasher</a></li>
							<li>Computer</li>
							<li>Projectors</li>
							<li>Cameras</li>
							<li>Refrigerators</li>
							<li>Microwaves</li>
						</ul>
					</div>
				</div>
				@if(isset($findrec[0]))
				<form action="{{url('cart-form/'.$findrec[0]->id)}}"  method="post" > 
                {{csrf_field()}}
				
				<div class="contact">
					<div class="contact-us">

						<p>{{isset($findrec[0]->category) ? $findrec[0]->category:""}}</p>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
					  
							<img name="image" src="{{asset('uploads/'. $findrec[0]->image)}}"/>
							</div>
							<div class="stock">
								<h2>In Stock: <input type="text" name="stock" value="{{isset($findrec[0]->stock) ? $findrec[0]->stock:""}}"/></h2>
							</div>

						</div>
						<div class="machine-info">
							<div class="washer">
								<p>	{{isset($findrec[0]->name) ? $findrec[0]->name:""}}</p>
								<input type="hidden" name="id" value="{{isset($findrec[0]->id) ? $findrec[0]->id:""}}">
							</div>
							<div class="model-info">
								<span>Model: <input type="text" name="name" value="{{isset($findrec[0]->model) ? $findrec[0]->model:""}}"/></span>
								<p>Manufacturer: {{isset($findrec[0]->manufacturer) ? $findrec[0]->manufacturer:""}}</p>
							</div>
							<div class="quantity">

									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><select name="quantity">
                                               
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										
                                            </select>
										</td>
										</tr>
									</table>
			
								<div class="price">
									<span>Rs.<input type="text" name="price" value="{{isset($findrec[0]->price) ? $findrec[0]->price:""}}"/></span>
								</div>
							</div>
				
					        <input type="hidden" name="user" value= "<?php echo session()->get('user_session'); ?>"/>
							<div class="cart">
								<input type="submit" name="cart" value="Add to Cart">
							</div> 
            
							<!-- <div class="checkout">
								<input type="submit" name="" value="checkout">
							</div> -->
						</div>
					</div>

                    </form>
					@endif

					<div class="info">

					<form method="post" action="{{url('query-form')}}" > 
                        {{csrf_field()}}
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="text" name="name"></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="email" name="email"></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea name="review"></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="rating" name="rating"></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>


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