<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <main class="flex bg-estatia-light-blue-200/50">
        <x-partials.homeowner.sidebar/>
        <section class="w-full">
            <x-partials.homeowner.navbar/>
            <div class="p-6 ">
                {{$slot}}
            </div>
        </section>
    </main>
</body>
</html>