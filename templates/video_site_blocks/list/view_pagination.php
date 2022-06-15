<nav aria-label="page navigation example" class="page-navigation">
    <ul class="pagination justify-content-center pagination-sm mb-4">
        <?= isset($contentPagination) ? $contentPagination : NULL; ?>
    </ul>
</nav>
<style>
    .pagination .page-item .page-link {
        background: #eceff0 none repeat scroll 0 0;
        border: medium none;
        color: #000;
        height: 30px;
        margin: 0 3px;
        text-align: center;
        width: 30px;
        border-radius: 2px;
        font-size: 13px;
    }

    .pagination .page-item.active .page-link,
    .pagination .page-item .page-link:focus,
    .pagination .page-item .page-link:hover {
        background: #ff516b none repeat scroll 0 0;
        outline: none;
        color: #fff;
    }

    .pagination .page-item.disabled .page-link {
        opacity: 0.5;
    }

    .pagination .page-item.prev .page-link,
    .pagination .page-item.next .page-link {
        width: auto;
    }

    nav.page-navigation {
        text-align: center;
    }
</style>