<?php

namespace App\Http\Controllers\Api;
use App\Http\traits\GeneralTraits;
use App\Models\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class categoriesConcategoriesCon extends Controller
{
    use GeneralTraits;

    public function index(){

            $api = api::selection()->get();
            //return response()->json($api); //base response

            return $this->returnData('Done','Names',$api); //advanced response
    }

    public function nameByID(Request $request){
        $api = api::Selection()->find($request->id);
        if(!$api)
           return $this->returnError('1','لا توجد بيانات');

        if($api)
            return $this->returnData('done','names',$api);
    }


    public function changStatus(Request $request){
        $api = api::Selection()->find($request->id);
        if(!$api)
           return $this->returnError('1','لا توجد بيانات');

        if($api)
            return $this->changStatus('');
    }

    public function shangStatus(Request $request){

        api::where('id',$request->id)->update(['status' => $request->status]);
        return $this->returnSuccessMsg('تم التغير بنجاح');
    }

    public function caregories(){

    }
}
