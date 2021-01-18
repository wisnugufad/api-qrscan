<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
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
            $mahasiswa = DB::table('mahasiswas as a')
            ->select('a.id','b.name','a.nrp','a.name','a.email','c.nama_prodi','a.telp','a.alamat')
            ->join('users as b','a.id','=','b.id')
            ->join('prodis as c','a.prodi_id','=','c.id')
            ->get();
            
            return $mahasiswa;
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
            Mahasiswa::create([
                'user_id' => $request->user_id,
                'nrp' => $request->nrp,
                'name' => $request->name,
                'peodi_id' => $request->prodi_id,
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
            return Mahasiswa::find($id);
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
            $mahasiswa = Mahasiswa::find($id);

            $mahasiswa->user_id = $request->user_id;
            $mahasiswa->nrp = $request->nrp;
            $mahasiswa->name = $request->name;
            $mahasiswa->email = $request->email;
            $mahasiswa->prodi_id = $request->prodi_id;
            $mahasiswa->telp = $request->telp;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->save();

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
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->delete();

            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }
}
