<button id="add_movies_modal">Open form.</button>
<form class="absolute top-1/2 left-1/2 add-movie-form py-2" action="/add_movies" id="add_movies" method="POST" style="display:none;" >
            
    <div class="relative w-full mt-2">
        <span class="absolute right-0 top-0 close">x</span>
    </div>

    @csrf
    <input type="text" name="title" placeholder="MOVIE NAME" >
    <input type="text" name="url" placeholder="URL TO VIDEO" >
    <input type="checkbox" name="favourite" id="favourite" >
    <label for="favourite" >
    Add to favs?
    </label>
    <input type="checkbox" name="watched" id="watched" >
    <label for="watched" >
    Did u did u watch me?
    </label>
    <input type="button" id="add_button" value="ADD MOVIE" >
</form>