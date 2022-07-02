<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('admin');
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        // $validation['user_id'] = auth()->user()->id;
        // dd($validation);
        $user = User::where('name', $request->name)->first();


        $validateReport = $request->validate([
            "berat" => 'required',
            "tinggi" => 'required',
            "lingkar_lengan" => 'required',
            "lingkar_perut" => 'required',
            "tekanan_darah" => 'required',
            "hb" => 'required',
            "gula_darah" => 'required',
        ]);
        // // $user = User::where('name', 'LIKE', '%' . $request->name . '%')->get()->keyBy('id');
        $validateReport['user_id'] = $user->id;
        Report::create($validateReport);

        $request->session()->flash('success', 'Data Berhasi disimpan');

        return redirect('/reports/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
