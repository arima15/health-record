<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @yield('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/dash/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/essentials/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/essentials/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/settings/settings.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/patients/patient_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="dashboard-container">
        @include('layouts.sidebar')
        <div class="content">
            <main class="main-content">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" defer></script>
    <script src="{{ asset('js/settings/settings.js') }}"></script>
    @yield('scripts')

    <script src="{{ asset('js/essentials/sidebar.js') }}"></script>
    <script src="{{ asset('js/essentials/search.js') }}"></script>
</body>

</html>
