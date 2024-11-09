<?php
// Servicios de Hostea.cl (arriendo de servidores de videojuegos)
function getServices() {
    return [
        [
            "id" => 1,
            "name" => "Servidor Minecraft Básico",
            "description" => "Servidor dedicado para Minecraft con 2 GB de RAM, ideal para servidores pequeños de hasta 10 jugadores. Con soporte 24/7 y administración fácil.",
            "category" => "Arriendo de Servidores",
            "price" => "$8.000 CLP/mes",
            "provider" => "Hostea.cl",
            "features" => [
                "2 GB de RAM",
                "Hasta 10 jugadores simultáneos",
                "Instalación de plugins y mods",
                "Panel de control fácil de usar",
                "Soporte técnico 24/7"
            ]
        ],
        [
            "id" => 2,
            "name" => "Servidor Minecraft Avanzado",
            "description" => "Servidor dedicado para Minecraft con 4 GB de RAM, ideal para servidores de mediana escala, hasta 50 jugadores. Soporte para mapas personalizados.",
            "category" => "Arriendo de Servidores",
            "price" => "$18.000 CLP/mes",
            "provider" => "Hostea.cl",
            "features" => [
                "4 GB de RAM",
                "Hasta 50 jugadores simultáneos",
                "Mapas personalizados",
                "Instalación de plugins y mods",
                "Soporte técnico 24/7",
                "Panel de administración avanzado"
            ]
        ],
        [
            "id" => 3,
            "name" => "Servidor CSGO",
            "description" => "Servidor dedicado para Counter-Strike: Global Offensive con 8 GB de RAM, optimizado para una experiencia sin lag. Ideal para equipos competitivos.",
            "category" => "Arriendo de Servidores",
            "price" => "$22.000 CLP/mes",
            "provider" => "Hostea.cl",
            "features" => [
                "8 GB de RAM",
                "Optimización para 10 jugadores",
                "Soporte para mapas personalizados",
                "Instalación de plugins y mods",
                "Soporte técnico 24/7",
                "Alta disponibilidad y servidores sin lag"
            ]
        ],
        [
            "id" => 4,
            "name" => "Servidor L4D2",
            "description" => "Servidor dedicado para Left 4 Dead 2, con 6 GB de RAM, ideal para partidas en equipo y servidores personalizados con mapas adicionales.",
            "category" => "Arriendo de Servidores",
            "price" => "$15.000 CLP/mes",
            "provider" => "Hostea.cl",
            "features" => [
                "6 GB de RAM",
                "Soporte para mapas personalizados",
                "Servidor optimizado para 10 jugadores",
                "Soporte técnico 24/7",
                "Panel de administración fácil de usar"
            ]
        ],
        [
            "id" => 5,
            "name" => "Servidor VPS para Videojuegos",
            "description" => "Servidor privado virtual (VPS) para múltiples juegos, con 16 GB de RAM, ideal para clanes grandes o servidores con múltiples juegos.",
            "category" => "Arriendo de Servidores",
            "price" => "$45.000 CLP/mes",
            "provider" => "Hostea.cl",
            "features" => [
                "16 GB de RAM",
                "Para múltiples servidores de juegos",
                "Instalación de juegos y mods personalizados",
                "Panel de administración avanzado",
                "Soporte técnico 24/7",
                "Optimización para servidores sin lag"
            ]
        ]
    ];
}
?>
