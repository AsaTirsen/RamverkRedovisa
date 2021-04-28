<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "class" => "my-navbar",

    // Here comes the menu items/structure
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "IP-check",
            "url" => "ip_view",
            "title" => "Kontrollera en IP-adress",
        ],
        [
            "text" => "IP-JSON-check",
            "url" => "ip_json_view",
            "title" => "Kontrollera en IP-adress",
        ],
        [
            "text" => "GEO-IP-JSON-check",
            "url" => "geo_ip_json_view",
            "title" => "Kontrollera en IP-adress",
        ],
        [
            "text" => "GEO-IP-check",
            "url" => "geo_ip_view",
            "title" => "Kontrollera en IP-adress",
        ],
    ],
];
