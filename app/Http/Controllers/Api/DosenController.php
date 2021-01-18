<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $this->check_token($this->check);
            $dosen = DB::table('dosens as a')
            ->select('a.id','b.name','a.nidn','a.name','a.gelar','a.tgl_lahir','a.email','a.telp','a.alamat')
            ->join('users as b','a.id','=','b.id')
            ->get();
            
            return $dosen;
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->check_token($this->check);
            Dosen::create([
                'user_id' => $request->user_id,
                'nidn' => $request->nidn,
                'name' => $request->name,
                'gelar' => $request->gelar,
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email,
                'telp' => $request->telp,
                'alamat' => $request->alamat,
            ]);
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $this->check_token($this->check);
            return Dosen::find($id);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
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
        try {
            $this->check_token($this->check);
            $dosen = Dosen::find($id);

            $dosen->user_id = $request->user_id;
            $dosen->nidn = $request->nidn;
            $dosen->name = $request->name;
            $dosen->gelar = $request->gelar;
            $dosen->tgl_lahir = $request->tgl_lahir;
            $dosen->email = $request->email;
            $dosen->telp = $request->telp;
            $dosen->alamat = $request->alamat;
            $dosen->save();

            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->check_token($this->check);
            $dosen = Dosen::find($id);
            $dosen->delete();

            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }
}
