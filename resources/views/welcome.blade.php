<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 5.3 - Angular 2</title>

        <!-- 1. Load libraries -->
        <!-- Polyfill(s) for older browsers -->
        <script src="core-js/client/shim.min.js"></script>
        <script src="zone.js/dist/zone.js"></script>
        <script src="reflect-metadata/Reflect.js"></script>
        <script src="systemjs/dist/system.src.js"></script>
        <script src="systemjs.config.js"></script>

        <script>
            System.import('app').catch(function(err){ console.error(err); });
        </script>
    </head>
    <!-- 3. Display the application -->
    <body>
    <my-app>Loading...</my-app>
    </body>
</html>