<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif'],
            'phone' => ['required', 'string', 'max:10'],
            'location' => ['required', 'string'],
            'job_title' => ['required', 'string'],
        ]);
        //dd($data);
        $avatarpath = null;
        if ($request->hasFile('image')) {
            $avatarpath = $request->file('image')->storeAs(
                'images_users',
                $request->name . '_' . $request->email . '.' . $request->file('image')->getClientOriginalExtension()
                ,
                'public'
            );
            // dd($request->file('profile_photo_path')->getClientOriginalExtension());
            $data['image'] = $avatarpath;
        }

        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        event(new Registered($user));

       Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
