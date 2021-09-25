<!DOCTYPE html>
<html lang="en">

<head class="">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/styles/app.css" rel="stylesheet">
    <title>Biosphere</title>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="min-h-screen bg-forest bg-cover bg-no-repeat relative">
    <x-nav></x-nav>
    <main class="p-4 flex flex-col min-h-screen justify-between">
        {{$slot}}
        <div class="flex flex-row p-4 space-x-2 md:px-28 md:max-w-xl mx-auto">
            <x-social-link url="https://twitter.com/ProjectGtx" icon="img/twitter.png"></x-social-link>
            <x-social-link url="https://t.me/projectbiosphere" icon="img/telegram.png"></x-social-link>
            <x-social-link url="https://www.facebook.com/Project-Biosphere-101656958953109" icon="img/facebook.png"></x-social-link>
            <x-social-link url="https://www.instagram.com/projectbiosphere" icon="img/instagram.png"></x-social-link>
            <x-social-link url="https://www.tiktok.com/@projectbiophere" icon="img/tiktok.png"></x-social-link>
            <x-social-link url="https://www.youtube.com/channel/UCzwOeuMgvJu62Q5nviktXdw" icon="img/youtube.png"></x-social-link>
        </div>
    </main>
    @livewireScripts
</body>

</html>
