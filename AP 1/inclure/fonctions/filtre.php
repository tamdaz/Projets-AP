<?php

if (empty($_GET['nom']) && empty($_GET['categorie']) && empty($_GET['ville'])) {
    $produits_filtres = $produits; 
} else {
    $produits_filtres = array_filter($produits, function ($produit) use ($produits) {
        [$filtrer_categorie, $recherche_produit, $recherche_ville] = [
            strtolower($produit['categorie']) === strtolower($_GET['categorie']),
            str_starts_with(
                strtolower($produit['nom']),
                strtolower($_GET['nom'] ?? "")
            ),
            strtolower($produit['ville']) === strtolower($_GET['ville'] ?? ""),
        ];

        if (!empty($_GET['categorie']) && !empty($_GET['nom']))
            return $filtrer_categorie && $recherche_produit;
        else if (!empty($_GET['nom']) && !empty($_GET['ville']))
            return $recherche_produit && $recherche_ville;
        else if (!empty($_GET['categorie']) && !empty($_GET['ville']))
            return $filtrer_categorie && $recherche_ville;

        if (!empty($_GET['nom'])) return $recherche_produit;
        if (!empty($_GET['categorie'])) return $filtrer_categorie;
        if (!empty($_GET['ville'])) return $recherche_ville;
    });
}