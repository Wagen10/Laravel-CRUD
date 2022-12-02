<?php

namespace App\Http\Controllers;

use App\Models\cast;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci =$request->katakunci;
        $jumlahbaris = 5;
        if(strlen($katakunci)){
            $data = cast::where('id','like',"%$katakunci%")
            ->paginate($jumlahbaris);
        }else{
            $data = cast::orderBy('id','asc')->paginate($jumlahbaris);
        }
      
        return View('admin.cast')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session()->flash('id',$request->id);
        Session()->flash('nama',$request->nama);
        Session()->flash('umur',$request->umur);
        Session()->flash('bio',$request->bio);

        $request->validate([
            'id'=>'required|numeric|unique:cast,id',
            'nama'=>'required',
            'umur'=>'required|numeric|',
            'bio'=>'required',
        ],[
            'id.required'=>'ID Wajib Diisi',
            'id.numeric'=>'ID Wajib berupa angka 0-9',
            'id.unique'=>'ID yang Diisi sudah ada dalam database',
            'nama.required'=>'Nama Wajib Diisi',
            'umur.required'=>'Umur Wajib Diisi',
            'umur.numeric'=>'Umur Wajib berisi Angka dari 0-9',
            'bio.required'=>'Bio Wajib Diisi',
        ]);
        $data =[
            'id'=>$request->id,
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'bio'=>$request->bio,
        ];
        cast::create($data);
        return redirect()->to('cast')->with('SUCCESS','Berhasil Menambahkan Data');
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
        $data = cast::where('id', $id)->first();
        return View('admin.edit')->with('data', $data);
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
        $request->validate([
            'nama'=>'required',
            'umur'=>'required|numeric|',
            'bio'=>'required',
        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'umur.required'=>'Umur Wajib Diisi',
            'umur.numeric'=>'Umur Wajib berisi Angka dari 0-9',
            'bio.required'=>'Bio Wajib Diisi',
        ]);
        $data =[
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'bio'=>$request->bio,
        ];
        cast::where('id',$id)->update($data);
        return redirect()->to('cast')->with('SUCCESS','Berhasil Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cast::where('id', $id)->delete();
        return redirect()->to('cast')->with('SUCCESS','Berhasil Menghapus Data');
    }
}
