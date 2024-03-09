<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    // Get User
    public function user()
    {
        return User::all();
    }

    // User Registration
    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hashing the password
        $registered = $user->save();

        if ($registered) {
            return response()->json(["Result" => "New user has been saved"], 201);
        } else {
            return response()->json(["Result" => "Registration failed"], 500);
        }
    }

    // User Update Credentials
    public function update(Request $request, $id)
{
    $user = User::find($id);

    if (!$user) {
        return response()->json(["Result" => "User not found"], Response::HTTP_NOT_FOUND);
    }

    // Validate request parameters
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    // Optionally, hash the password before saving it
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];

    $update = $user->save();

    if ($update) {
        return response()->json(["Result" => "Account has been updated"], Response::HTTP_OK);
    } else {
        // If update fails, consider it as an internal error. Though in practice, save() rarely fails without throwing an exception.
        return response()->json(["Result" => "Account has not been updated"], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
    // User Delete
    public function delete($id)
{
    $user = User::find($id);

    if (!$user) {
        return response()->json(["result" => "User not found"], Response::HTTP_NOT_FOUND);
    }

    $accountDeleted = $user->delete();

    if ($accountDeleted) {
        return response()->json(["result" => "Data has been deleted"], Response::HTTP_OK);
    } else {
        // This else condition might be unnecessary because if delete() fails, it typically throws an exception.
        return response()->json(["result" => "Data has not been deleted"], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}

    // User Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken($request->email)->plainTextToken;
            return response([
                'token' => $token,
                'message' => 'Login Success',
                'status' => 'success'
            ], 200);
        }
        return response([
            'message' => 'The Provided Credentials are incorrect',
            'status' => 'failed'
        ], 401);
    }

    // User Logout
    public function logout()
{
    // Check if there's an authenticated user
    if (auth()->check()) {
        // Get the authenticated user
        $user = auth()->user();

        // Revoke all tokens for the user
        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });

        // Return a successful logout response
        return response([
            'message' => 'Logout successful',
            'status' => 'success'
        ], 200);
    }

    // Return an error response if no user is authenticated
    return response([
        'message' => 'No user is currently logged in',
        'status' => 'error'
    ], 401); // 401 Unauthorized
}


    public function logged_user()
    {
        $loggeduser = auth()->user();
        return response([
            'user' => $loggeduser,
            'message' => 'Logged User Data',
            'status' => 'success'
        ], 200);
    }

    protected function authenticated(Request $request, $user): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        $loggeduser = auth()->user();
        $loggeduser->password = Hash::make($request->password);
        $loggeduser->save();
        return response([
            'message' => 'Password Changed Successfully',
            'status' => 'success'
        ], 200);
    }
}
