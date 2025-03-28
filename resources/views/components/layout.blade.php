<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="bg-white px-10 py-4">
        <nav class="flex justify-between items-center">
            <h1>Ninja Network</h1>
            <section>
                <a class="pr-2" href="/ninjas">All Ninjas</a>
                <a href="/ninjas/create">Create New Ninjas</a>
            </section>
        </nav>
    </header>

    <main class="px-10 py-6">
        {{ $slot }}
    </main>
</body>

</html>
