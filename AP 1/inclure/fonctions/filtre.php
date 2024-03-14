<?php

$produits_filtres = array_filter($produits, function ($produit) {
    [$filtrer_categorie, $recherche_produit] = [
        $produit['categorie'] === $_GET['categorie'],
        str_starts_with(
            strtolower($produit['nom']),
            strtolower($_GET['nom'])
        )
    ];

    if (empty($_GET['categorie'])) {
        return $recherche_produit;
    } else if (empty($_GET['nom'])) {
        return $filtrer_categorie;
    }
});