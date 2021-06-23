<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Carousel;
use App\Models\Course;
use Hash;
use Auth;


class HomeController extends Controller
{
    // function dynamiccarouselbar(){
    //     $carousel = [];
    //     $carouselData = [];
    //     $carouselData['title'] = "Awesome Programming Course";
    //     $carouselData['description'] = "This course is best for programming Enthusium for their skill";
    //     $carouselData['image'] = "images/1.jpg";
    //     $carousel[0] = $carouselData; 
    //     $carouselData = [];
    //     $carouselData['title'] = "Awesome Coding Course";
    //     $carouselData['description'] = "This course is best for coding Enthusium for their skill";
    //     $carouselData['image'] = "images/2.jpg";
    //     $carousel[1] = $carouselData; 
    //     $carouselData = [];
    //     $carouselData['title'] = "Awesome Video Editing Course";
    //     $carouselData['description'] = "This course is best for Video Editing Enthusium for their skill";
    //     $carouselData['image'] = "images/3.jpg";
    //     $carousel[2] = $carouselData; 
    //     $carouselData = [];
    //     $carouselData['title'] = "Awesome Art Course";
    //     $carouselData['description'] = "This course is best for art Enthusium for their skill";
    //     $carouselData['image'] = "images/4.jpg";
    //     $carousel[3] = $carouselData; 
    //     $carouselData = [];
    //     $carouselData['title'] = "Awesome Digital Marketing Course";
    //     $carouselData['description'] = "This course is best for Digital Marketing Enthusium for their skill";
    //     $carouselData['image'] = "images/5.jpg";
    //     $carousel[4] = $carouselData; 
        
        
    //     // return view('/',['carouselData'=>$carousel]);
    // }
    
    
    function checkNavbar(){
          
        $islogin = Auth::check();

// for course
                $storeData=Course::get();
                $courseObject=[];
                $incrementt=0;
                foreach($storeData as $newObject)
                {
                    //  dd($newObject);
                    $newVariable['courseName']=$newObject->courseName;
                    $newVariable['image']=$newObject->image;
                    $newVariable['totalPrice']=$newObject->totalPrice;
                    $newVariable['discountPrice']=$newObject->discountPrice;
                    $newVariable['description']=$newObject->description;
                    
                    $courseObject[$incrementt++]=$newVariable;
                }
                // for course

              $storeData=Carousel::get();
              $arrayObject=[];
              $increment=0;
              foreach($storeData as $newObject)
              {
                  $newVariable['id']=$newObject->id;
                  $newVariable['title']=$newObject->title;
                  $newVariable['description']=$newObject->description;
                  $newVariable['image']=$newObject->image;
                  $newVariable['redirectUrl']=$newObject->redirectUrl;
                  $newVariable['isActive']=$newObject->isActive;
                 
                  $arrayObject[$increment++]=$newVariable;
              }
            //   dd($arrayObject);
          
        return view('welcome',['name'=>$islogin,'useKey'=>$arrayObject,'courseKey'=>$courseObject]);
    }

    function showLogin(){
        return view('login');

    }
    
    function authenticate()
    {
       
        
        $request = Request();
        $email = $request['email'];
        $password = $request['password'];
        $store = Auth::attempt(['email' => $email, 'password' => $password]);
       
        return redirect()->intended('/');
     }

     // For Logout start here
     function proceedToLogout() 
     {
        $user = Auth::user();
         Auth::logout();
         return redirect()->route('home');
     }
        // For Logout end here

    function showRegister(){
        return view('register');
    }
    function showMyProfile(){
        return view('my-profile');
    }
    function showEditProfile(){
        return view('edit-profile');
    }
    function showCategories(){
        return view('categories');
    }
    //  For Register a User
    function addAllDataToFrom(){
        $request = Request()->all();
        $store = new User;
            $store->name = $request['name'];
            $store->email = $request['email'];
            $store->password = Hash::make($request['password']);
            $store->role = $request['role'];
            $store->save();
            return redirect(route('login'));
    }

    // For forget password
    function showForgetPassword(){
        return view('forget_password');
    }
    function showVarification(){
        return view('varification');
    }
    function showNewPassword(){
        return view('new_password');
    }
    function showChangePassword(){
        return view('change_password');
    }
    function showPrivacyPolicy(){
        return view('privacy_policy');
    }
    function showEmailVarification(){
        return view('email_varification');
    }
    function showTermsCondition(){
        return view('terms_condition');
    }
    function showDisclaimer(){
        return view('disclaimer');
    }
   
    function showContact(){
        return view('contact');
    }
    function showCourseDetails(){
        return view('course_details');
    }
    function showRating(){
        return view('rating');
    }
    function showAbout(){
        return view('about');
    }
    function showUploadCourse(){
        return view('upload_course');
    }
    function showSearch(){
        return view('search_items');
    }
// For Access Data from Form Upload Courses to database
    function fetchDataFromCourseForm(){
       
        $request = Request()->all();  
        // dd($request);
        $carouselVariable=new Course;
        
        $carouselVariable->courseName=$request["coursename"];
        $carouselVariable->slug=$request["courseslug"];
        $imageName = time().'.'.$request["image"]->extension();  
        $request["image"]->move(public_path('images'), $imageName);
        
        $carouselVariable->Image= 'images/'.$imageName;
        $carouselVariable->totalPrice=$request["courseprice"];
        
        $carouselVariable->discountPrice=$request["discountprice"];
        $carouselVariable->categoryId=$request["categoryid"];
       

        $carouselVariable->description=$request["summary-ckeditor"];
        if(!array_key_exists('isActive',$request)
        ){
            $carouselVariable->isActive = 0;
        } else {
            $carouselVariable->isActive = 1;
        }
        $carouselVariable->save();
        // dd($carouselVariable);
        return  redirect(route('courses'));
    }

    function accessCourseData(){
        $storeData=Course::get();
        $courseObject=[];
        $increment=0;
        foreach($storeData as $newObject)
        {
            //  dd($newObject);
            $newVariable['courseName']=$newObject->courseName;
            $newVariable['image']=$newObject->image;
            $newVariable['totalPrice']=$newObject->totalPrice;
            $newVariable['discountPrice']=$newObject->discountPrice;
            $newVariable['description']=$newObject->description;
            
            $courseObject[$increment++]=$newVariable;
        }
        // dd($courseObject);
        return view('courses',['courseKey'=>$courseObject]);
    }


// MY COURSE FUNCTION : 
    function myCourse(){
        return view('my-courses');
    }
    function enrollCourse(){
        return view('enroll-courses');
    }
    function favouriteCourse(){
        return view('my-Favourite');
    }






    // Demo test only
    function demo(){
        return view('test');
    }
}



// if($request['categoryid']==1){
//     $carouselVariable->categoryId='Programming';
//   }
//   elseif ( $request->['categoryid']==2 )
//   {
//     $carouselVariable->categoryId='Editing';
//   }
//   elseif ( $request['categoryid']==3)
//   {
//     $carouselVariable->categoryId='Business';
//   }
//   elseif($request['categoryid']==4)
//   {
//     $carouselVariable->categoryId='Digital_Marketing';
//   }
//   elseif($request['categoryid']==5)
//   {
//     $carouselVariable->categoryId='Arts';
//   }
//   elseif($request['categoryid']==6)
//   {
//     $carouselVariable->categoryId='Coding';
//   }
//   else
//   {
//     $carouselVariable->categoryId='Music';
//   }