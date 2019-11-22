<?php

namespace App\Http\Controllers;

use App\Republic;
use Illuminate\Http\Request;

class RepublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $republics = Republic::all();

        if ($republics->count() == 0)
            return response()->json([
                'success' => false,
                'message' => 'Nenhuma república foi encontrada :/',
                "body" => null
            ], 400);

        return response()->json([
            'success' => true,
            'message' => 'Repúblicas encontradas!',
            "body" => $republics
        ], 200);
    }

    public function filter(Request $request){
        $query  = $request->query();

         $republics = Republic::where('name', 'LIKE',"%{$query['term']}%")
         ->orWhere('city', 'LIKE',"%{$query['term']}%")
         ->orWhere('state', 'LIKE',"%{$query['term']}%")
         ->orWhere('description', 'LIKE',"%{$query['term']}%")->get();

        if ($republics->count() == 0){
              return response()->json([
                'success' => false,
                'message' => 'Nenhuma república foi encontrada :/',
                "body" => null
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => 'Repúblicas encontradas!',
            "body" => $republics
        ], 200);
    }
}