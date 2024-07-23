<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'photo'     => ['file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'document'  => ['required', 'string', 'max:255'],
            'fullname'  => ['required', 'string', 'max:255'],
            'gender'    => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'phone'     => ['required', 'string', 'max:255'],
            'role'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password'  => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('images'), $photoName);
            $photoName = '../images/' . $photoName;
        } else {
            $photoName = '../images/no-photo.png';
        }

        $user = User::create([
            'photo'     => $photoName,
            'document'  => $request->document,
            'fullname'  => $request->fullname,
            'gender'    => $request->gender,
            'birthdate' => $request->birthdate,
            'phone'     => $request->phone,
            'role'      => $request->role,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect(route('dashboard', absolute: false));
    }
}
