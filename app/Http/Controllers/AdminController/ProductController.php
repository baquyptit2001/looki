<?php

namespace App\Http\Controllers\AdminController;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\imgProduct;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductAddRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $product = Product::orderBy('name', 'asc')->get();
        $id = 1;
        return view('admin.page.product.index')->with(compact('product', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $brand = Brand::all();
        return view('admin.page.product.add', compact('category', 'brand'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddRequest $request)
    {
        //upload ảnh
        if($request->sale_price == null){
            $request->merge(['sale_price' => 0]);
        }
        $file_name = $request->upload->getClientOriginalName();
        $request->upload->move(public_path('uploads/product'), $file_name);
        $request->merge(['image'=>$file_name]);
        // $request->image = $file_name;
        $product = Product::create($request->all());
        if($request->uploads != null){
            foreach($request->uploads as $upload){
                $file_name = $upload->getClientOriginalName();
                $upload->move(public_path('uploads/product'), $file_name);
                imgProduct::create([
                    'product_id'=>$product->id,
                    'image'=>$file_name
                ]);
            }
        }
        $request->merge(['product_id'=>$product->id]);
        ProductSize::create($request->only(['size', 'product_id', 'price', 'sale_price']));
        return redirect()->route('listProduct');
    }

    public function upload(Request $req){
        $file_name = $req->image->getClientOriginalName();
        $req->image->move(public_path('uploads'), $file_name);
//        dd($file_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $pro = Product::find($id);
        $category = Category::all();
        $parent[0] = 'Danh mục';
        $img_pro = imgProduct::all();

        foreach($category as $item){
            $parent[$item->id] = $item->name;
        }
        return view('admin.page.product.edit-product', compact('pro', 'category', 'parent', 'img_pro'));
    }

    public function delete($id){
        while(imgProduct::where('product_id', $id)->first()!=null){
            $img = imgProduct::where('product_id', $id)->first();
            $img->delete();
        }
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route('listProduct');
    }
    
    public function deleteImg($id){
        $img = imgProduct::find($id);
        $img->delete();
//        return redirect()->route('editProduct', ['id'=>$img->product_id]);
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id)
    {
        $pro = Product::find($id);
        if($req->has('upload')){
            $file_name = $req->upload->getClientOriginalName();
            $req->upload->move(public_path('uploads'), $file_name);
            $req->merge(['image'=>$file_name]);
        }
        else{
            $file_name=$pro->image;
        }

//
        if($req->has('uploads')){
            foreach($req->uploads as $upload){
                $file_name = $upload->getClientOriginalName();
                $upload->move(public_path('uploads'), $file_name);

                imgProduct::create([
                    'product_id'=>$pro->id,
                    'image'=>$file_name
                ]);
            }
        }

        $pro->update($req->all());
        return redirect()->route('listProduct');
    }

    public function editSize($id)
    {
        $size = ProductSize::find($id);
        return view('admin.page.product.size.edit', compact('size'));
    }

    public function updateSize(Request $request, $id)
    {
        if($request->sale_price == null)
            $request->merge(['sale_price' => 0]);
        $size = ProductSize::find($id);
        $size->update($request->all());
        return redirect()->back();
    }

    public function listSize($id)
    {
        $product = Product::find($id);
        return view('admin.page.product.size.index', compact('product'));
    }

    public function addSize(Request $request, $id)
    {
        if($request->sale_price == null)
            $request->merge(['sale_price' => 0]);
        $request->merge(['product_id' => $id]);
        ProductSize::create($request->all());
        return redirect()->back();
    }

    public function deleteSize($id)
    {
        $size = ProductSize::find($id);
        $size->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
