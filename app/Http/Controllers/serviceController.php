<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Image;

class serviceController extends Controller
{
    //
    public function index(){
        $services=Service::get();
        return view('admin.service.index',compact('services'));
    }

    public function addService(){
        return view('admin.service.addService');
    }

    public function storeService(Request $request){
        $service=new Service();
        $this->validate($request,[
            'image'=>'required',
            'icon'=>'required',
            'description'=>'required',
            'service'=>'required'
        ]);

        $image=$request->image;
        $service->icon=$request->icon;
        $service->description=$request->description;
        $service->service=$request->service;
        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // $image->move(public_path('media/service/'),$image_name);
            $full_name = 'public/media/service/' . $image_name;
            Image::make($image)->resize(500,500)->save($full_name);

            $service->image = $full_name;
        }
        $service->save();

        return redirect(route('services'))->with('message',"Service Added");
    }

    public function updateService(Request $request,$id){
        $service=Service::find($id);
        $this->validate($request,[
            'description'=>'required',
            'icon'=>'required',
            'service'=>'required'
        ]);

        $image=$request->image;
        $service->description=$request->description;
        $service->icon=$request->icon;
        $service->service=$request->service;
        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/service/' . $image_name;
            // $image->move(public_path('media/service/'),$image_name);
            Image::make($image)->resize(300,300)->save($full_name);

            $service->image = $full_name;
        }
        $service->save();

        return redirect(route('services'))->with('message',"Service Updated");
    }

    public function deleteService($id){
        Service::find($id)->delete();
        return redirect(route('services'))->with('message',"Service Deleted");
    }

    public function editService($id)
    {
        $service = Service::find($id);
        return view('admin.service.editService', compact('service'));
    }



}
