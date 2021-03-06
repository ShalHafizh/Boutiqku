<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{


    public function index()
    {
        // $user = User::all();
        $item = session::truncate();
        $pesan = "Masukkan Username dan Password anda";
        return view('auth.login', 
        [
            'pesan' => $pesan
        ]);
        // return view('login',['user'=>$user]);
    }

    public function index1()
    {
        // $user = User::all();
        $item = session::truncate();
        $pesan = "Username atau Password anda salah!!!";
        return view('auth.login', 
        [
            'pesan'=>$pesan]);
        // return view('login',['user'=>$user]);
    }

    public function authenticate(Request $request)
    {
        $data = $request;
        // echo $data['nama_user'];
        // echo $data['id'];
        $a        = User::all()->where('username','=',$data['username']);
        $null = '[]';
        if ($a!=$null) 
        {
            $username = $a->where('username','=',$data['username']);
            $password = $a->where('password','=',$data['password']);
            $role1    = $username->where('id_role',1);// 1 = pegawai
            // echo $username;
            // echo $password;
            // echo $role1;
            if($username != $password ){return redirect('/relog');}
            else
            {
                if ($role1==$username) 
                {
                    $asd = $request->input();
                    $session = new session;
                    $session->id         = $asd['session'];
                    $session->name       = $asd['username'];//username
                    $session->role       = "1";//role
                    $session->save();
                }
                else 
                {
                    $asd = $request->input();
                    $session = new session;
                    $session->id         = $asd['session'];
                    $session->name       = $asd['username'];
                    $session->role       = "2";
                    $session->save();
                }
            }
            return redirect('Home');
        }
        else{return redirect('/relog');}

    }

    public function a(Request $request)
    {
        $data = $request;
        // echo $data['nama_user'];
        // echo $data['id'];
        $a        = User::all()->where('id','=',$data['id']);
        $null = '[]';
        if ($a!=$null) 
        {
            $username = User::find($a)->where('id','=',$data['id']);
            $password = User::find($a)->where('password','=',$data['password']);
            $role1    = User::find($username)->where('id_role',1);// 1 = pegawai
            // echo $username;
            // echo $password;
            // echo $role1;
            $asd = $request->input();
            $session        = new session;
            $session->id    = $asd['session'];
            $session->name  = $asd['username'];//username
            $session->role  = "1";//role
            $session->save();
            return redirect('Home');
        }
        else{return redirect('/relog');}

    }

    public function logout()
    {
        $item = session::truncate();
        return redirect('/');       
    }

}
 