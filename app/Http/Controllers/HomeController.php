<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
		$agenda = auth()->user()->agenda;
		$agenda->load('people');
        return view('welcome', compact('agenda'));
    }

    public function login(Request $request)
    {
        $userdata = [
			'email' => $request->email,
			'password' => $request->password,
		];

		if (\Auth::attempt($userdata)) {
            return redirect()->route('home');
        }

        session()->flash('message_success', 'Fail');
        return back();
    }

    public function logout()
    {
        \Auth::logout();

        return redirect('/');
    }
}
