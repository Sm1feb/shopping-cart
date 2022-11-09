<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
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
				<div class="btn" style="color:white">

                @if(session()->get('user_session'))
				<a href="{{url('/logout-user')}}">Logout</a>
                <input type="button" name="" value="<?php $name = session()->get('user_session');
                       echo $name;?>" >
                @else
				<div class="btn">
				<a href="{{url('/logout-user')}}">Logout</a>
				</div>
                @endif
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul>
						<li><a href="{{url('/index5')}}">HOME</a></li>
						<li>NEW PROJECT</li>
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
					<div class="contact">
						<div class="contact-us" align="center" >
							<p>My Cart</p>
						</div>
                        
						<table width="100%" border="1px" style="padding:7px;">
                        <tr>    
                           <th>Item Name</th>  
                           <th>Individual Price</th>
                           <th>Quanity</th>
                           <th>User</th>
						   <th>Product_Id</th>
						   <th>Total Price</th>
                           <th>Remove</th> 
                        </tr>
                        @foreach($cart as $row)
                        <tr align=center >
                           <td>{{$row->name}}</td>
                           <td>{{$row->price}}</td>
                           <td>{{$row->quantity}}</td>
						   <td>{{$row->user}}</td>
						   <td>{{$row->product_id}}</td>
                           <td>{{$row->total}}</td>
                           <td><button><a href="{{url('/remove/'.$row->id)}}">Remove</a></button></td>
                        </tr>
                        @endforeach
                        </table>
                      
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