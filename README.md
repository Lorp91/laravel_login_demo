# LoginDemo

## Beschreibung

In diesem Projekt geht es um eine Uebungsaufgabe zum Thema Login in Laravel.

## Vorraussetzungen

- PHP + Composer
- Docker + Docker Compose
- optional: PostgreSQL Datenbank

## Installation

1. `.env` einrichten(`.env.example` kopieren und das "example" entfernen)
2. `composer install` um Composer Abhaengigkeiten zu installieren
3. `./vendor/bin/sail up -d` um Docker-Container zu starten
4. `./vendor/bin/sail artisan migrate` fuer die Datenbank-migration
5. Optional: Vite fuer HMR(Hot Module Replacement)
    - `./vendor/bin/sail npm i` packages installieren
    - `./vendor/bin/sail npm run dev` vite starten

Danach sollte die App auf `http://localhost:80` erreichbar sein.

## Funktionalitaeten

- Registrierung und Login mit Fehlermeldung
- Weiterleitung nach Login zu geschuetzten Routen

## Techstack

- Laravel
- PostgreSQL
- Tailwindcss
