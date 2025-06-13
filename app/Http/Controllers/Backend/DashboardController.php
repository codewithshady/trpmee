<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\PackageDestinationDetails;
use App\Models\PakageDestination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalCountry = Destination::count();
        $totalPackageDestinations = PakageDestination::count();
        $totalPackageDetinationDetails = PackageDestinationDetails::count();


        return view('backend.dashboard.view', compact(
            'totalCountry',
            'totalPackageDestinations',
            'totalPackageDetinationDetails'
        ));
    }
}
