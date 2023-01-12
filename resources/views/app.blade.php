<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=be-vietnam:400,600,700">

    <!-- Assets -->
    <link href="https://preview.tabler.io/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="https://preview.tabler.io/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="https://preview.tabler.io/dist/css/demo.min.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Be Vietnam', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
    </style>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body>
    <script src="https://preview.tabler.io/dist/js/demo-theme.min.js"></script>
    @inertia
    <script src="https://preview.tabler.io/dist/libs/nouislider/dist/nouislider.min.js" defer></script>
    <script src="https://preview.tabler.io/dist/libs/litepicker/dist/litepicker.js" defer></script>
    <script src="https://preview.tabler.io/dist/libs/tom-select/dist/js/tom-select.base.min.js" defer></script>
    <script src="https://preview.tabler.io/dist/js/tabler.min.js" defer></script>
    <script src="https://preview.tabler.io/dist/js/demo.min.js" defer></script>
</body>

</html>