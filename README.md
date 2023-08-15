# Laravel Test - Monzales

Welcome to the documentation for the Laravel Test. This document provides a brief overview of the project and outlines the steps to get the project up and running.

## Table of Contents

- [Project Overview](#project-overview)
- [Getting Started](#getting-started)
  - [Clone the Repository](#clone-the-repository)
  - [Environment Setup](#environment-setup)
  - [Dependencies Installation](#dependencies-installation)
  - [Database Setup](#database-setup)
  - [Run Migrations](#run-migrations)
  - [Compile Assets](#compile-assets)
  - [Start the Development Server](#start-the-development-server)

## Project Overview

This is a brief laravel test for CubeOwl.

## Getting Started

Follow these steps to set up and run the project locally on your machine.

## Clone the Repository
```
git clone https://github.com/IzatheGreat15/laravel-test-monzales.git
cd laravel-test-monzales
```

## Environment Setup

Copy the .env.example file to .env:

```
cp .env.example .env
```

Edit the .env file and configure your database and other environment settings.

## Dependencies Installation

Install composer and npm (or yarn) dependencies

```
composer install
npm install
```

## Database Setup

Create a new database based on the database name in the .env file

## Run Migrations

```
php artisan migrate
```

## Compile Assets

Compile frontend assets:

```
npm run dev
```

## Start the Development Server

Start the Laravel development server:

```
php artisan serve
```

Visit http://127.0.0.1:8000 in your web browser to view the application.


