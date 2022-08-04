<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Option;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

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

    public function ajouterChauffeur(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required',
            'prenom' =>'required',
            'adresse' =>'required',
            'telephone' =>'required',
            'dateEntree' =>'required',
            'email' =>'required',
            'mdp' =>'required',
        ]);

        $newChauffeur = new Chauffeur();
        $newChauffeur->nom = $request->input('nom');
        $newChauffeur->prenom = $request->input('prenom');
        $newChauffeur->adresse = $request->input('adresse');
        $newChauffeur->telephone = $request->input('telephone');
        $newChauffeur->dateEntree = $request->input('dateEntree');
        $newChauffeur->email = $request->input('email');
        $newChauffeur->mdp = bcrypt($request->input('mdp'));
        $newChauffeur->save();

        //Retour à la page
        $allReservations = Reservation::GET();
        $allUsers = User::GET();
        $allChauffeurs = Chauffeur::GET();
        $allOptions = Option::GET();


        return redirect('/espaceAdmin')->with('message','Chauffeur ajouté !');
    }

    public function formAjoutOption()
    {
        return view('ajoutOption');
    }

    public function ajouterOption(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required',
            'prix' =>'required',
            'duree' =>'required',
            'description' =>'required',
            'image' =>'required',
        ]);
        //récupère le nom du fichier avec son extension
        $fileNameWithExt = $request->file("image")->getClientOriginalName();
        //récupère le nom du fichier
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //récupère l'extension
        $extension = $request->file("image")->getClientOriginalExtension();
        //Le nom à stocker dans la base de donnée
        $fileNameToStore = $fileName.".".$extension;
        //upload du fichier dans le dossier Images
        $request->image->move(public_path('Images/images_option'),$fileNameToStore);

        $newOption = new Option();
        $newOption->nom = $request->input('nom');
        $newOption->prix = $request->input('prix');
        $newOption->duree = $request->input('duree');
        $newOption->description = $request->input('description');
        $newOption->image = $fileNameToStore;
        $newOption->save();
        return redirect('/espaceAdmin')->with('message','Nouvelle préstation ajouté !');
    }

    public function formModifUser($id){
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

    public function formModifChauffeur($id)
    {
        $unChauffeur = Chauffeur::find($id);
        return view('modifierChauffeur')->with("unChauffeur",$unChauffeur);
    }

    public function modifierChauffeur(Request $request)
    {
        $this->validate($request,[
            'idChauffeur' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'dateEntree' => 'required',
        ]);
        $unChauffeur = Chauffeur::find($request->input('idChauffeur'));
        $unChauffeur->nom = $request->input('nom');
        $unChauffeur->prenom = $request->input('prenom');
        $unChauffeur->adresse = $request->input('adresse');
        $unChauffeur->telephone = $request->input('telephone');
        $unChauffeur->dateEntree = $request->input('dateEntree');
        $unChauffeur->save();
        return redirect('/espaceAdmin')->with('message','Chauffeur modifié !');
    }

    public function formModifOption($id)
    {
        $uneOption = Option::find($id);
        return view('modifierOption')->with("uneOption",$uneOption);
    }

    public function modifierOption(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required',
            'prix' =>'required',
            'duree' =>'required',
            'description' =>'required',
        ]);

        $uneOption = Option::Find($request->input('idUser'));
        if($request->hasFile("image")){
            //récupère le nom du fichier avec son extension
            $fileNameWithExt = $request->file("image")->getClientOriginalName();
            //récupère le nom du fichier
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //récupère l'extension
            $extension = $request->file("image")->getClientOriginalExtension();
            //Le nom à stocker dans la base de donnée
            $fileNameToStore = $fileName.".".$extension;
            //upload du fichier dans le dossier Images
            $request->image->move(public_path('Images/images_option'),$fileNameToStore);
            $uneOption->image = $fileNameWithExt;
        };
        $uneOption->nom = $request->input('nom');
        $uneOption->prix = $request->input('prix');
        $uneOption->duree = $request->input('duree');
        $uneOption->description = $request->input('description');
        $uneOption ->save();
        return redirect('/espaceAdmin')->with('message',' Préstation modifié !');
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
        return redirect('/espaceAdmin')->with('message_delete','Chauffeur supprimé !');
    }

    public function supprimerOption($id)
    {
        $uneOption = Option::find($id);
        $uneOption->delete();
        return redirect('/espaceAdmin')->with('message_delete','Préstation supprimé !');
    }
}
