<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Models\Berau;
use App\Models\Samarinda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BerauAPIController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berau = Berau::all();
        return response()->json([
            'message'=>'Berhasil mengambil data',
            'status'=>'sukses',
            'data'=>$berau], 200);
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
            $berau = Berau::create($input);
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid().".".$extension;
            $path = $file->storeAs(
                'public/file',$nmfile
            );
            $berau->file = $nmfile;
            $berau->save();
            DB::commit();
            return response()->json([
                'message'=>'Berhasil mengambil data',
                'status'=>'sukses',
                'data'=>$berau], 200);
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
        $berau = Berau::find($id);
        if (empty($produk)) {
            return $this->sendError('Data not found');
        }
        return response()->json([
            'message'=>'Berhasil mengambil data',
            'status'=>'sukses',
            'data'=>$berau], 200);
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
