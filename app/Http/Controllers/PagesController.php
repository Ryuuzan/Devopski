<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class PagesController extends Controller
{
    public function home()
    {
        $tasked = [
            'Go to the store',
            'Go to the Market',
            'Go to work'
        ];
        return view('welcome', ['tasks' => $tasked ]);
    }

    public function contact()
    {
        return view('contact',['who'=>request('id')]);
    }

    public function produits()
    {
        $produits = Produit::all();
        return view('produits',['produits'=> $produits]);
    }

    public function ficheproduits()
    {   
        if(isset($_GET['id'])){
            $produit = Produit::where(function($query){
                $query->select('*')
                    ->from('produits')
                    ->where('id',strval($_GET['id']));
            })->get();
            
            return view('ficheproduits',['produit'=> $produit[0]]);
        }
        return redirect('/products');
        
    }
}
