<div class="search_hear search-forms">
    <div class="input-group">
        <form class="navbar-form hidden-xs search-form" role="search" id="search" method="GET" action="<?php echo base_url('search'); ?>">
            <div class="search-info">
                <input type="text" class="form-control s" placeholder="Tìm kiếm..." name="q" />
            </div>
            <button class="fa fa-search search-button input-group-addon search_submit" type="submit"></button>
        </form>
    </div>
</div>
<style>
    form#search button.search_submit, form#search .search-info {
        display: table-cell;
        vertical-align: middle;
        float: none;
    }

    /* 960 */
    .input-group form, .input-group button {
        display: table;
        position: relative;
    }
</style>