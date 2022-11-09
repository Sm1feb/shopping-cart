<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buisness;
use App\Models\insertion;
use App\Models\contact;
use App\Models\cartadd;
use App\Models\displaycart;
use App\Models\Addproduct;
use App\Models\dish;
use App\Models\product;
use App\Models\cart;
use App\Models\hom;
use App\Models\lap;
use App\Models\add;
use App\Models\show;
use App\Models\rm;
use App\Models\com;
use App\Models\rv1;
use App\Models\proj;
use App\Models\Camera;
use Carbon\Carbon;
use Session;
class IController extends Controller
{
    //
    public function login1()
    {
        return view('login');
    }
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
    public function index4()
    {
        return view('index4');
    }
    public function index5()
    {
        return view('index5');
    }
    public function index6()
    {
        return view('index6');
    }
    public function index7()
    {
        return view('index7');
    }
    public function index8()
    {
        return view('index8');
    }
    public function addproduct()
    {
        return view('addproduct');
    }
    public function displayproduct()
    {
        $data=Addproduct::simplepaginate(5);
        return view('displaypr',compact('data'));
    }
    public function displaycart()
    {
        $data=displaycart::simplepaginate(5);
        return view('display',compact('data'));
    }
    ////login of username and password
    public function sfm(Request $request)
    {
        $username=$request->get('username');
        $password=$request->get('password');
        $count = buisness::select('*')
            ->where('username', $username)
            ->where('password', $password)
            ->count();
        if ($count > 0) {
            session()->put("user_session", $username);
            return redirect("product");
           
        }
        else
        {
            return redirect("index2");
        }
    }
    //register of username,password
    public function fm(Request $request)
    {
        $add = new buisness;
        if($request->isMethod('post'))
    {
      $add->username=$request->get('username');
        $add->email=$request->get('email');
        $add->password=$request->get('password');
        $add->save();
         
    }
    return redirect("/index");
}

//contact insetion
public function sm(Request $request)
{
    $add = new contact;
    if($request->isMethod('post'))
{
  $add->name=$request->get('name');
    $add->email=$request->get('email');
    $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index3");
}
//logout
public function logout()
{
 Session::flush();
return redirect('/index2');
}

//Product1 insertion
public function cart(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index5");
}
//Product2 insertion
public function cart1(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index5");
}

//product3 insertion
public function cart2(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index5");
}
//product4 insertion
public function cart3(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index5");
}
//product5 insertion
public function cart4(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index5");
}
//product6 insertion
public function cart5(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/index5");
}
//productdishwasher insertion
public function cart6(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/display");
}
//productdishwasher insertion
public function cart7(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/display");
}
//productdishwasher
public function cart8(Request $request)
{
    $add = new cartadd;
    if($request->isMethod('post'))
{
  $add->name=$request->get('Item_name');
    $add->price=$request->get('Item_price');

    // $add->message=$request->get('message');
    $add->save();
     
}
return redirect("/display");
}


//insert product
public function addproduct1(Request $request)
{
    $add = new Addproduct;
    if($request->isMethod('post'))
{
  $add->name=$request->get('name');
    $add->price=$request->get('price');
    $add->model=$request->get('model');
    $add->manufacturer=$request->get('manufacturer');
    $add->company=$request->get('company');
    if(!empty($request->file('image')))
    {
        $file=$request->file('image');
        $current=uniqid(Carbon::now()->format('Ymdhs'));
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $fullfilename=$current.".".$file->getClientOriginalExtension();

        $destinationPath=public_path('uploads');
        $file->move($destinationPath,$fullfilename);
        $add->image=$fullfilename;
    }
    $add->save();
     
}
return redirect("/addpro");
}
//insert product dishwasher
public function buy1(Request $request)
{
    $add = new dish;
    if($request->isMethod('post'))
{
  $add->model=$request->get('model');
    $add->manufacturer=$request->get('manufacturer');
    $add->price=$request->get('price');
    $add->date=$request->get('date');
    $add->stock=$request->get('stock');
   
    $add->save();
     
}
return redirect("/displayproduct2");
}
//insert product lg  dishwasher
public function buy2(Request $request)
{
    $add = new dish;
    if($request->isMethod('post'))
{
  $add->model=$request->get('model');
    $add->manufacturer=$request->get('manufacturer');
    $add->price=$request->get('price');
    $add->date=$request->get('date');
    $add->stock=$request->get('stock');
   
    $add->save();
     
}
return redirect("/displayproduct2");
}
//insert product steel dishwasher
public function buy3(Request $request)
{
    $add = new dish;
    if($request->isMethod('post'))
{
  $add->model=$request->get('model');
    $add->manufacturer=$request->get('manufacturer');
    $add->price=$request->get('price');
    $add->date=$request->get('date');
    $add->stock=$request->get('stock');
   
    $add->save();
     
}
return redirect("/displayproduct2");
}
//display dishwaher lg
public function dsp()
{
    $data=dish::simplepaginate(5);
    $findrec=dish::where('id',$id)->get();
    return view('index7',compact('findrec','data'));
    
}
public function phome()
{
    $product=product::all();
    return view('index5',compact('product'));
}




public function showproduct()
{
$pro=product::all();
return view('product',compact('pro'));
}
public function tv()
{
$pro=lap::all();
return view('tv',compact('pro'));
}
public function showproduct2($id)
{
$data=lap::all();
$findrec=lap::where('id',$id)->get();
return view('add2',compact('findrec','data'));
}
public function computer()
{
$pro=com::all();
return view('computer',compact('pro'));
}
public function showproduct3($id)   
{
$data=com::all();
$findrec=com::where('id',$id)->get();
return view('add3',compact('findrec','data'));
}
// public function projector()
// {
// $pro=proj::all();
// return view('projector',compact('pro'));
// }
// public function projector()
// {
// $pro=proj::all();
// return view('projector',compact('pro'));
// }
// 
// public function showproduct4($id)
// {
// $data=proj::all();
// $findrec=proj::where('id',$id)->get();
// return view('add4',compact('findrec','data'));
// }

// public function camera2()
// {
// $pro=Camera::all();
// return view('camera2',compact('pro'));
// }

// public function showproduct5($id)
// {
// $data=Camera::all();
// $findrec=Camera::where('id',$id)->get();
// return view('add5',compact('findrec','data'));
// }
// //for displaying dishwashers page
// public function dishwasher1()
// {
// $pro=product::all();
// return view('product',compact('pro'));
// }


//for displaying a product
public function showproduct1($id)
{
$data=product::all();
$findrec=product::where('id',$id)->get();
return view('add1',compact('findrec','data'));
}
//for add to cart
public function addcart(Request $request, $id='')
{     
    $add=product::find($id);
    echo $id;
    //$user=$name;
    //echo $user;
    if($request->isMethod('post'))
    {
    $add= new cart;

    $add->name=$request->get('name');
    $add->price=$request->get('price');
    $add->quantity=$request->get('quantity');
    // $add->product_id=$request->get('id');
    $add->user=$request->get('user');
   $add->product_id=$request->get('id');
    $total=$request->get('price')*$request->get('quantity');

    if(!empty($request->file('image')))
    {
    $file=$request->file('image');
    $current=uniqid(Carbon::now()->format('Ymdhs'));
    $file->getClientOriginalName();
    $file->getClientOriginalExtension();
    $fullfilename=$current.".".$file->getClientOriginalExtension();

    $destinationPath=public_path('uploads');
    $file->move($destinationPath,$fullfilename);
    $add->image=$fullfilename;
    }
    $add->total=$total;
    $add->save();
   }
   return view("add1");
}
//for add to cart
//for displaying on home page

public function addcart2(Request $request, $id='')
{     
    $add=product::find($id);
    echo $id;
    //$user=$name;
    //echo $user;
    if($request->isMethod('post'))
    {
    $add= new cart;

    $add->name=$request->get('name');
    $add->price=$request->get('price');
    $add->quantity=$request->get('quantity');
    $add->product_id=$request->get('id');
    $add->user_id=$request->get('user');

    $total=$request->get('price')*$request->get('quantity');

    if(!empty($request->file('image')))
    {
    $file=$request->file('image');
    $current=uniqid(Carbon::now()->format('Ymdhs'));
    $file->getClientOriginalName();
    $file->getClientOriginalExtension();
    $fullfilename=$current.".".$file->getClientOriginalExtension();

    $destinationPath=public_path('cart');
    $file->move($destinationPath,$fullfilename);
    $add->image=$fullfilename;
    }
    $add->total=$total;
    $add->save();
   }
   return view("detail");
}
//for displaying products on cartpage
public function cartproduct(Request $request,$user='')
{
    echo $user;
    //$user->user=$request->get($user);
    //  print_r($user);
    $cart=cart::all()->where('user',$user);
    if($cart)
    {
    return view('cart',compact('cart'));
    }
}


//review
public function rv(Request $request)
{
    $add = new rv1;
    if($request->isMethod('post'))
{
  $add->name=$request->get('name');
    $add->email=$request->get('email');
    $add->review=$request->get('review');
    $add->rating=$request->get('rating');
   
   
    $add->save();
     
}
return redirect("/index3");
}
//insert quantity
public function insert(Request $request)
{
    $add= new add;
    if($request->isMethod('post'))
    {
        $add->quantity=$request->get('size');
        $add->save();
    }
    return redirect("display");
}
//remove
public function remove1($id)
{
    $ob=rm::find($id);
    $ob->delete();
    return redirect("/ca/admin");
}
//home
// public function home()
// {
// $in=hom::all();
// $findrec=hom::where('id',$id)->get();
// return view('index5',compact('findrec','in'));
// }


}