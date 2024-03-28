<?php

/**
 * Permet de filter les produits par le nom, la catégorie et/ou la ville.
 * 
 * @param string $nom
 * @param string $categorie
 * @param string $ville
 * 
 * @return array
 */
function filtreProduits(string $nom, string $categorie, ?string $ville): array
{
    $db = new mysqli("localhost", "root", "root", "geekzone_vitrine");
    $output = [];

    $sql = <<<SQL
        SELECT produit_id, nom, image, prix, categorie, c.libelle AS libelle
        FROM produit p
        INNER JOIN categorie c ON p.categorie = c.categorie_id 
    SQL;

    if (!empty($nom) && !empty($categorie))
        $sql .= "WHERE libelle = '$categorie' AND nom LIKE '$nom'";

    echo $sql;

    $query = $db->query($sql);

    while ($row = $query->fetch_assoc()) {
        $output[] = $row;
    }

    return $output;
}
