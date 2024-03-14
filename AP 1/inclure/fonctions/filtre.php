<?php

if (isset($_GET['categorie']) && isset($_GET['nom']) && isset($produits)) {
    $produits_filtres = array_filter($produits, function ($produit) {
        [$filtrer_categorie, $recherche_produit, $recherche_ville] = [
            strtolower($produit['categorie']) === strtolower($_GET['categorie']),
            str_starts_with(
                strtolower($produit['nom']),
                strtolower($_GET['nom'])
            ),
            strtolower($produit['categorie']) === strtolower($_GET['categorie']),
        ];
    
        if (empty($_GET['categorie'])) {
            return $recherche_produit;
        } else if (empty($_GET['nom'])) {
            return $filtrer_categorie;
        }
    });
} else {
    $produits_filtres = $produits;
}