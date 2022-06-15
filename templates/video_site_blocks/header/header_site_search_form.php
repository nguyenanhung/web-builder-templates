<?php if (isset($seo)) { ?>
    <form role="search" action="<?= $seo->baseUrl('search'); ?>" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 lovetv-navbar-search">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Tìm kiếm nội dung...">
            <button class="btn btn-light button-search" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
<?php } ?>