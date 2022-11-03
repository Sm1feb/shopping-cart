<!DOCTYPE html>
<html>
<head>
	<title>ENEST-4</title>
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('http://localhost/ecommerce/resources/css/style.css')}}">

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
					<a href="{{url('/index5')}}"><li>HOME</li></a>
					<a href="{{url('/addpro')}}">	<li>NEW PROJECT</li></a>
						<li>SPECIAL</li>
						<a href="{{url('/product')}}"><li>ALL PRODUCTS</li></a>
						<li>REVIEWS</li>
						<a href="{{url('/index')}}"><li>CONTACT</li></a>
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
					<div class="items" style="height: 277px;">
						<ul>
						<a href="{{url('/tv')}}">  <li>TVs</li></a>
						<a href="{{url('/product')}}" class="dish"><li>Dishwasher</li></a>
						<a href="{{url('/computer')}}"><li>Computer</li></a>
							<li>Projectors</li>
							<li>Cameras</li>
							<li>Refrigerators</li>
							<li>Microwaves</li>
						</ul>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>Dishwasher</p>
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
					
		            @foreach($pro as $row)
					<div class="dish-info">
                   
						<div class="machine-pic">
							<div class="img">
								<img src="uploads/{{$row->image}}">
							</div>
							<div class="stock">
								<p>In Stock: {{$row->stock}}</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span>{{$row->date}}</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>{{$row->name}}</p>
							</div>
							<div class="model-info">
								<span>Model: {{$row->model}}</span>
								<p>Manufacturer: {{$row->manufacturer}}</p>
							</div>
							<div class="price">
								<span>Rs.{{$row->price}}</span>
							</div>

                        <form action="{{url('show-pro/'.$row->id)}}" method="post">
						{{csrf_field()}}
							<div class="checkout">
								<input type="submit" name="buy" value="BUY NOW">
							</div>
                        </form>

						</div>

					</div>
                    @endforeach


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