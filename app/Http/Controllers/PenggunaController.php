<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class PenggunaController extends Controller
{
    public function awal()
    {
    	return "Hello dari PenggunaController";
    }
    public function tambah()
    {
    	return 	$this -> simpan();
    }
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username='rijali rahman';
    	$pengguna->password='gagah';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username}telah di simpan";
    }
    
    public function ayam()
    {
    	$pengguna = new pengguna();
    	$pengguna->username='muhammad rijali rahman';
    	$pengguna->password='gagah';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah di simpan";
    }
}
