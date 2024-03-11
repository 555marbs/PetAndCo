<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;

// Assume namespace and imports are defined here
class AdoptionController extends Controller
{


    public function get()
    {
        // Suitable for API use as it returns JSON
        return response()->json(Adoption::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'contact' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $validatedData['image'] = '/'.$imageName;
        } else {
            $validatedData['image'] = null;
        }

        if (auth()->check()) {
            $validatedData['user_id'] = auth()->user()->id;
            $adoption = Adoption::create($validatedData);
            return response()->json(['success' => 'Adoption created successfully!', 'data' => $adoption], 201);
        } else {
            return response()->json(['error' => 'Please login to create an adoption.'], 401);
        }
    }

    public function show($id)
    {
        $adoption = Adoption::findOrFail($id);
        return response()->json($adoption);
    }

    public function update(Request $request, $id)
    {
        $adoptions = Adoption::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('image'), $imageName);
            $validatedData['image'] = '/'.$imageName;
        }

        $adoptions->update($validatedData);

        return response()->json($adoptions);
    }

    public function destroy($id)
    {
        $adoptions = Adoption::findOrFail($id);
        $adoptions->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }

    public function viewApplications($adoptionId)
    {
        // This method is tricky for API since it's returning a view. Consider returning JSON data or restructuring.
        $adoption = Adoption::with('applications.user')->findOrFail($adoptionId);

        if (auth()->user()->id !== $adoption->user_id) {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        // Assuming you adapt your frontend, return data instead of a view
        return response()->json(['adoption' => $adoption]);
    }
}

