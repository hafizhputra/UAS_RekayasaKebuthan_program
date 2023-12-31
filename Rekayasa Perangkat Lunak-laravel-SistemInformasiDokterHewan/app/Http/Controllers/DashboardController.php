<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $today = Reservation::whereDate('created_at', Carbon::today())->count();
        $all = Reservation::count();
        $service = Service::count();
        $customer = User::where('role', 'customer')->count();
        $reservations = Reservation::orderByDesc('created_at')->limit(7)->get();
        return view('dashboards.admin', compact('today', 'all', 'service', 'customer', 'reservations'));
    }

    public function customer()
    {
        $today = Reservation::where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->count();
        $all = Reservation::where('user_id', Auth::user()->id)->count();
        $complete = Reservation::where('user_id', Auth::user()->id)->where('status', 'completed')->count();
        $reservations = Reservation::where('user_id', Auth::user()->id)->orderByDesc('created_at')->limit(5)->get();
        return view('dashboards.customer', compact('today', 'all', 'complete', 'reservations'));
    }
}
