<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Jurusan;
use Storage;
use Hash;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
	public function profil(){
		$user = User::where('id' , auth()->user()->id )->first();
		$jurusan = Jurusan::all();
		$post = Post::join('users','users.id','posts.user_id')->latest()->where('user_id' , auth()->user()->id )->get();

		return view('user/profil',compact('user', 'jurusan','post'));
	}
	public function data()
	{
		$user = User::all();

		return view('data-siswa' ,compact('user'));
	}
	public function edit()
	{
		$user = User::where('id' , auth()->user()->id )->first();
		$jurusan = Jurusan::all();

		return view('user/user-edit' , compact('user', 'jurusan'));
	}
	public function update(Request $request)
	{	
		if ($request->file('avatar')) {

            Storage::delete($request->user()->avatar);
            
            $avatar = $request->file('avatar')->store('avatars');

            $request->user()->update([
				'name' => request('name'),
				'email' => request('email'),
				'nisn' => request('nisn'),
				'alamat' => request('alamat'),
				'no_tlp' => request('no_tlp'),
				'jurusan_id' => request('jurusan_id'),
				'status_nikah' => request('status_nikah'),
				'status_kerja' => request('status_kerja'),
				'tahun_masuk' => request('tahun_masuk'),
				'tahun_keluar' => request('tahun_keluar'),
				'status_akun' => true ,
				'password' => Hash::make('password'),
				'avatar' => $avatar,
		]);
        }
        else{

        	$request->user()->update([
				'name' => request('name'),
				'email' => request('email'),
				'nisn' => request('nisn'),
				'alamat' => request('alamat'),
				'no_tlp' => request('no_tlp'),
				'jurusan_id' => request('jurusan_id'),
				'status_nikah' => request('status_nikah'),
				'status_kerja' => request('status_kerja'),
				'tahun_masuk' => request('tahun_masuk'),
				'tahun_keluar' => request('tahun_keluar'),
				'password' => Hash::make('password'),
				'status_akun' => true , 
        ]);
        }

		return redirect('profil');
	}
	public function search(Request $request)
	{
		if ( ! $user = $query1 = request('query1')) {
			
            return view('hasil' , compact('user'));
        
        }else
        {

		$query1 = request('query1');

		$user = User::join('jurusans','jurusans.id','users.jurusan_id')
				->where('name' , 'LIKE', '%' . $query1 . '%')
				->orWhere('nisn' , 'LIKE', '%' . $query1 . '%')
                ->get();

		return view('hasil' ,compact('hasil','user'));
        
        }
	}

	public function cari(Request $request)
	{
		if ( ! $user = $query1 = request('query1') .
            $query2 = request('query2').
            $query3 = request('query3').
            $query4 = request('query4').
            $query5 = request('query5')) {

            return view('hasil' , compact('user'));
        
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

		return view('hasil' ,compact('user'));
	}
}


	public function import(Request $request)
	{
		if ($data = $request->hasFile('file')) {

			Excel::import(new UsersImport, request('file'));
		}

		return redirect()->back();
	}

	public function importexcel()
	{
		return view('import');
	}
}
	