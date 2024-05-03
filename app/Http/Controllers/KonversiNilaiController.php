<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonversiNilaiController extends Controller
{
    public function konversiNilai(Request $request)
    {
        // Validasi input
        $request->validate([
            'nilai_partisipasi' => 'required|numeric|between:0,100',
            'nilai_tugas' => 'required|numeric|between:0,100',
            'nilai_uts' => 'required|numeric|between:0,100',
            'nilai_uas' => 'required|numeric|between:0,100',
        ], [
            'required' => 'Nilai :attribute tidak boleh kosong!',
            'numeric' => 'Nilai :attribute harus berupa angka!',
            'between' => 'Nilai :attribute harus dalam rentang 0 - 100!',
        ], [
            'nilai_partisipasi' => 'Partisipasi',
            'nilai_tugas' => 'Tugas',
            'nilai_uts' => 'UTS',
            'nilai_uas' => 'UAS',
        ]);

        // Menghitung nilai akhir (NA)
        $na = (($request->nilai_partisipasi * 2) + ($request->nilai_tugas * 3) + ($request->nilai_uts * 2) + ($request->nilai_uas * 3)) / 10;

        // Mengonversi nilai huruf (NH) sesuai ketentuan Unesa
        if ($na >= 85) {
            $nh = 'A';
        } elseif ($na >= 80) {
            $nh = 'A-';
        } elseif ($na >= 75) {
            $nh = 'B+';
        } elseif ($na >= 70) {
            $nh = 'B';
        } elseif ($na >= 65) {
            $nh = 'B-';
        } elseif ($na >= 60) {
            $nh = 'C+';
        } elseif ($na >= 55) {
            $nh = 'C';
        } elseif ($na >= 40) {
            $nh = 'D';
        } else {
            $nh = 'E';
        }

        // Mengembalikan nilai akhir (NA) dan nilai huruf (NH) beserta pemberitahuan
        return view('hasil_konversi', compact('na', 'nh'))->with('success', 'Konversi nilai berhasil.');
    }
}