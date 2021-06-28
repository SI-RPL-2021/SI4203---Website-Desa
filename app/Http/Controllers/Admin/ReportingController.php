<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\aspirasi;
use App\kesehatan;
use App\pengaduan;
use App\suratonline;
use App\KegiatanDesa;
use Illuminate\Support\Facades\DB;

class ReportingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = User::select(DB::raw("Month(created_at)as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months as $index => $month) {
            $datas[$month - 1] = $users[$index];
        }



            // bar chart
            $items1 = aspirasi::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $months1 = aspirasi::select(DB::raw("Month(created_at)as month1"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month1');

            $items2 = kesehatan::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $months2 = kesehatan::select(DB::raw("Month(created_at)as month2"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month2');

            $items3 = pengaduan::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $months3 = pengaduan::select(DB::raw("Month(created_at)as month3"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month3');

            $items4 = suratonline::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $months4 = suratonline::select(DB::raw("Month(created_at)as month4"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month4');

            $items5 = KegiatanDesa::select(DB::raw("COUNT(*) as count"))
                ->whereYear('tanggal', date('Y'))
                ->groupBy(DB::raw("Month(tanggal)"))
                ->pluck('count');

            $months5 = KegiatanDesa::select(DB::raw("Month(tanggal)as month5"))
                ->whereYear('tanggal', date('Y'))
                ->groupBy(DB::raw("Month(tanggal)"))
                ->pluck('month5');

            $data1 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($months1 as $index => $month1) {
                $data1[$month1 - 1] = $items1[$index];
            }

            $data2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($months2 as $index => $month2) {
                $data2[$month2 - 1] = $items2[$index];
            }

            $data3 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($months3 as $index => $month3) {
                $data3[$month3 - 1] = $items3[$index];
            }

            $data4 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($months4 as $index => $month4) {
                $data4[$month4 - 1] = $items4[$index];
            }

            $data5 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($months5 as $index => $month5) {
                $data5[$month5 - 1] = $items5[$index];
            }

            return view('admin.reporting', [
                'title' => 'Reporting',
                'items1' => $items1,
                'items2' => $items2,
                'items3' => $items3,
                'items4' => $items4,
                'items5' => $items5,
            ], compact('datas', 'data1', 'data2', 'data3', 'data4', 'data5'));
            return view('admin.reporting', [
                'title' => 'reporting'
            ]);
        
}
}