<?php

namespace App\Http\Controllers;

use App\Models\Pemprov;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PemprovController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pemprov = Pemprov::whereHas('daerah')->paginate(5);
        if ($request->keyword){
            $pemprov = Pemprov::whereHas('daerah')
                ->where(function ($query) use ($keyword){
                    $query->where('tentang', 'LIKE', '%'.$keyword.'%')
                        ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
                        ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%');
                })->paginate(5);
        }
        return view('pemprov.index',compact('pemprov', 'keyword' ));
    }



    public function cetakprov()
    {
        $pemprov = Pemprov::all();

        return view('pemprov.cetakprov',  compact('pemprov'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemprov = Pemprov::all();
        return view('pemprov.create',compact('pemprov'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $nmfile = Str::uuid().".".$extension;
        $path = $request->file('file')->storeAs(
            'public/file',$nmfile
        );

        $pemprov = new Pemprov();
        $pemprov->tentang = $request->tentang;
        $pemprov->mou = $request->mou;
        $pemprov->pks = $request->pks;
        $pemprov->tanggal = $request->tanggal;
        $pemprov->jangka_waktu = $request->jangka_waktu;
        $pemprov->unitkerja = $request->unitkerja;
        $pemprov->mitrakerja = $request->mitrakerja;
        $pemprov->tahapan = $request->tahapan;
        $pemprov->provinsi = $request->provinsi;
        $pemprov->nama_daerah = $request->nama_daerah;
        $pemprov->file = $nmfile;
        $pemprov->tahun = $request->tahun;
        $pemprov->save();
        return redirect('/pemprov');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemprov = Pemprov::find($id);
        return view('pemprov.show', compact('daftar_provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemprov = Pemprov::find($id);

        return view('pemprov.edit', compact('pemprov'));
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
        $pemprov = Pemprov::find($id);
        $pemprov->tentang = $request->tentang;
        $pemprov->mou = $request->mou;
        $pemprov->pks = $request->pks;
        $pemprov->tanggal = $request->tanggal;
        $pemprov->jangka_waktu = $request->jangka_waktu;
        $pemprov->unitkerja = $request->unitkerja;
        $pemprov->mitrakerja = $request->mitrakerja;
        $pemprov->tahapan = $request->tahapan;
        $pemprov->provinsi = $request->provinsi;
        $pemprov->nama_daerah = $request->nama_daerah;

        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,

            );
           echo  $pemprov->file = $nmfile;
        }
        $pemprov->file = $nmfile;
        $pemprov->tahun = $request->tahun;
        $pemprov->save();

        return redirect('/pemprov');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemprov = Pemprov::find($id);
        $pemprov->delete();
        return redirect('/pemprov');
    }
}
