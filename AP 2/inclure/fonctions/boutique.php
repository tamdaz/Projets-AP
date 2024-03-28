<?php

/**
 * Récupérer des informations sur les boutiques de Geekzone.
 * 
 * @return array
 */
function getBoutiqueInfos(): array
{
    $db = new mysqli("localhost", "root", "root", "geekzone_vitrine");
    $output = [];

    $query = $db->query("SELECT * FROM boutique");

    while ($row = $query->fetch_assoc()) {
        $output[] = $row;
    }
    
    return $output;
}