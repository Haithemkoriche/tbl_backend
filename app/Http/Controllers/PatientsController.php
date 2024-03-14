<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    use ApiResponseTrait;

    public function get(){
        $patients = Patients::get();
        return $this->apiResponse($patients,'ok',200);
    }
    public function getById($id){
        $patients = patients::find($id);
        if($patients){
            return $this->apiResponse($patients,'ok',200);
        }
        return $this->apiResponse(null,'patient not found',404);
    }
    public function delete($id){
        $patients = patients::find($id);
        if($patients){
            $patients->delete();
            return $this->apiResponse(null,'patient deleted',200);
        }
        return $this->apiResponse(null,'patient not found',404);
    }

    public function create(Request $request){
        $patients = patients::create($request->all());
        return $this->apiResponse($patients,'patient created',201);
    }

    public function update(Request $request,$id){
        $patients = patients::find($id);
        if($patients){
            $patients->update($request->all());
            return $this->apiResponse($patients,'patient updated',200);
        }
        return $this->apiResponse(null,'patient not found',404);
    }
}
