<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function create()
    {

        $Category = Category::get();
        return view('admin.pages.product.create')
            ->with('Category', $Category);
    }

    public function store(Request $request)
    {
        unset($request['_token']); //Remove Token

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = null;
        }


        if ($request->hasFile('image2')) {
            $this->validate($request, [
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image2');
            $image_name2 = time() .'image2'.'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = null;
        }


        if ($request->hasFile('image3')) {
            $this->validate($request, [
                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image3');
            $image_name3 = time() .'image3'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name3);
        } else {
            $image_name3 = null;
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);
        $request->request->add(['image3' => $image_name3]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['productDescription']);
        $request->request->add(['productDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['productDescription2']);
        $request->request->add(['productDescription2' => $details2]);


        $insert_array=array(
            'productTitle'=>$request['productTitle'],
            'productTitle2'=>$request['productTitle2'],
            'productDescription'=>$details,
            'productDescription2'=>$details2,
            'categoryId'=>$request['categoryId'],
            'productImage'=>$image_name,
            'productImage2'=>$image_name2,
            'productFile'=>$image_name3,

        );

        //return $insert_array;

        try {
            Product::create($insert_array);
            return Redirect::to('/product/show')->with('success', "Product Created Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.pages.product.show')
            ->with('product',
                Product::join('categories', 'categories.categoryId', '=', 'products.categoryId')
                    ->orderBy('productId', "DESC")
                    ->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('productId', $id)->first();
        $category = Category::get();
        return view('admin.pages.product.edit')
            ->with('product', $product)
            ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        unset($request['_token']); //Remove Token

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $request['image'];
        }


        if ($request->hasFile('image2')) {
            $this->validate($request, [
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image2');
            $image_name2 = time() .'image2'.'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = $request['image2'];
        }


        if ($request->hasFile('image3')) {
            $this->validate($request, [
                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image3');
            $image_name3 = time() .'image3'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name3);
        } else {
            $image_name3 = $request['image3'];
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);
        $request->request->add(['image3' => $image_name3]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['productDescription']);
        $request->request->add(['productDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['productDescription2']);
        $request->request->add(['productDescription2' => $details2]);


        $productId = $request['productId'];


        $insert_array=array(
            'productTitle'=>$request['productTitle'],
            'productTitle2'=>$request['productTitle2'],
            'productDescription'=>$details,
            'productDescription2'=>$details2,
            'categoryId'=>$request['categoryId'],
            'productImage'=>$image_name,
            'productImage2'=>$image_name2,
            'productFile'=>$image_name3,

        );

        //return $insert_array;

        try {
            Product::where('productId', $productId)->update($insert_array);
            return Redirect::to('/product/show')->with('success', "Product Updated Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::where('productId', $id)->delete();
            return back()->with('success', "Product Deleted");
        } catch (\Exception $exception) {
            return back()->with('success', $exception->getMessage());
        }
    }

    private function getSummernoteValue($input_value)
    {

        $detail = $input_value;

        $dom = new \domdocument();

        $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'));

        $images = $dom->getelementsbytagname('img');

        try{
            foreach ($images as $k => $img) {
                $data = $img->getattribute('src');

                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);

                $data = base64_decode($data);
                $image_name = time() . $k . '.png';
                $path = public_path() . '/images/post/' . $image_name;

                file_put_contents($path, $data);

                $img->removeattribute('src');
                $img->setattribute('src',  '/images/post/' .$image_name);
            }
        }catch (\Exception $e){

        }

        $detail = $dom->savehtml();
        return $detail;
    }
}
