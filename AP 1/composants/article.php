<?php

function creerArticle(string $urlImage, string $title, int $price) {
    echo <<<HTML
        <div class="geekzone-article">
            <img src="{$urlImage}" alt="article" />
            <h1>{$title}</h1>
            <h2>{$price}</h2>
        </div>
    HTML;
}