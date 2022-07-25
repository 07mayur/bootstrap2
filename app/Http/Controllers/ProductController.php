<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $data= new Product();
        $data->uname= $request->uname;
        $data->pswd= $request->pswd;
        $data->save();
        return redirect()->route('table')->with('message', 'Data Inserted Successfully!');//for jump to next form
    }
    public function table()
{
    $data=Product::paginate(3);
    return view('table',compact('data'));
}
public function edit($id){
    $data = Product::find($id);

    return view('edit',compact('data'));
}
public function update(Request $request,$id)
    {
        $data= Product::find($id);
        $data->uname= $request->uname;
        $data->pswd= $request->pswd;
        $data->save();
        return redirect()->route('table')->with('message', 'Data Updated Successfully!');
    }
    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('table');    }
}





