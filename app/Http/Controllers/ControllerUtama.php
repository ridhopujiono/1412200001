<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ControllerUtama extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("log-in", [
            "title" => "Halaman Login"
        ]);
    }


    public function regis()
    {
        //
        return view("sign-up", [
            "title" => "Halaman Sign Up"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = DB::table('users')->insert([
            "nama" => $request->nama,
            "npm" => $request->npm,
            "password" => password_hash($request->password, PASSWORD_DEFAULT),
        ]);

        if ($insert) {
            return redirect('sign-up')->with('success', 'berhasil mendaftar, silahkan login');
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'npm' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('utama');
        }

        return back()->withErrors([
            'npm' => 'The provided credentials do not match our records.',
        ]);
    }


    public function halaman_utama()
    {
        return view("index", [
            "title" => "Universitas Ronggolawe Tuban"
        ]);
    }
    public function fakultas()
    {
        return view("fakultas", [
            "title" => "Universitas Ronggolawe Tuban"
        ]);
    }
    public function akademik()
    {
        return view("akademik", [
            "title" => "Universitas Ronggolawe Tuban"
        ]);
    }
    public function ambil_matkul()
    {
        $jurusan = DB::table('jurusan')->get();
        $jurusan_aktif = [];
        $matkul = [];
        return view("ambil_matkul", [
            "jurusan" =>  $jurusan,
            "jurusan_aktif" =>  $jurusan_aktif,
            "mata_kuliah" =>  $matkul,
            "title" => "Universitas Ronggolawe Tuban"
        ]);
    }
    public function ambil_matkul2($id)
    {
        $jurusan_aktif = DB::table('jurusan')->where('id', $id)->first();
        $jurusan = DB::table('jurusan')->get();
        $matkul = DB::table('mata_kuliah')->where('id_jurusan', $id)->get();
        return view("ambil_matkul", [
            "jurusan" =>  $jurusan,
            "jurusan_aktif" =>  $jurusan_aktif,
            "mata_kuliah" =>  $matkul,
            "title" => "Universitas Ronggolawe Tuban"
        ]);
    }


    public function post_ambil_matkul(Request $request)
    {
        for ($i = 0; $i < count($request->pilih_matkul); $i++) {

            $data = DB::table('ambil_matkul')->insert([
                "npm" => auth()->user()->npm,
                "nama_matkul" => $request->pilih_matkul[$i],
            ]);
        }

        return redirect('ambil_matkul')->with('success', "berhasil");
    }


    public function lihat_hasil()
    {
        $matkul = DB::table('ambil_matkul')->where('npm', auth()->user()->npm)->get();
        return view("hasil", [

            "mata_kuliah" =>  $matkul,
            "title" => "Universitas Ronggolawe Tuban"
        ]);
    }
    public function hapus($id)
    {
        $matkul = DB::table('ambil_matkul')->where('id', $id)->delete();
        return redirect('lihat_hasil')->with('success', "berhasil");
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
