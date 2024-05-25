<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Processus;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidatureConfirmation;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllCandidatures()
    {   
        $candidatures = Candidature::latest()->get();
        return view('candidature.index',compact('candidatures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddCandidatures($id)
    {
        $offre = Offre::findOrFail($id);
        $process = Processus::latest()->get();
        return view('frontend.home.candidature',compact('offre', 'process'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AddCandidature(Request $request)
    {
        // Valider les données entrantes
        $validatedData = $request->validate([
            'offre_id' => 'required|exists:offres,id', // Assurez-vous que l'offre_id existe dans la table offres
            'process_id' => 'required|integer', // Assurez-vous que process_id est un entier
            'cand_prenom' => 'required|string|max:100',
            'cand_name' => 'required|string|max:100',
            'cand_email' => 'required|email',
            'cand_num' => 'required|string|max:12',
            'cand_cv' => 'required|file|max:10240|mimes:pdf,doc,docx',
            'cand_school_lvl' => 'required|string', // Ajoutez cette ligne pour valider le champ
            'cand_work_exp' => 'required|integer',
            'cand_motiv_message' => 'required|string', // Limitez les types de fichiers autorisés et la taille maximale
        ]);
    
        // Traitement du fichier CV
        $cv = $request->file('cand_cv');
        $cvName = time().'.'.$cv->getClientOriginalExtension();
        $cv->move(public_path('cvs'), $cvName);
    
        // Créer une nouvelle instance de Candidature avec les données validées
        $candidature = new Candidature;
        $candidature->offre_id = $validatedData['offre_id'];
        $candidature->process_id = $validatedData['process_id'];
        $candidature->cand_prenom = $validatedData['cand_prenom'];
        $candidature->cand_name = $validatedData['cand_name'];
        $candidature->cand_email = $validatedData['cand_email'];
        $candidature->cand_num = $validatedData['cand_num'];
        $candidature->cand_cv = $cvName;
        $candidature->cand_school_lvl = $validatedData['cand_school_lvl']; // Enregistrez le niveau d'études
        $candidature->cand_work_exp = $validatedData['cand_work_exp'];
        $candidature->cand_motiv_message = $validatedData['cand_motiv_message'];
        $candidature->save();
    
        // Générer l'URL publique pour le CV
        $cvUrl = url('cvs/'.$cvName);
    
        // Rediriger avec un message de succès
        notify()->success('Votre candidature a été soumise avec succès.');
    
        return redirect('/');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Candidature $candidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidature $candidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidature $candidature)
    {
        //
    }

    public function viewCV($id)
    {
        $cv = Candidature::find($id);
        return view('candidature.cv',compact('cv'));
    }


    public function getRatings()
    {
        $ratings = Candidature::select('id', 'rating')->get()->pluck('rating', 'id');
        return response()->json($ratings);
    }

    public function rate(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'candidature_id' => 'required|exists:candidatures,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Find the candidature by ID
        $candidature = Candidature::find($request->candidature_id);

        // Update the rating
        $candidature->rating = $request->rating;
        $candidature->save();

        // Return a success response
        return response()->json(['success' => true]);
    }
}
