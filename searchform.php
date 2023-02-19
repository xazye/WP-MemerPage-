<form role="search" method="get" class="search-form" action="<?php esc_url(home_url('/')) ?>">
    <label>
        <span class="screen-reader-text block">Search for:</span>
        <input type="search" oninput="
        // maybe ugly, but good enough for quick one 
        ((e)=>{
            const ayy =document.getElementById(`search-submit`);
            if (!ayy.value){
                ayy.classList.toggle(`hidden`)}
            else {
            ayy.classList.toggle(`block`)}
            ayy.value='Search for: ' + e.value }
            )(this)" class="search-field w-[100%] rounded-full px-8 py-1 text-bblack" placeholder="Search …" value="<?php get_search_query() ?>" name="s" />
    </label>
    <input type="submit" id="search-submit" class="search-submit hidden w-full px-4 py-1 text-secondary font-semibold" value="" />
</form>