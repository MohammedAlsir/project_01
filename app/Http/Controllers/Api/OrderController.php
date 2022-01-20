<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::with('course')->where('recipient_id', Auth::user()->id)->orderBy('id', 'DESC')->get();



        return response()->json([
            'order' => $order,
            'error' => false,
            'message_en' => '',
            'message_ar' => ''
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'course_id' => 'required',
            // 'recipient_id' => 'required'
        ]);


        $data['recipient_id'] = Auth::user()->id;
        $order = Order::create($data);
        return response()->json([
            'order' => $order,
            'error' => false,
            'message_en' => '',
            'message_ar' => 'تم  الاضافة بنجاح'
        ], 200);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'error' => false,
                'message_en' => '',
                'message_ar' => 'هذه الدورة التدريبية غير موجودة'
            ], 200);
        }
        if ($order->recipient_id == Auth::user()->id) {
            $order->delete();

            return response()->json([
                'order' => $order,
                'error' => false,
                'message_en' => '',
                'message_ar' => 'تم  حذف الدورة التدريبية  بنجاح'
            ], 200);
        } else {
            return response()->json([
                // 'order' => $order,
                'error' => false,
                'message_en' => '',
                'message_ar' => 'ليس لديك صلاحيات '
            ], 200);
        }
    }
}