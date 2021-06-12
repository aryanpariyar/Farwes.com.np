<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

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
        return  redirect(route('home'));
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
}
