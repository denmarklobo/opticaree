<?php

namespace App\Http\Controllers;

use App\Models\Prescribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PrescribeController extends Controller
{
    public function index()
    {
        $prescribes = Prescribe::all();
        return response()->json($prescribes, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Add validation rules here
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $prescribe = Prescribe::create($request->all());

        return response()->json($prescribe, 201);
    }

    public function show(Prescribe $prescribe)
    {
        return response()->json($prescribe, 200);
    }

    public function update(Request $request, Prescribe $prescribe)
    {
        $validator = Validator::make($request->all(), [
            // Add validation rules here
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $prescribe->update($request->all());

        return response()->json($prescribe, 200);
    }

    public function destroy(Prescribe $prescribe)
    {
        $prescribe->delete();

        return response()->json(null, 204);
    }
}

