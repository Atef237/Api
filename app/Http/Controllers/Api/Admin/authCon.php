<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\traits\GeneralTraits;
use App\Models\Admin;
use Illuminate\Http\Request;
use Validator;
use Auth;

class authCon extends Controller

{
    use GeneralTraits;
    public function login(Request $request)
    {

        try {
            $rules = [
                "email" => "required|exists:admin.email",
                "password" => "required"

            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            //login

            $credentials = $request -> only(['email','password']) ;

            $token =  Auth::guard('admin-api') -> attempt($credentials);

            if(!$token)
                return $this->returnError('E0','بيانات الدخول غير صحيحة');

            $admin = Auth::guard('admin-api') -> user();
            $admin -> api_token = $token;
            //return token
            return $this -> returnData('admin' , $admin);

        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }


        //login

        //return token
    }
}
