@if(session()->has('user_session'))
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-1</title>
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
				<a href="{{url('/')}}">Logout</a>
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
			 <div class="list">
					<ul>
					<a href="home"><li>HOME</li></a>
					<a href="addpro"><li>Add Product</li></a>
						<li>SPECIAL</li>
					<a href="home"><li>ALL PRODUCTS</li></a>
						<li>REVIEWS</li>
						<a href="index"><li>CONTACT</li></a>
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
	<center>	<div class="input-info">
									<div class="input-information">
									<form action="{{url('/addproduct1')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
											<table class="form">
                                                <h1>All Products</h1>
												<tr>
													<td ><p>Product Name</p></td>
													<td><input type="text" name="name"></td>
												</tr>
												<tr>
													<td > <p>Product Price </p></td>
													<td><input type="text" name="price"></td>
												</tr>
												<tr>
													<td> <p>Model Name </p></td>
													<td><input type="text" name="model"></td>
												</tr>
                                                <tr>
													<td> <p>Manufacturer </p></td>
													<td><input type="text" name="manufacturer"></td>
												</tr>
                                                <tr>
													<td> <p>Company Name </p></td>
													<td><input type="text" name="company"></td>
												</tr>
                                                <tr>
													<td> <p>Add Image </p></td>
													<td><input type="file" name="image"></td>
												</tr>
												<tr>
							<td><input type="submit" name="save" value="Save" class="snd-btn"></td>
                                              </tr>
											</table>
										</form>
									</div>
								</div></center>
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