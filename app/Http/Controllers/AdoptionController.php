<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Mail\AdoptionRequestReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function index()
    {
        $adoptions = Adoption::all();
        return view('dashboard.adoption', compact('adoptions'));
    }

    public function get()
    {
        return Adoption::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'contact' => 'required|string',
            'image' =>'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = '/'.$imageName;
        }

        return Adoption::create($validatedData);
    }

    public function show($id)
    {
        return Adoption::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $adoptions = Adoption::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'content' => 'required|string',
            'image' =>'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = '/'.$imageName;
        }

        $adoptions->update($validatedData);

        return $adoptions;
    }

    public function destroy($id)
    {
        $adoptions = Adoption::findOrFail($id);
        $adoptions->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }

    public function adopt($id)
    {
        $adoption = Adoption::findOrFail($id);

        $adoption->status = 'Pending';
        $adoption->save();

        return response()->json([
            'success' => true,
            'message' => "Your Adoption request has been received."
        ]);
    }


}
