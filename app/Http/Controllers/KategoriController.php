<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = Kategori::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $kategori = Kategori::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Kategori;
        $model->nama_kategori = $request->nama_kategori;
        $model->jenis_kategori = $request->jenis_kategori;

        $validasi = Validator::make($data,[
            'nama_kategori'=>'required|max:255',
            'jenis_kategori'=>'required|max:255',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('kategori.create')->withInput()->withErrors($validasi);
        }

       // $data['password'] = bcrypt($data['password']);
        // Kategori::create($data);
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit',compact('kategori'));
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
        $kategori = Kategori::findOrFail($id);
        $data = $request->all();
         $validasi = Validator::make($data,[
        'nama_kategori'=>'required|max:255',
        'jenis_kategori'=>'required|max:255'
        ]);
        if($validasi->fails())
        {
            return redirect()->route('kategori.create',[$id])->withErrors($validasi);
        }
          $kategori->update($data);
          return redirect()->route('kategori.index');
       }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = Kategori::findOrFail($id);
        $data->delete();
        return redirect()->route('kategori.index');
    }
}
