<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FeatureController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Product = Product::get();
        return view('admin.pages.feature.create')
            ->with('Product', $Product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        unset($request['_token']); //Remove Token

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = null;
        }


        if ($request->hasFile('image2')) {
            $this->validate($request, [
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image2');
            $image_name2 = time() .'feature2'.'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = null;
        }


        if ($request->hasFile('image3')) {
            $this->validate($request, [
                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image3');
            $image_name3 = time() .'feature3'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name3);
        } else {
            $image_name3 = null;
        }


        if ($request->hasFile('image4')) {
            $this->validate($request, [
                'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image4');
            $image_name4 = time() .'feature4'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name4);
        } else {
            $image_name4 = null;
        }

        if ($request->hasFile('image5')) {
            $this->validate($request, [
                'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image5');
            $image_name5 = time() .'feature5'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name5);
        } else {
            $image_name5 = null;
        }

        if ($request->hasFile('image6')) {
            $this->validate($request, [
                'image6' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image6');
            $image_name6 = time() .'feature6'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name6);
        } else {
            $image_name6 = null;
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);
        $request->request->add(['image3' => $image_name3]);
        $request->request->add(['image4' => $image_name4]);
        $request->request->add(['image5' => $image_name5]);
        $request->request->add(['image6' => $image_name6]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['featureDescription']);
        $request->request->add(['featureDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['featureDescription2']);
        $request->request->add(['featureDescription2' => $details2]);
        $details3 = $this->getSummernoteValue($request['featureDescription3']);
        $request->request->add(['featureDescription3' => $details3]);


        $insert_array=array(
            'featureTitle'=>$request['featureTitle'],
            'featureTitle2'=>$request['featureTitle2'],
            'featureTitle3'=>$request['featureTitle3'],
            'featureDescription'=>$details,
            'featureDescription2'=>$details2,
            'featureDescription3'=>$details3,
            'productId'=>$request['productId'],
            'featureImage'=>$image_name,
            'featureFile'=>$image_name2,
            'featureImage2'=>$image_name3,
            'featureFile2'=>$image_name4,
            'featureImage3'=>$image_name5,
            'featureFile3'=>$image_name6,

        );

        //return $insert_array;

        try {
            Feature::create($insert_array);
            return Redirect::to('/feature/show')->with('success', "Feature Created Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.pages.feature.show')
            ->with('feature',
                Feature::join('products', 'products.productId', '=', 'features.featureId')
                    ->orderBy('featureId', "DESC")
                    ->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::where('featureId', $id)->first();
        $product = Product::get();
        return view('admin.pages.feature.edit')
            ->with('feature', $feature)
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
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
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $request['image'];
        }


        if ($request->hasFile('image2')) {
            $this->validate($request, [
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image2');
            $image_name2 = time() .'feature2'.'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = $request['image2'];
        }


        if ($request->hasFile('image3')) {
            $this->validate($request, [
                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image3');
            $image_name3 = time() .'feature3'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name3);
        } else {
            $image_name3 = $request['image3'];
        }


        if ($request->hasFile('image4')) {
            $this->validate($request, [
                'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image4');
            $image_name4 = time() .'feature4'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name4);
        } else {
            $image_name4 = $request['image4'];
        }

        if ($request->hasFile('image5')) {
            $this->validate($request, [
                'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image5');
            $image_name5 = time() .'feature5'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name5);
        } else {
            $image_name5 = $request['image5'];
        }

        if ($request->hasFile('image6')) {
            $this->validate($request, [
                'image6' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,csv,xlsx|max:3048',
            ]);
            $image = $request->file('image6');
            $image_name6 = time() .'feature6'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/feature');
            $image->move($destinationPath, $image_name6);
        } else {
            $image_name6 = $request['image6'];
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);
        $request->request->add(['image3' => $image_name3]);
        $request->request->add(['image4' => $image_name4]);
        $request->request->add(['image5' => $image_name5]);
        $request->request->add(['image6' => $image_name6]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['featureDescription']);
        $request->request->add(['featureDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['featureDescription2']);
        $request->request->add(['featureDescription2' => $details2]);
        $details3 = $this->getSummernoteValue($request['featureDescription3']);
        $request->request->add(['featureDescription3' => $details3]);


        $featureId = $request['featureId'];

        $insert_array=array(
            'featureTitle'=>$request['featureTitle'],
            'featureTitle2'=>$request['featureTitle2'],
            'featureTitle3'=>$request['featureTitle3'],
            'featureDescription'=>$details,
            'featureDescription2'=>$details2,
            'featureDescription3'=>$details2,
            'productId'=>$request['productId'],
            'featureImage'=>$image_name,
            'featureFile'=>$image_name2,
            'featureImage2'=>$image_name3,
            'featureFile2'=>$image_name4,
            'featureImage3'=>$image_name5,
            'featureFile3'=>$image_name6,

        );

        //return $insert_array;

        try {
            Feature::where('featureId', $featureId)->update($insert_array);
            return Redirect::to('/feature/show')->with('success', "Feature Updated Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Feature::where('featureId', $id)->delete();
            return back()->with('success', "Feature Deleted");
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
