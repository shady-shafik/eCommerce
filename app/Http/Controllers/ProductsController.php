<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index' ,compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new Product;

        if($file = $request->image){
            
            $image_name = time() . $file->getClientOriginalName();

            $file->move('images' , $image_name);

            $product->image = '/images/'. $image_name;

        }

        
        $product->name = $request->name;
        $product->price = $request->price ;
        $product->description = $request->description;

        $product->save();

        // return $image_name ;
        // Product::create($product);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
            
        if(file_exists(public_path(). $product->image)){
            unlink( public_path() . $product->image);
        } 

        if($file = $request->image){
            
            $image_name = time() . $file->getClientOriginalName();

            $file->move('images' , $image_name);

            $product->image = '/images/'. $image_name;

        }

        
        $product->name = $request->name;
        $product->price = $request->price ;
        $product->description = $request->description;

        $product->update();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::FindOrFail($id);

        if($product->image){

            if(file_exists(public_path(). $product->image)){
                
                unlink(public_path(). $product->image);

            }
        }

        $product->delete();

        return redirect()->route('products.index');
    }
}
