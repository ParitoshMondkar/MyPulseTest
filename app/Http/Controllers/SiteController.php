<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function chart1() {
        
        return view('site.chart1');
    }

    public function chart2() {
        
        return view('site.chart2');
    }

    public function chart3() {
        
        return view('site.chart3');
    }

    public function chart4() {
        
        return view('site.chart4');
    }

    public function chart5() {
        
        return view('site.chart5');
    }
}
