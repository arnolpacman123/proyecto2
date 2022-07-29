<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Video;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function user() {
        $users = User::latest()->paginate(20);
        return view('layouts.backend.app.report.user',compact('users'));
    }

    public function video() {
        $videos = Video::latest()->paginate(20);
        return view('layouts.backend.app.report.video',compact('videos'));
    }

    public function user_results(Request  $request) {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $users = User::whereBetween('created_at', [$start_date, $end_date])->get();

        $pdf = Pdf::loadView('layouts.backend.app.report.user_results', compact('users', 'start_date', 'end_date'));
        return $pdf->download('users_results_'.$start_date.'_'.$end_date.'.pdf');
    }

    public function video_results(Request  $request) {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $videos = Video::whereBetween('created_at', [$start_date, $end_date])->get();

        $pdf = Pdf::loadView('layouts.backend.app.report.video_results', compact('videos', 'start_date', 'end_date'));
        return $pdf->download('videos_results_'.$start_date.'_'.$end_date.'.pdf');
    }
}
