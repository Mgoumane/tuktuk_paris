<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Option;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function afficherInfos()
    {

        $allReservations = Reservation::GET();
        $allUsers = User::GET();
        $allChauffeurs = Chauffeur::GET();
        $allOptions = Option::GET();
        return view('espaceAdmin')->with("allReservations",$allReservations)->with("allUsers",$allUsers)->with("allChauffeurs",$allChauffeurs)->with("allOptions",$allOptions);
    }

    public function afficherFormAjout()
    {
        return view('ajoutChauffeur');
    }

    public function afficherFormModif($id){
        $unUser = User::find($id);
        return view('modifierUtilisateur')->with("unUser",$unUser);
    }

    public function modifierUtilisateur(Request $request){
        $this->validate($request,[
            'idUser'=>'required',
            'nom' =>'required',
            'mail' =>'required',
        ]);
        $unUser = User::find($request->input('idUser'));
        $unUser->name = $request->input('nom');
        $unUser->email = $request->input('mail');
        $unUser->save();

        //Retour à la page
        $allReservations = Reservation::GET();
        $allUsers = User::GET();
        $allChauffeurs = Chauffeur::GET();
        $allOptions = Option::GET();
        return view('espaceAdmin')->with("allReservations",$allReservations)->with("allUsers",$allUsers)->with("allChauffeurs",$allChauffeurs)->with("allOptions",$allOptions);


    }

    public function supprimerUtilisateur($id)
    {
        $unUser = User::find($id);
        $unUser->delete();
        return redirect('/espaceAdmin')->with('message',"L'utilisateur a été supprimer !");
    }

    public function supprimerChauffeur($id)
    {
        $unChauffeur = Chauffeur::find($id);
        $unChauffeur->delete();
        return redirect('/espaceAdmin');
    }
}
