<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemMonitoringController extends Controller
{
    //
    public function SystemMonitoringPage()
    {
        return view('system_monitoring/monitoringpage');
    }
}
