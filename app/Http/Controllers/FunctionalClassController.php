<?php

namespace App\Http\Controllers;

use App\Models\Functional_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FunctionalClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $functional_class = Functional_class::orderBy('id', 'desc')->get();
        $id = 1;
        return view('dashboard.functional_class.index', compact('functional_class', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.functional_class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'        => 'required',
        ));

        //Insert

        $functional_class = new Functional_class();

        $functional_class->name = $request->name;

        $functional_class->save();

        Session::flash('SUCCESS', 'تم اضافة الدرجة الوظيفية بنجاح');

        // redirect
        return redirect()->route('functional_class.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $functional_class = Functional_class::find($id);
        return view('dashboard.functional_class.edit', compact('functional_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name'        => 'required',
        ));

        //Insert

        $functional_class = Functional_class::find($id);

        $functional_class->name = $request->name;

        $functional_class->save();

        Session::flash('SUCCESS', 'تم تعديل بيانات القسم بنجاح');

        // redirect
        return redirect()->route('functional_class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $functional_class = Functional_class::find($id);
        $functional_class->delete();

        Session::flash('SUCCESS', 'تم حذف الدرجة الوظيفية بنجاح');

        // redirect
        return redirect()->route('functional_class.index');
    }
}
