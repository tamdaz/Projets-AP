<?php

function creerProduit(array $produit)
{
    [
        'id' => $id,
        'image' => $imgUrl,
        'prix' => $prix,
        'nom' => $nom,
        'categorie' => $categorie,
        'ville' => $ville,
        'code_postal' => $code_postal
    ] = $produit;

    $prix = number_format($prix, 2, ',', ' ');

    return "
        <a href='/produit.php?id={$id}' class='geekzone-produit'>
            <img src='/assets/img/produits/{$categorie}/{$imgUrl}' width='100%' />
            <h1>{$prix} €</h1>
            <span>{$nom}</span>
            <br />
            <i>{$ville} - {$code_postal}</i>
        </a>
    ";
}
