<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\PakageDestination;
use Illuminate\Http\Request;

class PakageDestinationController extends Controller
{
    public function index()
    {
        $packages = PakageDestination::with('destination')->latest()->get();
        return view('backend.packagedestination.list', compact('packages'));
    }

    public function create()
    {
        $destinations = Destination::pluck('title', 'id');
        return view('backend.packagedestination.create', compact('destinations'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'duration' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'is_featured' => 'boolean',
            'discount' => 'nullable|integer',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        $data['image'] = $request->file('image')->store('pakage_destinations', 'public');
        PakageDestination::create($data);

        return redirect()->route('pakagedestinations.index')->with('success', 'Package created.');
    }

    public function edit(PakageDestination $pakageDestination)
    {
        $destinations = Destination::pluck('title', 'id');
        return view('backend.packagedestination.edit', compact('pakageDestination', 'destinations'));
    }

    public function update(Request $request, PakageDestination $pakageDestination)
    {
        $data = $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'duration' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'is_featured' => 'boolean',
            'discount' => 'nullable|integer',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('pakage_destinations', 'public');
        }

        $pakageDestination->update($data);
        return redirect()->route('pakagedestinations.index')->with('success', 'Package updated.');
    }

    public function destroy(PakageDestination $pakageDestination)
    {
        $pakageDestination->delete();
        return back()->with('success', 'Package deleted.');
    }
}
