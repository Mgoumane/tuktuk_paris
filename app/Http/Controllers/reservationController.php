<?php

namespace App\Http\Controllers;
use App\Models\Option;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulaireReservation($id)
    {
        $uneOption = Option::find($id);
        return view('formulaireReservation')->with('uneOption',$uneOption);
    }

    public function confirmationReservation(Request $request)
    {
        $this->validate($request,[
            'idOptionChoisie'=>'required',
            'dateDepart' =>'required',
            'heureDepart' =>'required',
            'num' =>'required',
            'pointDepart' =>'required',
        ]);
        $newReservation = new Reservation();
        $newReservation ->dateDepart = $request->input('dateDepart');
        $newReservation ->heureDepart = $request->input('heureDepart');
        $newReservation ->numTel = $request->input('num');
        $newReservation ->pointDepart = $request->input('pointDepart');
        $newReservation ->option_id = $request->input('idOptionChoisie');
        $newReservation ->chauffeur_id = 1;
        $id = Auth::id();
        $newReservation ->user_id = $id;

        $newReservation->save();

        return redirect('/')->with('message','Réservation prise en compte!');
    }

    public function displayUserReservations()
    {
        $id = Auth::id();

        $listeUserReservation = Reservation::where('user_id', '=', $id)->get();
        return view('userReservations')->with('listeUserReservation',$listeUserReservation);
    }

    public function formulaireModif($id)
    {
        $unUser = User::find($id);
        return view('modifUtilisateur2')->with('unUser',$unUser);
    }

    public function userModif(Request $request)
    {
        $this->validate($request,[
            'idUser'=>'required',
            'nom' =>'required',
            'mail' =>'required',
        ]);
        $unUser = User::find($request->input('idUser'));
        $unUser->name = $request->input('nom');
        $unUser->email = $request->input('mail');
        $unUser->save();
        return redirect('/userReservations')->with('message','Vos information ont été mis à jour !');
    }

    public function supprimerReservation($id)
    {
        $uneReservation = Reservation::find($id);
        $uneReservation->delete();
        return redirect('/')->with('message','Réservation supprimé!');

    }
}
