<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ListJobs;

class JobListingApiController extends Controller
{
    public function index()
    {
        $jobs = ListJobs::all();
        return response()->json([
            'status' => 'success',
            'message' => 'API Gateway online. Records retrieved successfully.',
            'count' => $jobs->count(),
            'data' => $jobs
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'         => 'required|string|max:255',
            'company'       => 'required|string|max:100',
            'location'      => 'required|string',
            'salary'        => 'required|numeric|min:0',
            'contact_email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'errors' => $validator->errors()
            ], 422);
        }

        $job = ListJobs::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Data validated and saved to database successfully!',
            'data' => $job
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $job = ListJobs::find($id);
        if (!$job) {
            return response()->json(['status' => 'error', 'message' => 'Record not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title'         => 'required|string|max:255',
            'company'       => 'required|string|max:100',
            'location'      => 'required|string',
            'salary'        => 'required|numeric|min:0',
            'contact_email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'errors' => $validator->errors()
            ], 422);
        }

        $job->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Record completely updated inside database!',
            'data' => $job
        ], 200);
    }

    public function updatePartial(Request $request, $id)
    {
        $job = ListJobs::find($id);
        if (!$job) {
            return response()->json(['status' => 'error', 'message' => 'Record not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title'         => 'sometimes|required|string|max:255',
            'company'       => 'sometimes|required|string|max:100',
            'location'      => 'sometimes|required|string',
            'salary'        => 'sometimes|required|numeric|min:0',
            'contact_email' => 'sometimes|required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'errors' => $validator->errors()
            ], 422);
        }

        $job->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Record partially updated inside database!',
            'data' => $job
        ], 200);
    }

    public function destroy($id)
    {
        $job = ListJobs::find($id);
        if (!$job) {
            return response()->json(['status' => 'error', 'message' => 'Record not found'], 404);
        }

        $job->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Record ID: {$id} has been permanently deleted from the database."
        ], 200);
    }
}