<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Produk;
use Validator;

class ProdukController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = Produk::with('kategori')->paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $produk = Produk::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::with('kategori')->get();
        $kategori = Kategori::all();
        // $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
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
        $model = new Produk;
        $model->nama_produk = $request->nama_produk;
        $model->harga = $request->harga;
        $model->stok= $request->stok;
        $model->id_kategoris = $request->id;

        $validasi = Validator::make($data,[
            'nama_produk'=>'required|max:255',
            'harga'=>'required|max:255',
            'stok'=>'required|max:255',
            'id'=>'required|max:255',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('produk.create')->withInput()->withErrors($validasi);
        }

       // $data['password'] = bcrypt($data['password']);
        // Produk::create($data);
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('produk.edit',compact('produk','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $data = $request->all();
        $validasi = Validator::make($data,[
            'nama_produk'=>'required|max:255',
            'harga'=>'required|max:255',
            'stok'=>'required|max:255',
            'id'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('produk.create',[$id])->withErrors($validasi);
        }
          $produk->update($data);
          return redirect()->route('produk.index');
       }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id_produk)
    {
        $data = Produk::findOrFail($id_produk);
        $data->delete();
        return redirect()->route('produk.index');
    }
}
?>
