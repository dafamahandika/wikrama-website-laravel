<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function Home() {
        return view('beranda');
    }

    public function Sejarah() {
        return view('sejarah');
    }

    public function Jurusan() {
        return view('jurusan');
    }

    public function Matrikul() {
        return view('matrikulasi');
    }

    public function Kantin() {
        return view('kantin');
    }
}
