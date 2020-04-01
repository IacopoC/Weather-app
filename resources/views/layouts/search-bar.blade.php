<form class="form-inline mt-2 mt-md-0" action="{{ url('/search') }}" onsubmit="return emptyField()">
    <input class="form-control mr-sm-2" type="text" name="q" placeholder="Cerca una località" value="@if(isset($_GET['q'])) {{ htmlentities($_GET['q']) }} @endif" aria-label="Search" id="search-field">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerca</button>
</form>
<p class="text-white pt-4" id="alert-message"></p>
