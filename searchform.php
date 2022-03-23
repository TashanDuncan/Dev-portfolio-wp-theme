<form action="/" method="get">
<div class="form-group form-inline justify-content-center pt-3">
                        <label class="sr-only" for="search">Search</label>
                        <input type="hidden" name="cat" value="4">
                        <input type="text" name="s" id="search" class="form-control mr-md-1" placeholder="Search Blog" value="<?php the_search_query();?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
</form>