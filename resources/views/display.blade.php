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
						<p>Dishwasher</p>
					</div>
                    <form action="{{url('/display')}}" method="post">
                {{csrf_field()}}
                <table border=1px style="width:350px,height:500px">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th style="width:100px">Delete</th>
				</tr>
			</thead>
			@foreach($data as $row)
			<tr>
			<td>{{$row->id}}</td>
				<td>{{$row->name}}</td>
				<td>{{$row->price}}</td>
				<td>{{$row->quantity}}</td>
				<td><a href="{{'/'.$row->id}}">delete</a></td>
</tr>
@endforeach
<tr>
	<td colspan="4">{{$data->links()}}</td>
</tr>
</table>
			
			</tbody>
		</table>
        </form>
	</div>
</body>
</html>
@else
<script>window.location="{{url('/index2')}}"</script>
@endif