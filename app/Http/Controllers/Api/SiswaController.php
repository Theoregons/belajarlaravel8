<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response(
            [
                'message' => "data berhasil ditampilkan",
                'data' => Siswa::all()
            ]
        );

        // return response(
        //     [
        //         "code" => 200,
        //         "response" => [
        //             "message" => "success",
        //             "data" => Siswa::all()
        //         ]
        //     ], 200
        // );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer'
        ]);

        return response(
            [
                'message' => "data berhasil ditambah",
                'data' => Siswa::create($validator)
            ], 201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = response(
                [
                    'message' => "data berhasil ditampilkan",
                    'data' => Siswa::findOrFail($id)
                ]
            );
        } catch (\Throwable $th) {
            $data = response(
                [
                    'message' => "data tidak ditampilkan",
                ]
            );
        }

        return response($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer'
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response(
            [
                'message' => "data berhasil diubah",
                'data' => $data
            ], 200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return response([
                'message' => "data berhasil dihapus"
        ], 200);
    }
}
