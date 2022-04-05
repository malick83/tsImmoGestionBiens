<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    //
    public function index()
    {
        $propriete = Propriete::all();
        return view('propriete.index', ['propriete' => $propriete]);
    }
}
