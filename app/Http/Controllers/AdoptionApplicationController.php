<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\AdoptionApplication;
use App\Http\Requests\AdoptionApplicationRequest;
use Auth;
use Notification;
use App\Notifications\ApplicationReceived;
use App\Notifications\ApplicationResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdoptionApplicationController extends Controller
{

    public function showApplicationForm($adoptionId)
    {
        $adoption = Adoption::findOrFail($adoptionId); // Find the adoption post or fail with 404

        // Return the view with the adoption data
        return view('dashboard.adoption_application', compact('adoption'));
    }

    public function submitApplication(Request $request, $adoptionId)
    {
        Log::debug("Adoption application submission received", $request->all());
        $request->validate([
            'fullname' => 'required|string',
            'tel' => 'required|string',
            'address' => 'required|string',
            'exp' => 'required|string',
        ]);

        $application = new AdoptionApplication();
        $application->adoption_id = $adoptionId;
        $application->user_id = auth()->id();
        $application->fullname = $request->fullname;
        $application->tel = $request->tel;
        $application->address = $request->address;
        $application->exp = $request->exp;
        $application->save();

        //$adoption->user->notify(new ApplicationReceived($application));

        return redirect()->back()->with('success', 'Application submiited successfully!');
    }

    public function acceptApplication($applicationId)
    {
        $application = AdoptionApplication::findOrFail($applicationId);

        $application->status = 'accepted';
        $application->save();

        $application->adoption->delete();


        return redirect()->back()->with('success', 'Application accepted successfully!');

    }

    public function rejectApplication($applicationId)
    {
        $application = AdoptionApplication::findOrFail($applicationId);


        $application->status = 'rejected';
        $application->save();

        return redirect()->back()->with('success', 'Application rejected successfully!');

    }
}
