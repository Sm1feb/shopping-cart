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
					<a href="index4">	<li>SPECIAL</li></a>
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
						<p>Apple</p>
					</div>
					@foreach($data as $row)
					<form action="{{url('/displayproduct')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
					<div class="dish-info">
					<div class="machine-pic">
							<div class="img">
								<img src="{{$row->image}}">
								echo"{{$row->image}}";
								<!-- <p>{{$row->image}}</p> -->
							</div>
							<div class="stock">
								<p>In Stock: 988</p>
							</div>
							<div class="price">
								<span>Price:{{$row->price}}</span>
								<p></p>
							</div>
							<div class="detail">
								<span>Details:{{$row->model}}</span>
								<p></p>
							</div>
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>{{$row->company}}</p>
							</div>
							<div class="model-info">
						
								
								<span>Model:{{$row->model}}</span>
								<p>Manufacturer:{{$row->manufacturer}}</p>
							
					
				</div>
				@endforeach
			
				
			</div>
		</div>
		<div class="list-1">
					<ul>
						<li>HOME</li>
						<a href="addpro"><li>Add Product</li></a>
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
</body>
</html>
@else
<script>window.location="{{url('/index2')}}"</script>
@endif