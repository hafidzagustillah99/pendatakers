<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Models\Berau;
use App\Models\Paser;
use App\Models\Mahakam;
use App\Models\Samarinda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahakamAPIController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahakam = Mahakam::all();
        return response()->json([
            'message'=>'Berhasil mengambil data',
            'status'=>'sukses',
            'data'=>$mahakam], 200);
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
        try{
            DB::beginTransaction();
            $mahakam = Mahakam::create($input);
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid().".".$extension;
            $path = $file->storeAs(
                'public/file',$nmfile
            );
            $mahakam->file = $nmfile;
            $mahakam->save();
            DB::commit();
            return response()->json([
                'message'=>'Berhasil mengambil data',
                'status'=>'sukses',
                'data'=>$mahakam], 200);
        }catch (\Exception $exception){
            DB::rollBack();
            return $this->sendError('Data gagal disimpan. Error:'.$exception->getMessage());
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
        $mahakam = Mahakam::find($id);
        if (empty($produk)) {
            return $this->sendError('Data not found');
        }
        return response()->json([
            'message'=>'Berhasil mengambil data',
            'status'=>'sukses',
            'data'=>$mahakam], 200);
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
