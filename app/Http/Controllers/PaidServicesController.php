<?php

namespace App\Http\Controllers;

use App\Models\Paid_service;
use App\Models\Semester;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use File;

class PaidServicesController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Paid_service $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.paid-services.';
        $this->routeName = 'paid-services.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Paid_service::all();
        return view($this->viewName . 'index', compact(['rows']));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $semesters=Semester::all();
        return view($this->viewName . 'add', compact(['semesters']));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token','image']);
        if ($request->hasFile('image')) {
            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);
        }
        Paid_service::create($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row=Paid_service::where('id', $id)->first();
        return view($this->viewName . 'edit', compact(['row']));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except(['_token','image']);
        if ($request->hasFile('image')) {
            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);
        }
        Paid_service::findOrFail($id)->update($input);
        // $specialzation->update($input);

        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Paid_service::where('id', $id)->first();
        // Delete File ..
        $file = $row->banner;
        $file_name = public_path('uploads/paid_services/' . $file);
        try {
            File::delete($file_name);


           $row->delete();
           return redirect()->back()->with('flash_del', 'Successfully Delete!');

       } catch (QueryException $q) {
           // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
           return redirect()->back()->withInput()->with('flash_danger', 'Can’t delete This Row
           Because it related with another table');
       }
   }


    /* uplaud image
      */
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
         $uploadPath = public_path('uploads/paid-services');

         // Move The image..
         $file->move($uploadPath, $imageName);

         return $imageName;
     }
   }
