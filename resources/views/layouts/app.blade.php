<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>