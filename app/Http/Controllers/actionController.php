<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\raffel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class actionController extends Controller
{
    public function raffel(Request $request){

        $user = Auth::user()->id;

        try {

            DB::beginTransaction();

            $takenNumbers = raffel::pluck('number')->toArray();
            $availableNumbers = range(1, 16);
            $availableNumbers = array_diff($availableNumbers, $takenNumbers);
            $randomNumber = $availableNumbers[array_rand($availableNumbers)];

            $data = array(
                'user_id'      => $user,
                'number'    =>  $randomNumber,
            );
            raffel::insert($data);
            User::where('id',$user)->update(['is_attempt'=>1]);
            DB::commit();

            return response()->json(['number' => $randomNumber]);

        } catch (\Throwable $e) {
            DB::rollback();
            return response()->json($e->getMessage());
        }
    }
}
