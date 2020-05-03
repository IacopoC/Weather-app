<!DOCTYPE html>
<html lang="it">
@include('layouts.header')

<body>

@include('layouts.navigation')

@yield('content')

@include('layouts.footer')

@include('layouts.scripts')
@include('layouts.scripts-search')

</body>

</html>
