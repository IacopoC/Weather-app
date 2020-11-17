<!DOCTYPE html>
<html lang="it">
    @include('layouts.header')

    <body>

    @include('layouts.navigation')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.to-top')

    @include('layouts.scripts')

    </body>

</html>
