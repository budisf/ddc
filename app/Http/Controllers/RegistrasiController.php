<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('index');
    }
 
    public function registrasi(Request $request)
    {
        $messages = [
            'required' => ':Data wajib diisi !',
            'min' => ':Data harus diisi minimal :min karakter !',
            'max' => ':Data harus diisi maksimal :max karakter !',
            'email' => ':Format email harus sesuai !',
        ];
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'email' => 'required|email',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ],$messages);
 
        return view('detail_registrasi',['data' => $request]);
    }
}
