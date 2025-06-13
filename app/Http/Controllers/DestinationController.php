<?php

// app/Http/Controllers/DestinationController.php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::where('is_active', true)->latest()->paginate(6);
        return view('frontend.services.destination', compact('destinations'));
    }


    public function create()
    {
        return view('backend.destinations.create');
    }

    public function list()
    {
        $destinations = Destination::latest()->paginate(10);
        return view('backend.destinations.list', compact('destinations'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        $data['image'] = $request->file('image')->store('destinations', 'public');
        Destination::create($data);

        return redirect()->route('destinations.index')->with('success', 'Destination added.');
    }

    public function edit(Destination $destination)
    {
        return view('backend.destinations.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('destinations', 'public');
        }

        $destination->update($data);
        return redirect()->route('destinations.index')->with('success', 'Destination updated.');
    }

    public function toggleStatus(Destination $destination)
    {
        $destination->update(['is_active' => !$destination->is_active]);
        return back();
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();
        return back()->with('success', 'Destination deleted.');
    }
}
