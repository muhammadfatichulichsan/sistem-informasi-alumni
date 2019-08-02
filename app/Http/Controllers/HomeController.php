<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cetak(Request $request)
    {

        if ( ! $user = $query1 = request('query1') .
            $query2 = request('query2').
            $query3 = request('query3').
            $query4 = request('query4').
            $query5 = request('query5')) {

            return view('cetak' , compact('user'));
        
        }else{

        $query1 = request('query1');
        $query2 = request('query2');
        $query3 = request('query3');
        $query4 = request('query4');
        $query5 = request('query5');

        $user = User::join('jurusans','jurusans.id','users.jurusan_id')
                ->where('name' , 'LIKE', '%' . $query1 . '%')
                ->where('nama_jurusan' , 'LIKE', '%' . $query2 . '%')
                ->where('status_kerja' , 'LIKE', '%' . $query3 . '%')
                ->where('tahun_masuk' , 'LIKE', '%' . $query4 . '%')
                ->where('tahun_keluar' , 'LIKE', '%' . $query5 . '%')
                ->get();

        return view('cetak' ,compact('user' ,'query1','query2','query3','query4','query5'));
        }
        
    }

    public function downloadPDF(Request $request)
    {
        $query1 = request('query1');
        $query2 = request('query2');
        $query3 = request('query3');
        $query4 = request('query4');
        $query5 = request('query5');

        $user = User::join('jurusans','jurusans.id','users.jurusan_id')
                ->where('name' , 'LIKE', '%' . $query1 . '%')
                ->where('nama_jurusan' , 'LIKE', '%' . $query2 . '%')
                ->where('status_kerja' , 'LIKE', '%' . $query3 . '%')
                ->where('tahun_masuk' , 'LIKE', '%' . $query4 . '%')
                ->where('tahun_keluar' , 'LIKE', '%' . $query5 . '%')
                ->get();

        $pdf = PDF::loadView('pdfView' ,compact('user'))->setPaper('a4', 'landscape')->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->download('insvoice.pdf');

    }
}
