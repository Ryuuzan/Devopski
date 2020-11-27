<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class PagesController extends Controller
{
    public function home()
    {
       
        return view('welcome');
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
                    ->where('id_prod',strval($_GET['id']));
            })->get();
            
            return view('ficheproduits',['produit'=> $produit[0]]);
        }
        return redirect('/products');
        
    }

    public function authentification()
    {
        return view('authentification');
    }
    public function profil()
    {
        if(isset($_POST['pseudo'])&&isset($_POST['mdp'])){
            $user= User::where(function($query){
                $query->select('*')
                ->from('users')
                ->where('name',$_POST['pseudo'])
                ->and('password',$_POST['mdp']);
            })->get();
        return view('profil',['user'=> $user[0]]);
        }
        return redirect('/authentification');
    }
}