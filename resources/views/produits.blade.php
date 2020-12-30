@extends('layout')

@section('title','Liste Produits')

@section('content')
    <h1>Liste des produits</h1>
    <table>
        <tr>
            <th>Produit</th>
            <th>Description</th>
        </tr>      
        @foreach ($produits as $produit)
        <tr>
        <td><a href='/products/ficheproduits?id=<?= $produit->id_prod; ?>'><?= $produit->prod_nom; ?></a></td><td><?= $produit->prod_description; ?></td>
        </tr>
        @endforeach
    </table>
    
  
@endsection