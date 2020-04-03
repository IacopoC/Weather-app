<form class="mt-2 mt-md-0" action="{{ url('/search') }}" onsubmit="return emptyField()">
    <div class="input-group">
    <input class="form-control" type="search" name="q" placeholder="Cerca una località..." value="@if(isset($_GET['q'])) {{ htmlentities($_GET['q']) }} @endif" aria-label="Search" id="city">
        <div class="input-group-append">
        <button class="btn btn-outline-light" type="submit">Cerca</button>
        </div>
    </div>
</form>
<p class="text-white pt-4" id="alert-message"></p>
