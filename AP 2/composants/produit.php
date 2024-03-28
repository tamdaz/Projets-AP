<?php

function creerProduit(array $produit)
{
    [
        'produit_id' => $id,
        'image' => $imgUrl,
        'prix' => $prix,
        'nom' => $nom,
        'libelle' => $categorie,
    ] = $produit;

    $prix = number_format($prix, 2, ',', ' ');

    return "
        <a href='/produit.php?id={$id}' class='geekzone-produit'>
            <img src='/stockage/produits/{$categorie}/{$imgUrl}' width='100%' />
            <h1>{$prix} €</h1>
            <span>{$nom}</span>
            <br />
            <i>Etampes - 91150</i>
        </a>
    ";
}
