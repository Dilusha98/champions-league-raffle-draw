<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\raffel;
use Auth;

class viewController extends Controller
{
    public function index(){

        $data['test'] = 'dilusha';
        $user = Auth::user()->id;

        $is_attempt = User::where('id',$user)->first('is_attempt');

        if ($is_attempt->is_attempt) {
            $data['is_attempt'] = 1;
            $number = $this->getTeamNumber($user);
            $data['team_number'] = $number->number;
        }

        return View::make('home', $data);
        // return view('home');
    }


    public function getTeamNumber($user){

        $number = raffel::where('user_id',$user)->first('number');
        return $number;

    }


    public function fixtures(){

        $data['teams'] = $this->getAllTeams();

        return View::make('fixtures', $data);
    }

    private function getAllTeams(){

        $teams = User::select('users.*', 'raffel.number as raffel_number')
        ->join('raffel', 'users.id', '=', 'raffel.user_id')
        ->get();
        return $teams;

    }
}
