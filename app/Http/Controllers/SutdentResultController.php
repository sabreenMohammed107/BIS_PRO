<?php

namespace App\Http\Controllers;

use App\Models\Exam_result;
use App\Models\Exam_type;
use App\Models\Level;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SutdentResultController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Exam_result $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.student-result.';
        $this->routeName = 'student-result.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Exam_result::get();
        return view($this->viewName . 'index', compact(['rows']));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students=User::where('type',0)->get();
        $levels=Level::get();
        $semesters=Semester::get();
        $types=Exam_type::get();

        return view($this->viewName . 'add', compact(['students','levels','semesters',
    'types']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token']);

        Exam_result::create($input);
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
        $row=Exam_result::where('id', $id)->first();
        $students=User::where('type',0)->get();
        $levels=Level::get();
        $semesters=Semester::get();
        $types=Exam_type::get();

        return view($this->viewName . 'edit', compact(['row',
    'students','levels','semesters','types']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except(['_token']);

        Exam_result::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Exam_result::where('id', $id)->first();
        // Delete File ..

        try {


           $row->delete();
           return redirect()->back()->with('flash_del', 'Successfully Delete!');

       } catch (QueryException $q) {
           return redirect()->back()->withInput()->with('flash_danger', 'Can’t delete This Row
           Because it related with another table');
       }
    }
}
