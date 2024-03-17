<?php

namespace App\Http\Controllers;

use App\Models\medecins;
use Illuminate\Http\Request;

class MedecinsController extends Controller
{

    use ApiResponseTrait;
    public function get(Request $request)
    {
        $query = Medecins::query();
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('FULL NAME', 'like', "%{$search}%")
                ->orWhere('specialities_full', 'like', "%{$search}%");
            // Add more conditions as necessary
        }
        $query->orderByRaw("CASE WHEN annu = 'non' THEN 1 ELSE 2 END");

        $medecins = $query->paginate(50);
        return $this->apiResponse($medecins, 'ok', 200);
        // $medecins = Medecins::paginate(50);
        // return $this->apiResponse($medecins, 'ok', 200);
    }

    public function getById($id)
    {
        $field = 'unique_id'; 
        $medecins = medecins::where($field, $id)->first();
        if ($medecins) {
            return $this->apiResponse($medecins, 'ok', 200);
        }
        return $this->apiResponse(null, 'medecin not found', 404);
    }
    // public function delete($id)
    // {
    //     $medecins = medecins::find($id);
    //     if ($medecins) {
    //         $medecins->delete();
    //         return $this->apiResponse(null, 'medecin deleted', 200);
    //     }
    //     return $this->apiResponse(null, 'medecin not found', 404);
    // }
    public function delete($id)
    {
        // Assuming the field and value are sent in the request. For example, using 'field' and 'value' keys.
        $field = 'unique_id'; // The field name to delete by, e.g., 'email' or 'license_number'
        $medecin = medecins::where($field, $id);

        if ($medecin) {
            $medecin->delete();
            return $this->apiResponse(null, 'medecin deleted', 200);
        }

        return $this->apiResponse(null, 'medecin not found', 404);
    }


    public function create(Request $request)
    {
        $medecins = medecins::create($request->all());
        return $this->apiResponse($medecins, 'medecin created', 201);
    }

    public function update(Request $request, $id)
    {
        $field = 'unique_id'; 
        $medecins = medecins::where($field, $id);
        // $medecins = medecins::find($id);
        if ($medecins) {
            $medecins->update($request->all());
            return $this->apiResponse($medecins, 'medecin updated', 200);
        }
        return $this->apiResponse(null, 'medecin not found', 404);
    }
}
