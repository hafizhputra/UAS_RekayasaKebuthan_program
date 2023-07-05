<?php

namespace App\Http\Controllers;
use App\Models\User;
// use App\Models\Reservation;
// use App\Models\Service;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Auth;
// use Illuminate\Http\Request;

class daftarcustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function daftarcustumer()
    {
        $daftarcustumer = User::select('id','name','email')->get();
        return view('daftarcustumer.index', compact('daftarcustumer'));
        // return view('daftarcustumer.index');
    }
}
