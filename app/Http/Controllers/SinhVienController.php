<?php

namespace App\Http\Controllers;

use App\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = SinhVien::all();
        return view("students.index", ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SinhVien  $sinhVien
     * @return \Illuminate\Http\Response
     */
    public function show(SinhVien $sinhVien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SinhVien  $sinhVien
     * @return \Illuminate\Http\Response
     */
    public function edit(SinhVien $sinhVien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SinhVien  $sinhVien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SinhVien $sinhVien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SinhVien  $sinhVien
     * @return \Illuminate\Http\Response
     */
    public function destroy(SinhVien $sinhVien)
    {
        //
    }
}
