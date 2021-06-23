<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\User;
use App\Models\UserAdmin;
use Auth;
use Hash;

class DashboardController extends Controller
{
    function carousel(){
        return view('carouselData');
    }

    function showDashboard(){
        return view('dashboard');
    }

    // demos

    
    
    
    
    
    function fetchDataFromCarouselForm(){
       
        $request = Request()->all();  
        // dd($request);
        $carouselVariable=new Carousel;
        
        $carouselVariable->title=$request["title"];
        $carouselVariable->description=$request["description"];
        $imageName = time().'.'.$request["image"]->extension();  
        $request["image"]->move(public_path('images'), $imageName);
        
        $carouselVariable->Image= 'images/'.$imageName;
        $carouselVariable->redirectUrl=$request["redirectUrl"];
        
        if(!array_key_exists('isActive',$request)
        ){
            $carouselVariable->isActive = 0;
        } else {
            $carouselVariable->isActive = 1;
        }
        $carouselVariable->save();
        return  redirect(route('carouselData'));
    }
    
    
    // demo end
  
   


    // // 
    // function showAllCarouselData(){
    //     return view('newonew');
    // }
    function showAllCarouselDat(){
        // dd('I am here');
        $allData = Carousel::get();
        $storeAll = [];
        $update = 0;
        foreach($allData as $storeObj){
            $arrayObj = [];
            $arrayObj['id'] = $storeObj->id;
            $arrayObj['title'] = $storeObj->title;
            $arrayObj['description'] = $storeObj->description;
            $arrayObj['image'] = $storeObj->image;
            $arrayObj['isActive'] = $storeObj->isActive;
            if($storeObj['isActive']==0){
              $arrayObj['isActive']='inactive';
            }
            else{
                $arrayObj['isActive']='active';
            }
            $storeAll[$update] = $arrayObj;
            $update++;
        }
        // dd($storeAll);
           return view('newonew',["newkey"=>$storeAll]);
    }

    function adminLogin(){
        return view('admin-login');
    }

    function adminRegister(){
        return view('admin-register');
    }


    // 
   
    
    function loginAdmin()
    {        
        $request = Request();
        $email = $request['email'];
        $password = $request['password'];
        $store = Auth::attempt(['email' => $email, 'password' => $password]);
        return redirect()->route('dashboard');
       
     }

     // For Logout start here
     function proceedToLogout() 
     {
        $user = Auth::user();
         Auth::logout();
         return redirect()->route('home');
     }
        // For Logout end here

    //  For Register a User
    function registerAdmin(){
        $request = Request()->all();
        $store = new UserAdmin;
            $store->name = $request['name'];
            $store->email = $request['email'];
            $store->password = Hash::make($request['password']);
            $store->save();
            return redirect(route('adminLogin'));
    }

    // 




}
