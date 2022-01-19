<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
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
        $sections = Section::orderBy('id', 'desc')->get();
        $id = 1;
        return view('dashboard.sections.index', compact('sections', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sections.create');
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

        $section = new Section();

        $section->name = $request->name;

        $section->save();

        Session::flash('SUCCESS', 'تم اضافة القسم بنجاح');

        // redirect
        return redirect()->route('sections.index');
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
        $section = Section::find($id);
        return view('dashboard.sections.edit', compact('section'));
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

        $section = Section::find($id);

        $section->name = $request->name;

        $section->save();

        Session::flash('SUCCESS', 'تم تعديل بيانات القسم بنجاح');

        // redirect
        return redirect()->route('sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->delete();

        Session::flash('SUCCESS', 'تم حذف القسم بنجاح');

        // redirect
        return redirect()->route('sections.index');
    }
}
