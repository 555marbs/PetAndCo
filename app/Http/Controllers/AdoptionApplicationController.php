<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\AdoptionApplication;
use Illuminate\Http\Request;

class AdoptionApplicationController extends Controller
{

    public function showApplicationForm($adoptionId)
    {
        $adoption = Adoption::findOrFail($adoptionId);
        return view('dashboard.adoption_application', compact('adoption'));
    }

    public function submitApplication(Request $request, $adoptionId)
    {
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
        return redirect('/adoptions');
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
        $application->delete();
        return redirect()->back()->with('success', 'Application rejected successfully!');
    }
}
