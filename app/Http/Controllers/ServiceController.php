<?php

namespace App\Http\Controllers;

use App\Service;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.service.create');
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
            $destinationPath = public_path('/images/services');
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
            $destinationPath = public_path('/images/services');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = null;
        }


        if ($request->hasFile('image3')) {
            $this->validate($request, [
                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image3');
            $image_name3 = time() .'feature3'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/services');
            $image->move($destinationPath, $image_name3);
        } else {
            $image_name3 = null;
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);
        $request->request->add(['image3' => $image_name3]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['serviceDescription']);
        $request->request->add(['serviceDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['maintenanceDescription']);
        $request->request->add(['maintenanceDescription' => $details2]);
        $details3 = $this->getSummernoteValue($request['consultantDescription']);
        $request->request->add(['consultantDescription' => $details3]);


        $insert_array=array(
            'serviceTitle'=>$request['serviceTitle'],
            'maintenanceTitle'=>$request['maintenanceTitle'],
            'consultantTitle'=>$request['consultantTitle'],
            'serviceDescription'=>$details,
            'maintenanceDescription'=>$details2,
            'consultantDescription'=>$details3,
            'serviceImage'=>$image_name,
            'maintenanceImage'=>$image_name2,
            'consultantImage'=>$image_name3,

        );

        //return $insert_array;

        try {
            Service::create($insert_array);
            return Redirect::to('/service/show')->with('success', "Services Created Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.pages.service.show')->with('services', Service::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.service.edit')->with('services', Service::where('serviceId', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
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
            $destinationPath = public_path('/images/services');
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
            $destinationPath = public_path('/images/services');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = $request['image2'];
        }


        if ($request->hasFile('image3')) {
            $this->validate($request, [
                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image3');
            $image_name3 = time() .'feature3'. '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/services');
            $image->move($destinationPath, $image_name3);
        } else {
            $image_name3 = $request['image3'];
        }

        $request->request->add(['image' => $image_name]);
        $request->request->add(['image2' => $image_name2]);
        $request->request->add(['image3' => $image_name3]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['serviceDescription']);
        $request->request->add(['serviceDescription' => $details]);
        $details2 = $this->getSummernoteValue($request['maintenanceDescription']);
        $request->request->add(['maintenanceDescription' => $details2]);
        $details3 = $this->getSummernoteValue($request['consultantDescription']);
        $request->request->add(['consultantDescription' => $details3]);


        $serviceId = $request['serviceId'];


        $insert_array=array(
            'serviceTitle'=>$request['serviceTitle'],
            'maintenanceTitle'=>$request['maintenanceTitle'],
            'consultantTitle'=>$request['consultantTitle'],
            'serviceDescription'=>$details,
            'maintenanceDescription'=>$details2,
            'consultantDescription'=>$details3,
            'serviceImage'=>$image_name,
            'maintenanceImage'=>$image_name2,
            'consultantImage'=>$image_name3,

        );

        //return $insert_array;

        try {
            Service::where('serviceId', $serviceId)->update($insert_array);
            return Redirect::to('/service/show')->with('success', "Services Updated Successfully");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Service::where('serviceId', $id)->delete();
            return back()->with('success', "Service Deleted");
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
