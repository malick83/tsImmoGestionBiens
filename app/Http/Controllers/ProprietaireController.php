<?php

namespace App\Http\Controllers;

use App\Enum\ProprietaireSexeEnum;
use App\Enum\ProprieteTypeEnum;
use App\Models\Personne;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
// use App\Enum\ProprietaireSexeEnum;

class ProprietaireController extends Controller
{
    //
    public function index()
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaire.index', ['proprietaires' => $proprietaires]);
    }
    public function delete($id)
    {
        $data = Proprietaire::find($id);
        $data->delete();
        return redirect()->route('proprietaires.create');

    }

    public function store(Request $request) {

        $personne = Personne::create([
            'prenom' => $request->input('prenom'),
            'nom' => $request->input('nom'),
            'telephone' => $request->input('telephone'),
        ]);
        $last = $personne->id;
        Proprietaire::create([
            'cni' => $request->input('cni'),
            'sexe' => $request->input('sexe'),
            'dateNaissance' => $request->input('dateNaissance'),
            'lieuNaissance' => $request->input('lieuNaissance'),
            'personne_id' => $last,
        ]);
        return redirect()->route('proprietaires.create');
    }
    public function create() {
        $proprietaires = Proprietaire::all();
        $sexe = array(
            'homme' => ProprietaireSexeEnum::HOMME,
            'femme' => ProprietaireSexeEnum::FEMME
        );
        return view('proprietaire.create', ['sexe' => $sexe, 'proprietaires' => $proprietaires]);
    }
}
