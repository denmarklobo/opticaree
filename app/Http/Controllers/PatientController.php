<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Add validation rules here
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $request['password'] = Hash::make($request['password']);

        $patient = Patient::create($request->all());

        return response()->json($patient, 201);
    }

    public function show(Patient $patient)
    {
        return response()->json($patient, 200);
    }

    public function update(Request $request, Patient $patient)
    {
        $validator = Validator::make($request->all(), [
            // Add validation rules here
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $request['password'] = Hash::make($request['password']);

        $patient->update($request->all());

        return response()->json($patient, 200);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return response()->json(null, 204);
    }
}

