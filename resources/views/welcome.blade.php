<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>My First Laravel App</title>

        @livewireStyles
    </head>
    <body>
        <livewire:selector />

        @livewireScripts
    </body>
</html>
