<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="min-h-full">
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
              <a href="{{route('libros.index')}}" class="text-3xl font-bold tracking-tight text-gray-900">Libros</a>
            </div>
          </header>
          <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                @yield('content')
            </div>
          </main>
        
        
    </div>
</body>
</html>