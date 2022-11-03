// if(!empty($request->file('image')))
// {
//     $file=$request->file('image');
//     $current=uniqid(Carbon::now()->format('Ymdhs'));
//     $file->getClientOriginalName();
//     $file->getClientOriginalExtension();
//     $fullfilename=$current.".".$file->getClientOriginalExtension();

//     $destinationPath=public_path('uploads');
//     $file->move($destinationPath,$fullfilename);
//     $add->image=$fullfilename;
// }