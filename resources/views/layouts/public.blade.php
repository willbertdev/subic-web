<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head />

<body>

    <main>

        <!-- ..::  navbar start ::.. -->
        <x-public-navbar />
        <!-- ..::  navbar end ::.. -->
        <div>

            @yield('content')
        
        </div>
        <!-- ..::  footer  start ::.. -->
        <x-footer />
        <!-- ..::  footer area end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    <x-scripts script="{!! isset($script) ? $script : '' !!}" />

    <!-- ..::  scripts  end ::.. -->

</body>

</html>