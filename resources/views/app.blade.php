<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
    <title>laravel inertia vue js crud</title>
  </head>
  <body class="bg-light">
    @inertia
    @routes
  </body>
</html>