<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | {{ env('APP_NAME') }}</title>
  <link rel="icon" href="favicon.ico" />
  <link href="/themes/default/css/style.css" rel="stylesheet" />
  @wireUiScripts
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ page: 'signin', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">

  <!-- ===== Preloader Start ===== -->
  {{-- <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
    class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white">
    <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
  </div> --}}
  <!-- ===== Preloader End ===== -->

  <!-- ===== Page Wrapper Start ===== -->
  <div class="flex h-screen overflow-hidden">

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

      <!-- ===== Main Content Start ===== -->
      <main class="overflow-y-hidden">
        <div class="mx-auto">
          {{ $slot }}
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <!-- ===== Page Wrapper End ===== -->
  {{-- <script defer src="/themes/default/js/bundle.js"></script> --}}
</body>

</html>
