<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Detail;
use Illuminate\Http\Request;
use Database\Seeders\DetailSeeder;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDetailRequest;
//use App\Http\Controllers\DetailController;
use App\Http\Requests\UpdateDetailRequest;
use App\Models\Report;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = Detail::where('user_id', auth()->user()->id)->first();

        if (auth()->user()->registered) {
            return redirect()->action([DetailController::class, 'show'], [$data->id]);
        }
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Detail::where('user_id', auth()->user()->id)->first();

        //dd($request);

        $validation = $request->validate([
            // 'user_id' => 'required',
            'nama' => 'required|max:255',
            'NIK' => 'required|unique:details|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'nullable',
            'agama' => 'required',
            'gender' => 'required',
            'darah' => 'required',
            'pendidikan' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'riwaya_penyakit' => 'nullable',
            'riwaya_keluarga' => 'nullable',
            'rokok' => 'nullable',
            'miras' => 'nullable'
        ]);

        $validation['user_id'] = auth()->user()->id;


        Detail::create($validation);
        User::where('id', auth()->user()->id)->update(['registered' => true]);

        return redirect()->back()->with('success', 'data sudah di isi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //

        return view('details.view', [
            'data' => Detail::where('user_id', auth()->user()->id)->first(),
            'hasils' => Report::where('user_id', auth()->user()->id)->paginate('2'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailRequest  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailRequest $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }

    public function view()
    {
        $laporan = Report::where('user_id', auth()->user()->id)->paginate(2);

        return view('details.view');
    }
}
