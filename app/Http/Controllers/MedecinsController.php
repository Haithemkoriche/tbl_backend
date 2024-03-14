<?php

namespace App\Http\Controllers;

use App\Models\medecins;
use Illuminate\Http\Request;

class MedecinsController extends Controller
{

    use ApiResponseTrait;

    public function get(){
        $medecins = medecins::get();
        return $this->apiResponse($medecins,'ok',200);
    }
    public function getById($id){
        $medecins = medecins::find($id);
        if($medecins){
            return $this->apiResponse($medecins,'ok',200);
        }
        return $this->apiResponse(null,'medecin not found',404);
    }
    public function delete($id){
        $medecins = medecins::find($id);
        if($medecins){
            $medecins->delete();
            return $this->apiResponse(null,'medecin deleted',200);
        }
        return $this->apiResponse(null,'medecin not found',404);
    }

    public function create(Request $request){
        $medecins = medecins::create($request->all());
        return $this->apiResponse($medecins,'medecin created',201);
    }

    public function update(Request $request,$id){
        $medecins = medecins::find($id);
        if($medecins){
            $medecins->update($request->all());
            return $this->apiResponse($medecins,'medecin updated',200);
        }
        return $this->apiResponse(null,'medecin not found',404);
    }
    


}
