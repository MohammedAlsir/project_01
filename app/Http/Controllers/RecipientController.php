<?php

namespace App\Http\Controllers;

use App\Models\Functional_class;
use App\Models\Recipient;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;


class RecipientController extends Controller
{
    private $uploadPath = "uploads/recipients/";

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
        $recipients = Recipient::orderBy('id', 'desc')->get();
        $id = 1;
        return view('dashboard.recipient.index', compact('recipients', 'id'));
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
        return view('dashboard.recipient.create', compact('functional_class', 'section'));
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
            'photo'        => 'mimes:png,jpeg,jpg,gif,svg',
            'phone'        => 'required',
            'section_id'   => 'required',
            'functional_classe_id'   => 'required',
        ));

        //Insert

        $recipient = new Recipient();

        // Start of Upload Files
        $formFileName = "photo";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(
                1111,
                9999
            ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $fileFinalName);
        }

        if ($fileFinalName != "") {
            $recipient->photo = $fileFinalName;
        }
        $recipient->password = Hash::make('password');
        $recipient->name = $request->name;
        $recipient->phone = $request->phone;
        $recipient->section_id = $request->section_id;
        $recipient->functional_classe_id = $request->functional_classe_id;
        $recipient->save();

        Session::flash('SUCCESS', 'تم اضافة المتدرب بنجاح');

        // redirect
        return redirect()->route('recipient.index');
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
        $recipient = Recipient::find($id);

        $section = Section::all();
        $functional_class = Functional_class::all();
        return view('dashboard.recipient.edit', compact('recipient', 'functional_class', 'section'));
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
        $recipient =  Recipient::find($id);

        $this->validate($request, array(
            'name'        => 'required',
            'photo'        => 'mimes:png,jpeg,jpg,gif,svg',
            'phone'        => 'required', Rule::unique('recipients')->ignore($recipient->id),
            'section_id'   => 'required',
            'functional_classe_id'   => 'required',
        ));

        //Insert


        // Start of Upload Files
        $formFileName = "photo";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(
                1111,
                9999
            ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $fileFinalName);
        }

        if ($fileFinalName != "") {
            $recipient->photo = $fileFinalName;
        }
        $recipient->password = Hash::make('password');
        $recipient->name = $request->name;
        $recipient->phone = $request->phone;
        $recipient->section_id = $request->section_id;
        $recipient->functional_classe_id = $request->functional_classe_id;
        $recipient->save();

        Session::flash('SUCCESS', 'تم تعديل بيانات المتدرب بنجاح');

        // redirect
        return redirect()->route('recipient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipient = Recipient::find($id);
        $recipient->delete();

        Session::flash('SUCCESS', 'تم حذف المتدرب بنجاح');

        // redirect
        return redirect()->route('recipient.index');
    }
}