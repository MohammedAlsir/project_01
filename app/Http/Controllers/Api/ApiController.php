<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Recipient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class ApiController extends Controller
{

    public function login(Request $request)
    {
        $data = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        //begin attempt
        if (Auth::guard('admin')->attempt($data)) {
            $token = auth::guard('admin')->user()->createToken('CafeteriaToken')->accessToken;
            return response()->json([
                'token' => $token,
                'admin' => Auth::guard('admin')->user(),
                'error' => false,
                'message_en' => '',
                'message_ar' => ''
            ], 200);
        } else {
            return response()->json([
                'error'     => true,
                'message_en'   => 'Sorry, there is an error in your phone or password',
                'message_ar'   => 'عفوا ، هناك خطأ في رقم الهاتف أو كلمة المرور الخاصة بك',
            ], 200);
        }
    }

    public function courses()
    {
        // Carbon::createFromFormat('d/m/Y', )->format('Y-m-d')

        $courses = Course::where('section_id', Auth::user()->section_id)
            ->where('functional_classe_id', Auth::user()->functional_classe_id)
            ->where('finish_date', '>=', Carbon::now()->isoFormat('YYYY-MM-DD'))
            ->orderBy('id', 'DESC')->get();
        return response()->json([
            'courses' => $courses,
            'error' => false,
            'message_en' => '',
            'message_ar' => '',
            '' => Carbon::now()->isoFormat('YYYY-MM-DD')

        ], 200);
    }

    public function profile(Request $request)
    {
        $recipient = Recipient::find(Auth()->user()->id);

        //Start Edit  User Data

        if (Auth()->user()->id == $recipient->id) {
            $data = $request->validate([

                'phone' => ['min:10', 'max:10', Rule::unique('recipients')->ignore($recipient)],
                'password' => '',
                'name'    => '',
                // 'location' => '',
                // 'photo' => ''

            ]);
            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            }

            $recipient->update($data);
            return response()->json([
                'user' => $recipient,
                'error' => false,
                'message_en' => 'succses edit user data',
                'message_ar' => 'تم تعديل بيانات  المستخدم بنجاح'
            ], 200);
        } else {
            return response()->json([
                'error'     => true,
                'message_en'   => 'Unauthorised ,Sorry, you do not have access to this page ',
                'message_ar'   => 'عفوا ، ليس لديك صلاحيات الوصول إلى هذه الصفحة',
            ], 200);
        }
        //End Edit  User Data
    }
}