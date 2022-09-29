<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Pembayaran;
use Validator;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pembayaran = Pembayaran::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $pembayaran = Pembayaran::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembayaran = DB::table('pembayarans')->get();
        return view('pembayaran.create', compact('pembayaran'));
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
        $model = new Pembayaran;
        $model->tgl_pembayaran = $request->tgl_pembayaran;
        $model->total_bayar= $request->total_bayar;
        $model->jenis_pembayaran= $request->jenis_pembayaran;

        // $validasi = Validator::make($data,[
        //     'id_pembayaran'=>'required|max:255',
        //     'tanggal'=>'required|max:255',
        //     'total'=>'required|max:255',
        //     'jenis'=>'required|max:255',
        // ]);
        // if($validasi->fails())
        // {
        //     return redirect()->route('pembayaran.create')->withInput()->withErrors($validasi);
        // }

       // $data['password'] = bcrypt($data['password']);
        // Pembayaran::create($data);
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('pembayaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */
    public function show($id_product)
    {
        $pembayaran = Pembayaran::findOrFail($id_product);
        return view('pembayaran.show',compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */

    public function edit($id_pembayaran)
    {
        $pembayaran = Pembayaran::findOrFail($id_pembayaran);
        return view('pembayaran.edit',compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id_pembayaran)
    {
        $pembayraan = Pembayaran::findOrFail($id_pembayaran);
        $data = $request->all();
        $validasi = Validator::make($data,[
            'tgl_pembayaran'=>'required|max:255',
            'total_bayar'=>'required|max:255',
            'jenis_pembayaran'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('pembayaran.create',[$id_pembayaran])->withErrors($validasi);
        }
          $pembayaran->update($data);
          return redirect()->route('pembayaran.index');
       }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id_pembayaran)
    {
        $data = Pembayaran::findOrFail($id_pembayaran);
        $data->delete();
        return redirect()->route('pembayaran.index');
    }
}
