<?php

namespace App\Http\Controllers;

use App\Models\Exam_result;
use App\Models\Exam_type;
use App\Models\Home_service;
use App\Models\Paid_service;
use App\Models\Semester;
use App\Models\Student_service;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $services = Home_service::take(6)->get();
        return view('main', compact('services'));
    }

    public function payBook($id)
    {
        $serv = Paid_service::where('id', $id)->first();
        $semesters=Semester::all();
        return view('payBook', compact('serv','semesters'));
    }
    public function savePayBook(Request $request ){
        $input = $request->except(['_token']);

        Student_service::create($input);
        return redirect()->route('main');
     }

     public function payPage($id)
     {
         $serv = Paid_service::where('id', $id)->first();
         $semesters=Semester::all();
         return view('payPage', compact('serv','semesters'));
     }
     public function askar($id)
     {
         $serv = Paid_service::where('id', $id)->first();
         $semesters=Semester::all();
         return view('askar', compact('serv','semesters'));
     }
     public function newYear($id)
     {
         $serv = Paid_service::where('id', $id)->first();
         $semesters=Semester::all();
         return view('new-year', compact('serv','semesters'));
     }
     public function savePayPage(Request $request ){
         $input = $request->except(['_token']);

         Student_service::create($input);
         return redirect()->route('main');
      }

public function eltemas($id){

        $serv = Paid_service::where('id', $id)->first();
        $semesters=Semester::all();
        return view('eltemas', compact('serv','semesters'));
    }
    public function saveEltemas(Request $request ){
        $input = $request->except(['_token']);

        Student_service::create($input);
        return redirect()->route('main');
     }


     public function summer($id){

        $serv = Paid_service::where('id', $id)->first();
        $semesters=Semester::all();
        return view('summer', compact('serv','semesters'));
    }
    public function saveSummer(Request $request ){
        $input = $request->except(['_token']);

        Student_service::create($input);
        return redirect()->route('main');
     }

     public function unread($id){

        $serv = Paid_service::where('id', $id)->first();
        $semesters=Semester::all();
        return view('unread', compact('serv','semesters'));
    }
    public function saveUnread(Request $request ){
        $input = $request->except(['_token']);

        Student_service::create($input);
        return redirect()->route('main');
     }
     public function saveSummerPdf(Request $request)
     {

         $input = [];
         if ($request->hasFile('summer_training_file')) {
             $attach_image = $request->file('summer_training_file');

             $input['summer_training_file'] = $this->UplaodImage($attach_image);
         }
         Student_service::where('paid_service_id',$request->get('paid_service_id'))->where('user_id',$request->get('user_id'))->update($input);
         return redirect()->route('main');
        }
        public function UplaodImage($file_request)
        {
            //  This is Image Info..
            $file = $file_request;
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $path = $file->getRealPath();
            $mime = $file->getMimeType();

            // Rename The Image ..
            $imageName = $name;
            $uploadPath = public_path('uploads/student_services');

            // Move The image..
            $file->move($uploadPath, $imageName);

            return $imageName;
        }


        public function result(){

            $types=Exam_type::all();
            return view('result', compact('types'));
        }
        public function resultVal(Request $request ){
            // dd($request->all());
            $input = $request->except(['_token']);
            $user=User::where('id',$request->get('user_id'))->first();
if($request->get('geloos_no') == $user->geloos_no){
    $result=Exam_result::where('user_id',$request->get('user_id'))->where('exam_type_id',$request->get('exam_type_id'))->first();
   if($result){
    return redirect()->back()->withInput()->with('flash_danger', $result);
   }else{
    return redirect()->back()->withInput()->with('flash_danger', 'يوجد خطأ او لم يتم اظهار النتيجة');
   }

}else{
    return redirect()->back()->withInput()->with('flash_danger', 'رقم الجلوس خاطىء');
}
            // Student_service::create($input);
            // return redirect()->route('main');

         }
    }

