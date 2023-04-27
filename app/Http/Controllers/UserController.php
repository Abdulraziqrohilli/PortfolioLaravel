<?php

namespace App\Http\Controllers;
use App\Models\profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\servies;
use App\Models\skills;
use App\Models\portfolio;
use App\Models\blog;



use Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function editeprofile(){
        $users= DB::table('profiles')->where('id', 1)->first();
        return view('admin.profile.pupdate',compact('users'));
    }

    public function updateprofile(request $request){

        $data = array();
        $data['f_name'] = $request->first_name;
        $data['l_name'] = $request->last_name;
        $data['occupation'] = $request->occupation;
        $data['degree'] = $request->degree;
        $data['db'] = $request->dob;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['language'] = $request->language;
        $data['freelance'] = $request->freelance;
        $data['description'] = $request->description;
        if(request()->cv){
            $cvName = time(). rand(1,10000) .'.'.request()->cv->getClientOriginalExtension();
            $data['cv'] = $cvName;
            $img_loc3 = 'image/profile/';
            request()->image->move($img_loc3 , $cvName);
        }
        $data['phone'] = $request->phone;
        $data['website'] = $request->website;
        if(request()->image){
            $imageName = time(). rand(1,10000) .'.'.request()->image->getClientOriginalExtension();
            $data['image'] = $imageName;
            $img_loc = 'image/profile/';
            request()->image->move($img_loc , $imageName);
        }
        if (request()->services_image){
            $servicesimage = time(). rand(1,10000) .'.'.request()->services_image->getClientOriginalExtension();
            $data['services_image'] = $servicesimage;
            $img_loc2 = 'image/profile/';
            request()->services_image->move($img_loc2 , $servicesimage);
        }
        $data['skill_title'] = $request->skill_title;
        $data['skill_description'] = $request->skill_description;   
        DB::table('profiles')->update($data);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function Adminhome(){
        return view('admin.index')->name('home');
    }

    public function services(){
        return view('admin.profile')->name('home');
    }

    public function editeservices($id){
        $services = servies::find($id);
        return view('admin.profile.editservices',compact('services'));
    }

    public function deleteservices($id){
        $services = servies::find($id)->delete();
        return redirect()->back();
    }

    public function updateservices(request $request,$id){
        $update = array();
        $update['icon'] = $request->icon;
        $update['title'] = $request->title;
        $update['description'] = $request->description;
        DB::table('servies')->where('id',$id)->update($update);
        return redirect()->route('services');
    }

    public function servicesadd(request $request){

        $data = array();
        $data['title'] = $request->title;
        $data['icon'] = $request->icon;
        $data['description'] = $request->description;
        DB::table('servies')->insert($data);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function skillsadd(request $request){

        $data = array();
        $data['section'] = $request->skill;
        $data['percentage'] = $request->percentage;
        DB::table('skills')->insert($data);
        return redirect()->back()->with('success', 'Saved successfully');
    }

   public function deletskills($id){
       $services = skills::find($id)->delete();
       return redirect()->back();
   }

    public function editeskills($id){
        $skills = skills::find($id);
        return view('admin.profile.editeskills',compact('skills'));
    }

    public function updateskills(request $request,$id){
        $update = array();
        $update['section'] = $request->skill;
        $update['percentage'] = $request->percentage;
        DB::table('skills')->where('id',$id)->update($update);
        return redirect()->route('skills');
    }

    public function portfolioadd(request $request){

        $data = array();

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $data['image'] = $imageName;
        $img_loc = 'image/portfolio/';
        request()->image->move($img_loc , $imageName);
        $data['link'] = $request->link;
        DB::table('portfolios')->insert($data);
        return redirect()->back()->with('success', 'Saved successfully');
    }


    public function editeportfolioes($id){
        $portfolio = portfolio::find($id);
        return view('admin.profile.editeportfolio',compact('portfolio'));
    }

    public function updateportfolioes(request $request,$id){
        $update = array();
        if(request()->image){
            $image = time(). rand(1,10000) .'.'.request()->image->getClientOriginalExtension();
            $update['image'] = $image;
            $img_loc = 'image/portfolio/';
            request()->image->move($img_loc , $image);
        }
        $update['link'] = $request->link;
        DB::table('portfolios')->where('id',$id)->update($update);
        return redirect()->back();
    }

    public function deleteportfolioes($id){
        $services = portfolio::find($id)->delete();
        return redirect()->back();
    }

    public function blogadd(request $request){

        $data = array();
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $data['image'] = $imageName;
        $img_loc = 'image/blog/';
        request()->image->move($img_loc , $imageName);
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['date'] = now(); 
        DB::table('blogs')->insert($data);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function deleteblogs($id){
        $services = blog::find($id)->delete();
        return redirect()->back();
    }

    public function editeblogs($id){
        $blogs = blog::find($id);
        return view('admin.profile.editeblog',compact('blogs'));
    }

    public function updateblogs(request $request,$id){

        $data = array();
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $data['image'] = $imageName;
        $img_loc = 'image/blog/';
        request()->image->move($img_loc , $imageName);
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['date'] = now(); 
        DB::table('blogs')->where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function blogdetail($id){
        $blogs = blog::find($id);
        return view('layouts.blog',compact('blogs'));
    }





}
