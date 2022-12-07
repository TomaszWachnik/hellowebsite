<form action="/" method="get">
        <input 
            class="form-input" 
            type="text" 
            name="s" 
            placeholder="Co chcesz wiedzieć?" 
            value="<?php the_search_query(); ?>" 
            required
        >
</form>