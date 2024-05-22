<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;


class mahasiswacontroller extends Controller
{
    public function index()
    {
        $data = ['nama' => 'Ghaida', 'foto' =>'girl.jpg' ];
        $mahasiswa = DB::table('mahasiswa') -> get();
        return view('mahasiswa', compact(['data', 'mahasiswa']));
    }
}
?>