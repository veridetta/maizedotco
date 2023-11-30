<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PenyakitController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PenyakitController extends Controller
{
    public function index()
    {
        return view('jenis_penyakit_admin.index');
    }

    public function getAllPenyakit()
    {
        try {
            $response = Http::get('https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/getallpenyakit');

            if ($response->successful()) {
                $data = $response->json();

                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Error fetching data from the API.'], 500);
            }
        } catch (\Exception $e) {
            \Log::error('Error fetching data from the API: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error.'], 500);
        }
    }

    public function delete($id)
    {
        // Temukan data berdasarkan ID
        $response = Http::delete('https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/deletePenyakitById?id='.$id,);

        if (!$response) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
