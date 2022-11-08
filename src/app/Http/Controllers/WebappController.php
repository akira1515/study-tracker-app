<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facade;

use App\Models\Lang;
use App\Models\Content;
use App\Models\StudyRecord;

class WebappController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        
        $dates = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->get()->all();
        // $date = $dates->toArray();
        // $dates = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->count('hour');
        $day_sum = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->whereDay('date', $day)->sum('hour');
        $month_sum = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->sum('hour');
        $year_sum = StudyRecord::sum('hour');

        return view('webapp.index',compact('dates', 'day_sum', 'month_sum', 'year_sum')
    );
    }
}