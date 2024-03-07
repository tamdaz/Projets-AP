<?php

function creerProduit(array $produit)
{
    [
        'id' => $id,
        'image' => $imgUrl,
        'prix' => $prix,
        'nom' => $nom,
        'categorie' => $categorie
    ] = $produit;

    $prix = number_format($prix, 2, ',', ' ');

    return "
        <a href='/produit.php?id={$id}' class='geekzone-produit'>
            <img src='/assets/img/produits/{$categorie}/{$imgUrl}' width='100%' />
            <h1>{$prix} €</h1>
            <span>{$nom}</span>
        </a>
    ";
}
