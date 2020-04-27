<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;

class controller_pegawai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
        $pegawai = Pegawai::all();
        //dump($pegawai);
        return view ('master/pegawai/index',['pegawai' =>$pegawai]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master/pegawai/create');
    }


    public function insertdata(Request $request)
    {
        $password = md5($request->pass);

        $pegawai = new Pegawai;

        $pegawai->fill([
            'first_name'   => $request->firstname,
            'last_name'    => $request->lastname,
            'username'     => $request->username,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'password'     => $request->password,
            'job_status'   => $request->jobstatus
        ]);

        $pegawai->save();

        return redirect('pegawaiindex');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'first_name'   => $request->firstname,
            'last_name'    => $request->lastname,
            'username'     => $request->username,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'password'     => $request->password,
            'job_status'   => $request->jobstatus
             ]);
     
             return redirect('pegawaiindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::where('user_id', $id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('master.pegawai.edit',['pegawai' => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pegawai = Pegawai::where('user_id', $request->id)->update([
            'first_name'   => $request->firstname,
            'last_name'    => $request->lastname,
            'username'     => $request->username,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'password'     => $request->password,
            'job_status'   => $request->jobstatus
        ]);
     
             return redirect('pegawaiindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pegawai')->where('user_id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('pegawaiindex');
    }

    public function login(){
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = pegawai::where('email',$email)->first();
        if($data){
            if($data->password==$password){
                Session::put('coba',$data->first_name);
                Session::put('coba1',$data->job_status);
                    Session::put('login', TRUE);
                    if($data->job_status == 'Admin'){
                        Session::put('admin', TRUE);
                    }
                    if($data->job_status == 'Kasir'){
                        Session::put('kasir', TRUE);
                    }
                    return redirect('sembarang');
            }
            else{
                return redirect('login');
            }
        }
       
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
}