<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.students.';
        $this->routeName = 'students.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=User::where('type',0)->get();
        return view($this->viewName . 'index', compact(['rows']));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels=Level::get();
        $departments=Department::get();
        return view($this->viewName . 'add', compact(['levels','departments']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'mobile' => ['required', 'min:11', 'max:11', 'regex:/(01)[0-2,5]{1}[0-9]{8}/'],
            'email' => ['required', 'unique:users'],
            'name' => 'required',
            //    'password' => ['required', 'same:confirm-password'],

        ], [

            'mobile.required' => 'phone_required',

            'name.required' => 'name_required',

            'email.required' => 'email_required',
            // 'password.required' =>'password_required',
            'email.unique' => 'email.unique',
            // 'password.same' =>'password_same',

        ]);
        if ($validator->fails()) {

            return redirect()->back()->withInput()
                ->withErrors($validator->messages());

        }
        DB::beginTransaction();
        try {
            // Disable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'type' => 0,
                'password' => Hash::make('12345678'),
                'mobile' => $request->mobile,
                'nationality_id' => $request->nationality_id,
                'geloos_no' => $request->geloos_no,
                'level_id' => $request->level_id ,
                'department_id' => $request->department_id  ,
            ]);



            DB::commit();
            // Enable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            return redirect()->route($this->routeName.'index')->with('flash_del', 'Successfully Saved! - Your Password is:12345678 ');

        } catch (\Throwable $e) {
            // throw $th;
            DB::rollback();
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // return redirect()->back()->withInput()->withErrors('حدث خطأ فى ادخال البيانات قم بمراجعتها مرة اخرى');
        }
    }

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
        $row = User::where('id',$id)->first();
        $levels=Level::get();
        $departments=Department::get();
        return view($this->viewName . 'edit', compact(['row','levels','departments']));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = User::where('id',$id)->first();
        $validator = Validator::make($request->all(), [

            'mobile' => ['required', 'min:11', 'max:11', 'regex:/(01)[0-2,5]{1}[0-9]{8}/'],
            'email' => 'required|unique:users,email,' . $student->id,
            'name' => 'required',
            //    'password' => ['required', 'same:confirm-password'],

        ], [

            'mobile.required' => 'phone_required',

            'name.required' => 'name_required',

            'email.required' => 'email_required',
            // 'password.required' =>'password_required',
            'email.unique' => 'email.unique',
            // 'password.same' =>'password_same',

        ]);
        if ($validator->fails()) {

            return redirect()->back()->withInput()
                ->withErrors($validator->messages());

        }
        DB::beginTransaction();
        try {
            // Disable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            //update user

            $input = [
                'name' => $request->get('name'),
             'email'=>$request->get('email'),
             'mobile' => $request->mobile,
             'nationality_id' => $request->nationality_id,
             'geloos_no' => $request->geloos_no,
             'level_id' => $request->level_id ,
             'department_id' => $request->department_id  ,
            ];


            $user = User::find($id);

            $user->update($input);





            DB::commit();
            // Enable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            return redirect()->route($this->routeName.'index')->with('flash_del', 'Successfully Saved!');

        } catch (\Throwable $e) {
            // throw $th;
            DB::rollback();
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // return redirect()->back()->withInput()->withErrors('حدث خطأ فى ادخال البيانات قم بمراجعتها مرة اخرى');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        // Delete File ..

        try {

            $user->delete();

           return redirect()->back()->with('flash_del', 'Successfully Delete!');

       } catch (QueryException $q) {
           return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
        //    return redirect()->back()->withInput()->with('flash_danger', 'Can’t delete This Row
        //    Because it related with another table');
       }
    }
}
