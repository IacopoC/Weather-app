<form class="mt-2 mt-md-0" action="{{ url('/search') }}" onsubmit="return emptyField()">
    <div class="input-group-append">
    <input class="form-control" type="search" name="q" placeholder="Cerca una località..." value="@if(isset($_GET['q'])) {{ html_entity_decode($_GET['q']) }} @endif" aria-label="Search" id="city">
        <button class="btn btn-outline-light" type="submit">Cerca</button>
    </div>
</form>
<p class="text-white pt-4" id="alert-message"></p>
