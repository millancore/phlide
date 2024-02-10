# Plide

![Laravel](.brands/laravel.svg) +
![Reveal](.brands/reveal-white-text.svg) +
![Tailwind](.brands/tailwindcss.svg) 

Plide is composer that uses  [Laravel Blade](https://laravel.com/docs/10.x/blade#main-content), [Reveal.js](https://revealjs.com/) and [Tailwind CSS](https://tailwindcss.com/docs) to create beautiful presentations.

### Install

Clone the repository and run the following command to install the package.

```bash
composer install
```

```bash
npm install
```

## Usage

### Create
```bash
php Plide new <presentation-name>
```
This creates a folder in the `presentations` directory with the name of the presentation.
The folder contains the following files:

- `index.blade.php` - The main file for the presentation
-  A class file for the presentation (optional)
-  You can create folder for images, styles, Markdown files, etc.

### Show 
```bash
php Plide show <presentation-name>
```
This command starts a local server and opens the presentation in the browser.

> [!IMPORTANT]
> Run `npm run watch` to compile tailwind styles while you are working on the presentation.

### Export
```bash
php Plide export <presentation-name>
```

This command exports the presentation to a folder in the `exports` directory. 
this folder only contains **html** and compiled asset for presentation, ready to use
without need a server.

>only need open `index.html` in your browser.   

## Compose Presentation

```php
@extends('layouts.reveal')

@section('content')
    <x-slide>
       <h1 class="text-6xl">Plide</h1>
       <p class="text-2xl">
            Beating the hell out of PowerPoint
       </p>
    </x-slide>
@endsection
```

### Components
- `<x-slide>` is a component that wraps the content of a slide.
- `<x-code>` is a component that wraps the content of a code block.

### Variables

You can create a class with the same name of presentation

```php
namespace Presentations\masterclass;

use Plide\Presentation;

class MasterClass extends Presentation
{
    private $title = 'Plide';
    
    ... 
}
```

And attach it to render method in `index.php`

```php
$plide->render(
    new Presentations\masterclass\MasterClass()
);
```





