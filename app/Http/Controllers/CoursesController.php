<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Functional_class;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CoursesController extends Controller
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
        $courses = Course::orderBy('id', 'desc')->get();
        $id = 1;
        return view('dashboard.courses.index', compact('courses', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section = Section::all();
        $functional_class = Functional_class::all();
        return view('dashboard.courses.create', compact('section', 'functional_class'));
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
            'start_date'        => 'required',
            'finish_date'        => 'required',
            'type'        => 'required',
            'speaker_name'        => 'required',
            'content'        => 'required',
            'number'        => 'required',
            'section_id'        => 'required',
            'functional_classe_id'        => 'required',
        ));

        //Insert

        $course = new Course();


        $course->name = $request->name;
        $course->start_date = $request->start_date;
        $course->finish_date = $request->finish_date;
        $course->type = $request->type;
        $course->speaker_name = $request->speaker_name;
        $course->content = $request->content;
        $course->number = $request->number;
        $course->section_id = $request->section_id;
        $course->functional_classe_id = $request->functional_classe_id;
        $course->save();

        Session::flash('SUCCESS', 'تم اضافة الدورة التدريبية بنجاح');

        // redirect
        return redirect()->route('courses.index');
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
        $course = Course::find($id);

        $section = Section::all();
        $functional_class = Functional_class::all();
        return view('dashboard.courses.edit', compact('course', 'section', 'functional_class'));
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
            'start_date'        => 'required',
            'finish_date'        => 'required',
            'type'        => 'required',
            'speaker_name'        => 'required',
            'content'        => 'required',
            'number'        => 'required',
            'section_id'        => 'required',
            'functional_classe_id'        => 'required',
        ));

        //Insert

        $course = Course::find($id);


        $course->name = $request->name;
        $course->start_date = $request->start_date;
        $course->finish_date = $request->finish_date;
        $course->type = $request->type;
        $course->speaker_name = $request->speaker_name;
        $course->content = $request->content;
        $course->number = $request->number;
        $course->section_id = $request->section_id;
        $course->functional_classe_id = $request->functional_classe_id;
        $course->save();

        Session::flash('SUCCESS', 'تم تعديل بيانات الدورة التدريبية بنجاح');

        // redirect
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        Session::flash('SUCCESS', 'تم حذف الدورة التدريبية بنجاح');

        // redirect
        return redirect()->route('courses.index');
    }
}