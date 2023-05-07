<?php

namespace App\Http\Controllers;
use App\Models\Geodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{
        public function index()
        {
            geo:Geodata::all();

            return view('admin.home');
         }



        // public function dashboard()
        // {
    
        //     $data=appointment::all();
        //     return view('admin.showappointment',compact('data'));
        // }
        // public function addGeodata()
        // {
        //     return view('admin.addGeodata');
        // }


        public function addGeodata()
        {
            return view('admin.addGeodata');
        }
    

        public function updateGeodata()
        {
            return view('admin.update_Geodata');
        }

        public function showGeodata()
        {
            geo:Geodata::all();
            // return view('admin.showGeodata');

            return view('admin.showGeodata')->with('geo','$geo');
        }

        public function dashboard()
        {
            return view('admin.dashboard');
        }


        public function uploadimage(Request $request)
         {
        
            $geo=new geodata;
            $image=$request->file;
            $imagename=time().'.'.$image->getClientoriginalExtension();
           
        
            $request->file->move('geoimage',$imagename);
            $geo->image=$imagename;
            $geo->name=$request->name;
            $geo->phone=$request->number;
            $geo->room=$request->room;
            $geo->gender=$request->gender;
    
    
            $geo->save();
             return redirect()->back()->with('message','Data Added Successfully');
         }


        
        // public function upload(Request $request)
        // {
        //     $doctor=new doctor;
        //     $image=$request->file;
        //     $imagename=time().'.'.$image->getClientoriginalExtension();
           
        
        //     $request->file->move('doctorimage',$imagename);
        //     $doctor->image=$imagename;
        //     $doctor->name=$request->name;
        //     $doctor->phone=$request->number;
        //     $doctor->room=$request->room;
        //     $doctor->speciality=$request->speciality;
    
    
        //     $doctor->save();
        //     return redirect()->back()->with('message','Doctor Added Successfully');
        // }
    
    
        // public function showappointment()
        // {
    
        //     $data=appointment::all();
        //     return view('admin.showappointment',compact('data'));
        // }
    
    
        // public function approved($id)
        // {
        //     $data=appointment::find($id);
        //     $data->status='approved';
        //     $data->save();
        //     return redirect()->back();
        // }
    
    
    
        // public function cancelled($id)
        // {
        //     $data=appointment::find($id);
        //     $data->status='cancelled';
        //     $data->save();
    
        //     return redirect()->back();
        // }
    
    
        // public function showdoctor()
        // {
    
        //     $data = doctor::all();
        //     return view('admin.showdoctor',compact('data'));
        // }
    
        // public function deletedoctor($id)
        // {
        //     $data=doctor::find($id);
        //     $data->delete();
        //     return redirect()->back();
            
        // }
    
    
        // public function updatedoctor($id)
        // {
        //         $data=doctor::find($id);
    
    
        //     return view('admin.update_doctor',compact('data'));
        // }
    
    
    
        //  public function editdoctor(Request $request, $id)
        // {
        //         $doctor = doctor::find($id);
        //         $doctor->name=$request->name;
        //         $doctor->phone=$request->phone;
        //         $doctor->speciality=$request->speciality;
        //         $doctor->room=$request->room;
                
                
        //         $image=$request->file;
    
        //         if($image)
        //         {
        //         $imagename=time().'.'.$image->getClientOriginalExtension();
                
        //         $request->file->move('doctorimage',$imagename);
    
        //         $doctor->image=$imagename;
        //         }
                
    
        //         $doctor->save();
    
        //         return redirect()->back()->with('message','Doctor Details Updated Successfully');
            
            
        //     }
        
        
        }

