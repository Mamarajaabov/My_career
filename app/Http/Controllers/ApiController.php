<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function getUser(Request $req) {
        try{
            $data = User::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
}
