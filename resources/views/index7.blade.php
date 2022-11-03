@if(session()->has('user_session'))
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
					<a href="displayproduct2"><li>ALL PRODUCTS</li></a>
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
						<p>Dishwasher</p>
					</div>
                    @foreach($data as $row)
					<form action="{{url('/displayproduct2'/)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{asset('http://localhost/ecommerce/public/2.png')}}">
                                
							</div>
							<div class="stock">
								
								<p>Stock:{{$row->stock}}</p>
							</div>
							<div class="detail">
								<span>Details:{{$row->model}}</span>
								<p></p>
							</div>
							
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>{{$row->manufacturer}}</p>
							</div>
							<div class="model-info">
								<span>Model:{{$row->model}}</span>
								<p>Manufacturer:{{$row->manufacturer}}</p>
                                <div class="price">
									<span>Price:{{$row->price}}</span>
								</div>
								<input type="hidden" name="name" value="Steel dishwasher">
								<input type="hidden" name="price" value="6000">
								
							</div>
							<div class="quantity">
					
				Enter Quantity
									<select name="size">
										
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
							<div class="cart">
								<input type="submit" name="save" value="Add to Cart">
							</div>
							</form>
							<div class="checkout">
								<input type="submit" name="" value="checkout">
							</div>
							@endforeach
						</div>
						</form>
					</div>
					<div class="info">
					<form action="{{url('/review')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="" name="name"></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="" name="email"></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><input type="" name="review"></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="" name="rating"></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="save" value="Submit query">
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
@else
<script>window.location="{{url('/index2')}}"</script>
@endif