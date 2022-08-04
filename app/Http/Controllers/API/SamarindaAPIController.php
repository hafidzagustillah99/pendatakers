<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Models\Samarinda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SamarindaAPIController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smd = Samarinda::all();
        return response()->json([
            'message'=>'Berhasil mengambil data',
            'status'=>'sukses',
            'data'=>$smd], 200);
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
            $smd = Samarinda::create($input);
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid().".".$extension;
            $path = $file->storeAs(
                'public/file',$nmfile
            );
            $smd->file = $nmfile;
            $smd->save();
            DB::commit();
            return response()->json([
                'message'=>'Berhasil mengambil data',
                'status'=>'sukses',
                'data'=>$smd], 200);
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
        $smd = Samarinda::find($id);
        if (empty($produk)) {
            return $this->sendError('Data not found');
        }
        return response()->json([
            'message'=>'Berhasil mengambil data',
            'status'=>'sukses',
            'data'=>$smd], 200);
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
