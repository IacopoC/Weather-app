<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')

    <body>

    @include('layouts.navigation')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.scripts')

    </body>

</html>
