
# Movie Quotes App

The Movie Quotes App is written in laravel 9, where the user 
gets random quote dedicated to a specific movie on refresh, additionally
the users can click on movie's title and they'll be taken to that
movie page which contains all qotes with its images for that movie.

Only admin has the ability to upload movies and quotes, admin can
be made with php artisan custom command - create:admin, and there is a
login page for admins only.

The app supports 2 languages, Georgian and English.

## Table of Contents
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Create Admin](#create-admin)
* [Resources](#resources)
* [Commit Rules](#commit-rules) 
* [Database Structure](#database-structure)

## Tech Stack

**Client:** HTML, TailwindCSS

**Server:** Laravel 9, Spatie Translatable Package.


## Getting Started

Clone movie-quotes

```bash
    git clone https://github.com/RedberryInternship/gigi-movie-quotes.git
```
Install composer with terminal

```bash
    composer install
```
Install npm with terminal

```bash
    npm install
```
Host on local server

```bash
    php artisan serve
    npm run dev
```


## Create Admin

Create a new admin
```bash
    php artisan create:admin
```
Enter username
```bash
    username
```
Enter Email
```bash
    email
```
Enter Password
```bash
    password
```

    

## Resources

 - [Figma Design](hhttps://www.figma.com/file/IIJOKK5esgM8uK8pM3D59J/Movie-Quotes?node-id=0%3A1)
 - [Sansation Font](https://www.dafont.com/sansation.font)
 - [Spatie Translatable Package](https://spatie.be/docs/laravel-translatable/v6/introduction)


## Commit Rules
* Add new feature: feat: commit short description
    * Commit Long Description
* Change Desgin: style: commit short description
    * Commit Long Description
* Fix a Bug: fix: commit short description
    * Commit Long Description
* Refactor code without changing functionality: refactor: commit short description
    * Commit Long Description
* Small Changes: chore: commit short description
    * Commit Long Description

Commits are written in present time.

## Database Structure
[Link to the diagram](https://drawsql.app/teams/gigi/diagrams/movie-quotes)
![Diagram](public/images/drawSQL.png)

