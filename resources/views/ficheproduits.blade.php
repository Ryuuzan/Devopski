@extends('layout')

@section('title','Fiche Produits')

@section('content')
    <h1>Fiche produit</h1>
    <?= $produit->title; ?>
    <?= $produit->description; ?>
@endsection