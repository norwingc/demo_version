<?php

namespace App\Http\Controllers;

use App\Agenda;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $agendas = Agenda::all();
        return view('welcome', compact('agendas'));
    }

    /**
     * [viewPerson description]
     * @param   Agenda  $Agenda  [$Agenda description]
     * @return  [type]           [return description]
     */
    public function viewPerson(Agenda $Agenda)
    {
        return view('person', ['person' => $Agenda]);
    }
}
