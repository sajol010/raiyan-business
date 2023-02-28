<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        return view('backend.dashboard.admin');
    }

    public function pending()
    {
        $applications = Certificate::where('status', 0)->get();
        return view('backend.certificate.pending', ['applications' => $applications]);
    }

    public function approved()
    {
        $applications = Certificate::where('status', 1)->get();
        return view('backend.certificate.approved', ['applications' => $applications]);
    }

    public function rejected()
    {
        $applications = Certificate::where('status', 2)->get();
        return view('backend.certificate.rejected', ['applications' => $applications]);
    }
}
