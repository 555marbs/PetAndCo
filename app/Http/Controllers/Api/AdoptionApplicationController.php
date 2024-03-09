<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\AdoptionApplication;
use App\Http\Requests\AdoptionApplicationRequest;
use Illuminate\Http\Request;

class AdoptionApplicationController extends Controller
{
    public function showApplicationForm($adoptionId)
    {
        $adoption = Adoption::find($adoptionId);

        if (!$adoption) {
            return response()->json(['success' => false, 'message' => 'Adoption not found'], 404);
        }

        return response()->json(['success' => true, 'data' => $adoption], 200);
    }

    public function submitApplication(Request $request, $adoptionId)
    {
        $validated = $request->validate([
            'fullname' => 'required|string',
            'tel' => 'required|string',
            'address' => 'required|string',
            'exp' => 'required|string',
        ]);

        $application = new AdoptionApplication();
        $application->adoption_id = $adoptionId;
        $application->user_id = auth()->id();
        $application->fullname = $validated['fullname'];
        $application->tel = $validated['tel'];
        $application->address = $validated['address'];
        $application->exp = $validated['exp'];
        $application->save();

        return response()->json(['success' => true, 'message' => 'Application submitted successfully!'], 201);
    }

    public function acceptApplication($applicationId)
    {
        $application = AdoptionApplication::find($applicationId);

        if (!$application) {
            return response()->json(['success' => false, 'message' => 'Application not found'], 404);
        }

        $application->status = 'accepted';
        $application->save();
        $application->adoption->delete();

        return response()->json(['success' => true, 'message' => 'Application accepted successfully!'], 200);
    }

    public function rejectApplication($applicationId)
    {
        $application = AdoptionApplication::find($applicationId);

        if (!$application) {
            return response()->json(['success' => false, 'message' => 'Application not found'], 404);
        }

        $application->delete();

        return response()->json(['success' => true, 'message' => 'Application rejected successfully!'], 200);
    }
}
