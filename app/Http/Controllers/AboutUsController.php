<?php

namespace App\Http\Controllers;

use App\AboutUs;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutUsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.about.create');
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
            $destinationPath = public_path('/images/aboutInfo');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = null;
        }


        if ($request->hasFile('image2')) {
            $this->validate($request, [
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image2');
            $image_name2 = time() .'about-info'.'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/aboutInfo');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = null;
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['visionDescription']);
        $request->request->add(['visionDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['aboutDescription']);
        $request->request->add(['aboutDescription' => $details2]);


        $insert_array=array(
            'visionTitle'=>$request['visionTitle'],
            'aboutTitle'=>$request['aboutTitle'],
            'visionDescription'=>$details,
            'aboutDescription'=>$details2,
            'visionImage'=>$image_name,
            'aboutImage'=>$image_name2,

        );

        //return $insert_array;

        try {
            AboutUs::create($insert_array);
            return Redirect::to('/about-info/show')->with('success', "About Info Created Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.pages.about.show')->with('aboutIn', AboutUs::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.about.edit')->with('aboutUs', AboutUs::where('aboutId', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUs  $aboutUs
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
            $destinationPath = public_path('/images/aboutInfo');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $request['image'];
        }


        if ($request->hasFile('image2')) {
            $this->validate($request, [
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image2');
            $image_name2 = time() .'about-info'.'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/aboutInfo');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = $request['image2'];
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['visionDescription']);
        $request->request->add(['visionDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['aboutDescription']);
        $request->request->add(['aboutDescription' => $details2]);


        $aboutId = $request['aboutId'];


        $insert_array=array(
            'visionTitle'=>$request['visionTitle'],
            'aboutTitle'=>$request['aboutTitle'],
            'visionDescription'=>$details,
            'aboutDescription'=>$details2,
            'visionImage'=>$image_name,
            'aboutImage'=>$image_name2,

        );

        //return $insert_array;

        try {
            AboutUs::where('aboutId', $aboutId)->update($insert_array);
            return Redirect::to('/about-info/show')->with('success', "About Info Updated Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            AboutUs::where('aboutId', $id)->delete();
            return back()->with('success', "About Info Deleted");
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
