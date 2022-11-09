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
					<ul  >
					<a href="{{url('/home')}}"><li>HOME</li></a>
					<a href="{{url('/addpro')}}">	<li>NEW PROJECT</li></a>
						<li>SPECIAL</li>
						<a href="{{url('/product')}}"><li>ALL PRODUCTS</li></a>
						<li>REVIEWS</li>
						<a href="{{url('/index')}}"><li>CONTACT</li></a>
						<li><a href="{{url('/ca/'.session()->get('user_session'))}}">MY CART</a></li>&nbsp;
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
					<img src="uploads/16.png">
				</div>
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
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
				<div class="contact" align="center" >
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>
					@isset($product)
					@foreach($product as $row)
					<form action="{{url('cart-form/'.$row->id)}}" method="post" > 
					{{csrf_field()}}
					<div class="Camera-info" >
						<div class="samsung-cam"  >
							<div class="cam-info" >
								<img src="uploads/{{$row->image}}" >
								<input type="hidden" name="id" value="{{$row->id}}">
								<div class="sam-prc">
									<span>{{$row->model}}</span>
									<p>Rs.{{$row->price}}</p>
									
										
											<td class="qty">Choose quantity</td>
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
										
								</div>
								<br/><br/>
								<div class="cart-btn">
								<input type="submit" name="" value="Add to cart">
								</div>
								<br/>
									<input type="hidden" name="name" value="{{$row->name}}">
									<input type="hidden" name="price" value="{{$row->price}}">
									<input type="hidden" name="product_id" value="{{$row->id}}">
									<input type="hidden" name="total" value="{{$row->price}}">
								
									

									<input type="hidden" name="user" value= "<?php echo session()->get('user_session'); ?>"/>
									
								
							</div>
						</div>
					</div>
					

</form>

                    @endforeach
					@endisset

</div>


					<!-- <div class="list-1">
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
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>