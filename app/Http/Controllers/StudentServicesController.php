<?php

namespace App\Http\Controllers;

use App\Models\Student_service;
use Illuminate\Http\Request;

class StudentServicesController extends Controller
{
    //
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Student_service $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.Student_service.';

    }


    public function PayBookFees()
    {
        $rows=Student_service::where('paid_service_id',7)->get();
        return view($this->viewName . 'Pay-book-fees', compact(['rows']));

    }
public function PaymentTuitionFees(){
    $rows=Student_service::where('paid_service_id',8)->get();
        return view($this->viewName . 'Payment-tuition-fees', compact(['rows']));
}

public function submitPetition(){
     $rows=Student_service::where('paid_service_id',1)->get();
        return view($this->viewName . 'Payment-tuition-fees', compact(['rows']));
}
public function Literacy(){
    $rows=Student_service::where('paid_service_id',5)->get();
        return view($this->viewName . 'literacy', compact(['rows']));
}
public function summerTraining(){
    $rows=Student_service::where('paid_service_id',4)->get();
    return view($this->viewName . 'summer-training', compact(['rows']));
}
    //
}
