<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Auth;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Campaign::where('user_id' ,Auth::user()->id)->get();
        return view('users.calender', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campaign = new Campaign();
        return view('users.campaigns.create', compact('campaign'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'campaign_name' => 'required|string|max:255',
            'campaign_time' => 'required|string|max:255',
            'campaign_type' => 'required|string|max:255',
            'social_type' => 'required|string|max:255',
            'fil' => 'nullable|string',
            'campaign' => 'required|string|max:255',
        ]);

        Campaign::create($request->all());
        return back()
            ->with('success', 'Campaign has been created successfully.');
        // ->with('image', $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $campaign = Campaign::find($id);
        return view('users.campaigns.create', compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campaign = Campaign::find($id);
        $campaign->delete();
        return redirect()->back()->with('success', 'Campaign deleted successfully!');
    }
}
