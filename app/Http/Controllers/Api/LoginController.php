<?php

namespace App\Http\Controllers\Api;

use App\Models\Api\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     *
     */
    public function login(LoginRequest $request)
    {
        try {
            $data = $request->all();

            $login = Auth::attempt(['username' => $data['username'], 'password' => $data['password']]);

            if (!$login)
                throw ValidationException::withMessages([
                    'failed_login' => 'Invalid Username or Password'
                ]);

            $user = User::find(Auth::id());


            $token = $user->createToken('LoginToken')->accessToken;
            $user->token = $token;

        } catch (ValidationException $e) {
            return apiResponse(7, null, $e->getMessage());
        }

        return apiResponse(0, $user, 'Logged In Successfully!');
    }

    /**
     *
     */
    public function register(RegisterRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
