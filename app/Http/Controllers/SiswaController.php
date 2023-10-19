<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        // get data form Models Siswa and Role
        $getSiswa = Siswa::all();
        // dd($getSiswa);
        return view('siswa.index', compact('getSiswa'));
    }
}
