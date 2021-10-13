<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function me() {
        return ([
            'Nama' => 'Donny Rizky Kautsar',
            'Kelas' => 'XII RPL 2',
            'NIS'=> '3103119054',
            'Kelamin' => 'Laki-Laki',
            'Nomor telepon' => '082136466850',
        ]);
 }
}