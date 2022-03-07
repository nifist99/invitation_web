<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Hash;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['view']='home';
        $data['tema']=DB::table('day_tema')
        ->where('status','active')
        ->get();
        
        return view('web/index',$data);
    }

    public function daftar()
    {
        $data['view']='daftar';
        return view('web/daftar',$data);
    }

    public function tema($url_web)
    {
        $data['row'] =  DB::table('day_wedding')
                        ->join('day_tema','day_wedding.id_day_tema','=','day_tema.id')
                        ->join('day_music','day_wedding.id_day_music','=','day_music.id')
                        ->where('day_wedding.url_web',$url_web)
                        ->select('day_wedding.*','day_tema.view as view_blade','day_music.url as url_music')
                        ->first();
        
        $data['tema']=DB::table('day_tema')
                        ->join('day_wedding','day_tema.id','=','day_wedding.id_day_tema')
                        ->where('day_wedding.id',$data['row']->id)
                        ->select('day_tema.*')
                        ->first();

     
        
        $data['pria'] = DB::table('day_wedding_data')
                        ->where('id_day_wedding',$data['row']->id)
                        ->where('status','pria')
                        ->first();

        $data['wanita']= DB::table('day_wedding_data')
                        ->where('id_day_wedding',$data['row']->id)
                        ->where('status','wanita')
                        ->first();

        $data['foto'] =  DB::table('day_wedding_foto')
                        ->where('id_day_wedding',$data['row']->id)
                        ->get();

        $data['rekening']= DB::table('day_wedding_gift')
                            ->join('day_bank','day_wedding_gift.id_day_bank','=','day_bank.id')
                            ->where('day_wedding_gift.id_day_wedding',$data['row']->id)
                            ->select('day_bank.nama as bank','day_bank.foto as foto_atm','day_wedding_gift.*')
                            ->get();
        
        $data['pesan']  = DB::table('day_wedding_pesan')
                        ->where('id_day_wedding',$data['row']->id)
                        ->where('status','active')
                        ->get();

        $date            = date_create($data['row']->tanggal);

        $data['tanggal_wedding'] = date_format($date,"l , d / F / Y ");



        if($data['row']->view_blade){
            if($data['row']->status=='active'){
            return view('tema/'.$data['row']->view_blade,$data);
            }else{
                return view('welcome');
            }
        }else{
            $data['view']='home';
            $data['tema']=DB::table('day_tema')
            ->where('status','active')
            ->get();
            return view('web/index',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data['id_day_wedding']     =$request->id_day_wedding;
        $data['pesan']              =$request->pesan;
        $data['nama']               =$request->nama;
        $data['status']             ='active';

        $cek=DB::table('day_wedding_pesan')->insert($data);
        return Response::json($data);
    
    }

    public function register(Request $request)
    {
        

        $data['status']='active';
        $data['hp']=$request->hp;
        $data['id_cms_privileges']=3;
        $data['photo']=url('tema/tema1/assets/img/pria.png');
        $data['email']=$request->email;
        $data['name']=$request->nama;
        $data['catatan']=$request->catatan;
        $data['password']=Hash::make($request->password);

        $email=DB::table('cms_users')
        ->where('email',$request->email)
        ->first();

        if($email){
            $respon['api_status']='failed';
            $respon['api_message']='email sudah ada silahkan login';
        }else{
            DB::table('cms_users')->insert($data);
            $respon['api_status']='success';
            $respon['api_message']='Account berhasil di buat, silahkan login';
        }

        return Response::json($respon);
    
    }

    public function suscribe(Request $request){
        $data['email']=$request->email;
        $data['created_at']=date('Y-m-d');

        $email=DB::table('day_suscribe')
        ->where('email',$request->email)
        ->first();

        if($email){
            $respon['api_status']='failed';
            $respon['api_message']='email sudah suscribe website ini';
        }else{
            DB::table('day_suscribe')->insert($data);
            $respon['api_status']='success';
            $respon['api_message']='Terimakasih sudah suscribe';
        }

        return Response::json($respon);

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
