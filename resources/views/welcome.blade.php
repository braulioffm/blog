<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi puto Sitio alv</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color = 'red';   
        $alert = 'alert';  
    @endphp

    <body>
        
        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4">

                <x-slot name="title">
                    Titulo 1
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat pariatur est recusandae illum fugiat dolor veritatis inventore corrupti. Exercitationem, eum esse modi odit veritatis illum ducimus quas eligendi soluta maxime?
            </x-alert>

            <x-alert2 color="green" class="mb-4" />

            <x-alert2 />

            <x-dynamic-component :component="$alert">
                <x-slot name="title">
                    Titulo 1
                </x-slot>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita illo voluptatum consequatur, consequuntur assumenda sed minus dicta. Quod harum aliquam ea voluptas itaque. Dolores placeat quo quia eius veritatis aliquid.

            </x-dynamic-component>

        </div>

    </body>
</html>
