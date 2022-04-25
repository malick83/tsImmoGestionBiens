<?php

namespace App\Http\Controllers;

use App\Enum\ProprieteTypeEnum;
use App\Models\Agence;
use App\Models\Proprietaire;
use App\Models\Propriete;
use App\Models\Quartier;
use Illuminate\Http\Request;


class ProprieteController extends Controller
{
    //
    public function index()
    {
        $proprietes = Propriete::all();
        return view('propriete.index', ['proprietes' => $proprietes]);
    }

    public function show (Propriete $propriete)
    {
        return view('propriete.show', ['propriete' => $propriete]);
    }

    public function showdata($id)
    {
        $propriete = Propriete::find($id);
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();
        $agences = Agence::all();
        $types = array(
            'immeuble' => ProprieteTypeEnum::IMMEUBLE,
            'appartement' => ProprieteTypeEnum::APPARTEMENT,
            'villa' => ProprieteTypeEnum::VILLA
        );
        return view('propriete.update', ['propriete' => $propriete, 'types' => $types, 'proprietaires' => $proprietaires, 'agences' => $agences, 'quartiers' => $quartiers]);
    }
    public function update(Request $request, $propriete)
    {
        $propriete = Propriete::find($propriete);
        $propriete->nom = $request->input('nom');
        $propriete->typePropriete = $request->input('typePropriete');
        $propriete->superficie = $request->input('superficie');
        $propriete->nombreEtage = $request->input('nombreEtage');
        $propriete->nombrePiece = $request->input('nombrePiece');
        $propriete->adresse = $request->input('adresse');
        $propriete->description = $request->input('description');
        $propriete->proprietaire_id = $request->input('proprietaire_id');
        $propriete->agence_id = $request->input('agence_id');
        $propriete->update();
        
        return redirect()->route('proprietes.index');
    }

    public function delete($id)
    {
        $data = Propriete::find($id);
        $data->delete();
        return redirect()->route('proprietes.index');

    }

    public function store(Request $request) {
        

        $inputsData = $request->all();
        

        Propriete::create($inputsData);
        return redirect()->route('proprietes.index');
    }
    public function create() {
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();
        $agences = Agence::all();
        $types = array(
            'immeuble' => ProprieteTypeEnum::IMMEUBLE,
            'appartement' => ProprieteTypeEnum::APPARTEMENT,
            'villa' => ProprieteTypeEnum::VILLA
        );

        return view('propriete.create', ['types' => $types, 'proprietaires' => $proprietaires, 'agences' => $agences, 'quartiers' => $quartiers]);
    }
}
