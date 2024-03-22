<?php

namespace App\Http\Controllers;


use Illuminate\View\view;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(): View
     {
        return view('chirps', [
            //
        ]);
     }
}
