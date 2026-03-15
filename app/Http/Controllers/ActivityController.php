<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();

        return response()->json($activities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:150',
            'description' => 'required|string',
        ]);

        $activities = Activity::create($request->all());

        return response()->json($activities, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $activities = Activity::find($id);

        if (!$activities) {
            return response()->json(['message' => 'Nincs ilyen tevékenység!'], 404);
        }

        return response()->json($activities);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $activities = Activity::find($id);

        if (!$activities) {
            return response()->json(['message' => 'Nincs ilyen tevékenység!'], 404);
        }

        $request->validate([
            'name' => 'required|min:3|max:150',
            'description' => 'required|string',
        ]);

        $activities->update($request->all());

        return response()->json($activities);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
