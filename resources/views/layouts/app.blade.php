<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{asset('assets/js/charts-lines.js')}}" defer></script>
    <script src="{{asset('assets/js/charts-pie.js')}}" defer></script>




    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--  -->

</head>

<body>
    <livewire:body />

    <!-- Desktop sidebar -->
  
    @include('layouts.inc.aside')

    <div class="flex flex-col flex-1 w-full">
        <!-- Desktop header -->
        <livewire:header />
        <main class="h-full overflow-y-auto">
            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif
            <div class="container px-4 mx-auto grid">
                {{ $slot }}
            </div>
        </main>
    </div>
    </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>