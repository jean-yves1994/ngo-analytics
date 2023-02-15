<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalPending = Application::where('status', 'pending')->count();
        $totalDenied = Application::where('status', 'denied')->count();
        $totalAccepted = Application::where('status', 'accepted')->count();
        $totalAccepted = Application::where('status', 'accepted')->count();
        $requests=DB::table('applications')->orderBy('updated_at','DESC')->paginate(7);;
        $users = User::all()->count();
        $totalSent = Application::all()->count();
        $total=Application::select(
            DB::raw("(COUNT('*')) as count"),
            DB::raw("MONTHNAME(created_at) as month_name")
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->pluck('count');
        return view('auth.dashboard', [
            'totalPending' => $totalPending,
            'totalDenied' => $totalDenied,
            'totalAccepted' => $totalAccepted,
            'users' => $users,
            'totalSent' => $totalSent,
            'total'=>$total,
            'requests'=>$requests
           
    ]);
    }
}
