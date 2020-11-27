@extends('layout')

@section('title','Fiche Produits')

@section('content')
    <h1>Fiche produit</h1>
    <?= $produit->prod_nom; ?>
    <?= $produit->prod_description; ?>
    <?= $produit->prod_prix; ?>
    <?= $produit->prod_stock; ?>
    <?= $produit->prod_marque; ?>
    <img src="<?= $produit->prod_image; ?>">
@endsection