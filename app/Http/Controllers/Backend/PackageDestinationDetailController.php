<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PackageDestinationDetails;
use App\Models\PakageDestination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageDestinationDetailController extends Controller
{
    public function index()
    {
        $details = PackageDestinationDetails::with('package')->latest()->get();
        return view('backend.packagedestinationdetails.list', compact('details'));
    }

    public function create()
    {
        $packages = PakageDestination::pluck('title', 'id');
        return view('backend.packagedestinationdetails.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pakage_destination_id' => 'required|exists:pakage_destinations,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'country' => 'required|string',
            'visa_required' => 'boolean',
            'price_per_person' => 'required|numeric',
            'language' => 'required|string',
            'area' => 'nullable|string',
            'map_embed' => 'nullable|string',
            'is_featured' => 'boolean',
            'main_image' => 'nullable|image',
            'gallery_images.*' => 'image',
        ]);

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('main_images', 'public');
        }

        $gallery = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                $gallery[] = $file->store('gallery_images', 'public');
            }
        }

        $data['gallery_images'] = $gallery;

        PackageDestinationDetails::create($data);

        return redirect()->route('package-details.index')->with('success', 'Detail created.');
    }

    public function edit(PackageDestinationDetails $detail)
    {
        $packages = PakageDestination::pluck('title', 'id');
        return view('backend.packagedestinationdetails.edit', compact('detail', 'packages'));
    }

    public function update(Request $request, PackageDestinationDetails $detail)
    {
        $data = $request->validate([
            'pakage_destination_id' => 'required|exists:pakage_destinations,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'country' => 'required|string',
            'visa_required' => 'boolean',
            'price_per_person' => 'required|numeric',
            'language' => 'required|string',
            'area' => 'nullable|string',
            'map_embed' => 'nullable|string',
            'is_featured' => 'boolean',
            'main_image' => 'nullable|image',
            'gallery_images.*' => 'image',
        ]);

        if ($request->hasFile('main_image')) {
            if ($detail->main_image) Storage::disk('public')->delete($detail->main_image);
            $data['main_image'] = $request->file('main_image')->store('main_images', 'public');
        }

        if ($request->hasFile('gallery_images')) {
            foreach ($detail->gallery_images ?? [] as $old) {
                Storage::disk('public')->delete($old);
            }

            $gallery = [];
            foreach ($request->file('gallery_images') as $file) {
                $gallery[] = $file->store('gallery_images', 'public');
            }
            $data['gallery_images'] = $gallery;
        }

        $detail->update($data);

        return redirect()->route('package-details.index')->with('success', 'Detail updated.');
    }

    public function destroy(PackageDestinationDetails $detail)
    {
        Storage::disk('public')->delete($detail->main_image);
        foreach ($detail->gallery_images ?? [] as $img) {
            Storage::disk('public')->delete($img);
        }
        $detail->delete();
        return back()->with('success', 'Detail deleted.');
    }
}
