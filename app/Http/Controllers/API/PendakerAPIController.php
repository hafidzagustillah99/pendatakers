<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Balikpapan;
use App\Models\Berau;
use App\Models\Bontang;
use App\Models\Kubar;
use App\Models\Kukar;
use App\Models\Kutim;
use App\Models\Mahakam;
use App\Models\Paser;
use App\Models\Pemprov;
use App\Models\Penajam;
use App\Models\Samarinda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PendakerAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        switch ($request['kabkota']){
            case "balikpapan":
                $data = Balikpapan::whereHas('daerah')->get();
                break;
            case "berau":
                $data = Berau::whereHas('daerah')->get();
                break;
            case "bontang":
                $data = Bontang::whereHas('daerah')->get();
                break;
            case "kubar":
                $data = Kubar::whereHas('daerah')->get();
                break;
            case "kukar":
                $data = Kukar::whereHas('daerah')->get();
                break;
            case "kutim":
                $data = Kutim::whereHas('daerah')->get();
                break;
            case "mahakam":
                $data = Mahakam::whereHas('daerah')->get();
                break;
            case "paser":
                $data = Paser::whereHas('daerah')->get();
                break;
            case "penajam":
                $data = Penajam::whereHas('daerah')->get();
                break;
            case "samarinda":
                $data = Samarinda::whereHas('daerah')->get();
                break;
            case "pemprov":
                $data = Pemprov::whereHas('daerah')->get();
                break;
            default:
                return response()->json([
                    'pesan'=>'Data '.$request['kabkota'].' tidak ditemukan',
                    'kode'=>404,], 404);

        }
        return response()->json([
            'pesan'=>'Berhasil mengambil data '.$request['kabkota'],
            'kode'=>200,
            'data'=>$data], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('file');
        switch ($input['kabkota']){
            case "balikpapan":
                $kabkota = 'App\Models\Balikpapan';
                break;
            case "berau":
                $kabkota = 'App\Models\Berau';
                break;
            case "bontang":
                $kabkota = 'App\Models\Bontang';
                break;
            case "kubar":
                $kabkota = 'App\Models\Kubar';
                break;
            case "kukar":
                $kabkota = 'App\Models\Kukar';
                break;
            case "kutim":
                $kabkota = 'App\Models\Kutim';
                break;
            case "mahakam":
                $kabkota = 'App\Models\Mahakam';
                break;
            case "paser":
                $kabkota = 'App\Models\Paser';
                break;
            case "penajam":
                $kabkota = 'App\Models\Penajam';
                break;
            case "samarinda":
                $kabkota = 'App\Models\Samarinda';
                break;
            case "pemprov":
                $kabkota = 'App\Models\Pemprov';
                break;
            default:
                return response()->json([
                    'pesan'=>'Data '.$request['kabkota'].' tidak bisa disimpan',
                    'kode'=>404,], 404);
        }

        try{
            DB::beginTransaction();
            $data = $kabkota::create($input);
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();

                $nmfile = Str::uuid().".".$extension;
                $path = $file->storeAs(
                    'public/file',$nmfile
                );
                $data->file = $nmfile;
                $data->save();
            }
            DB::commit();
            return response()->json([
                'pesan'=>'Berhasil menyimpan data',
                'kode'=>200],200);
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'pesan'=>$exception->getMessage(),
                'kode'=>500],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $smd = Samarinda::find($id);
//        if (empty($produk)) {
//            return response()->json([
//                'pesan'=>'Data tidak ditemukan',
//                'kode'=>404],404);
//        }
//        return response()->json([
//            'message'=>'Berhasil mengambil data',
//            'status'=>'sukses',
//            'data'=>$smd], 200);
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('file');
        switch ($input['kabkota']){
            case "balikpapan":
                $kabkota = 'App\Models\Balikpapan';
                break;
            case "berau":
                $kabkota = 'App\Models\Berau';
                break;
            case "bontang":
                $kabkota = 'App\Models\Bontang';
                break;
            case "kubar":
                $kabkota = 'App\Models\Kubar';
                break;
            case "kukar":
                $kabkota = 'App\Models\Kukar';
                break;
            case "kutim":
                $kabkota = 'App\Models\Kutim';
                break;
            case "mahakam":
                $kabkota = 'App\Models\Mahakam';
                break;
            case "paser":
                $kabkota = 'App\Models\Paser';
                break;
            case "penajam":
                $kabkota = 'App\Models\Penajam';
                break;
            case "samarinda":
                $kabkota = 'App\Models\Samarinda';
                break;
            case "pemprov":
                $kabkota = 'App\Models\Pemprov';
                break;
            default:
                return response()->json([
                    'pesan'=>'Data '.$request['kabkota'].' tidak bisa di update',
                    'kode'=>404,], 404);
        }

        try{
            DB::beginTransaction();

            $data = $kabkota::find($id);
            if (empty($data)){
                return response()->json([
                    'pesan'=>'Data yang akan diubah tidak ditemukan',
                    'kode'=>404],404);
            }
            $data->update($input);
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();

                $nmfile = Str::uuid().".".$extension;
                $path = $file->storeAs(
                    'public/file',$nmfile
                );
                $data->file = $nmfile;
                $data->save();
            }
            DB::commit();
            return response()->json([
                'pesan'=>'Berhasil mengubah data',
                'kode'=>200],200);
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'pesan'=>$exception->getMessage(),
                'kode'=>500],500);
        }
    }

    public function searchData(Request $request)
    {
        $keyword = $request->keyword;
        switch ($request['kabkota']){
            case "balikpapan":
                $kabkota = 'App\Models\Balikpapan';
                break;
            case "berau":
                $kabkota = 'App\Models\Berau';
                break;
            case "bontang":
                $kabkota = 'App\Models\Bontang';
                break;
            case "kubar":
                $kabkota = 'App\Models\Kubar';
                break;
            case "kukar":
                $kabkota = 'App\Models\Kukar';
                break;
            case "kutim":
                $kabkota = 'App\Models\Kutim';
                break;
            case "mahakam":
                $kabkota = 'App\Models\Mahakam';
                break;
            case "paser":
                $kabkota = 'App\Models\Paser';
                break;
            case "penajam":
                $kabkota = 'App\Models\Penajam';
                break;
            case "samarinda":
                $kabkota = 'App\Models\Samarinda';
                break;
            case "pemprov":
                $kabkota = 'App\Models\Pemprov';
                break;
            default:
                return response()->json([
                    'pesan'=>'Data '.$request['kabkota'].' tidak ditemukan',
                    'kode'=>404,], 404);
        }
        $data = $kabkota::where('tentang', 'LIKE', '%'.$keyword.'%')->orWhere('tahun', 'LIKE', '%'.$keyword.'%')->get();
        return response()->json([
            'pesan'=>'Berhasil mengambil data '.$request['kabkota'],
            'kode'=>200,
            'data'=>$data], 200);
    }
}
