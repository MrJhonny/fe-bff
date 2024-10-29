# Proyecto LAMP con Docker y Docker Compose

Este proyecto configura un entorno de desarrollo LAMP (Linux, Apache, MySQL, PHP) usando Docker y Docker Compose. Proporciona un servidor Apache con PHP 7.4 y una base de datos MySQL 5.7.

## Requisitos

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

# Iniciar los Contenedores

Ejecuta el siguiente comando para levantar el entorno de desarrollo.


# Estructura del Proyecto

```
.
├── apache-config.conf       # Configuración personalizada de Apache
├── docker-compose.yml       # Archivo de configuración de Docker Compose
├── Dockerfile               # Dockerfile para construir la imagen PHP/Apache
└── html/                    # Carpeta para el código fuente PHP
