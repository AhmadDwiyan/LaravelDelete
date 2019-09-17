<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangModel;
class barangController extends Controller
{
   
    public function index()
    {
            $data = barangModel::all();
            return view('kontak', compact('data'));
    }

  
    public function create()
    {
        return view('kontak_create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
          ]);
  
          $data = new barangModel();
          $data->kd_barang = $request->nama;
          $data->nama_barang = $request->email;
          $data->stok = $request->nohp;
          $data->harga = $request->alamat;
         
          $data->save();
          return redirect()->route('barang.index')->with('alert_message', 'Berhasil menambah data!');
 }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = barangModel::where('id', $id)->get();
        return view('kontak_edit', compact('data'));
    }

  
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
          ]);
  
          $data = barangModel::where('id', $id)->first();
          $data->kd_barang = $request->nama;
          $data->nama_barang = $request->email;
          $data->stok = $request->nohp;
          $data->harga = $request->alamat;
       
          $data->save();
  
          return redirect()->route('barang.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = barangModel::where('id', $id)->first();
        $data->delete();

        return redirect()->route('barang.index')->with('alert_message', 'Berhasil menghapus data!');
    }

}
