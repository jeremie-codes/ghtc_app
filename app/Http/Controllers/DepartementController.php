<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\DepartementResource;
use App\Models\Departement;
use App\Models\User;

class DepartementController extends Controller
{
    
    public function index()
    {
        $departements = Departement::all(); // Utilisation du modèle pour obtenir les données
        $users = User::all();

        return view('index', [
            'departements' => $departements,
            'users' => $users
        ]);
    }
    
     public function aboutMember()
    {
        $departements = Departement::all(); // Utilisation du modèle pour obtenir les données
        $users = User::all();

        return view('about', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $departement = Departement::findOrFail($id);
        $departements = Departement::all();
        
        return view('department', [
            'departements' => $departements,
            'departement' => $departement
        ]);
    }
    
    
}