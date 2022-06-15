<?php if (isset($seo)) { ?>
    <div class="open-canvas form-search">
        <form role="search" action="<?= $seo->baseUrl('search'); ?>">
            <div class="input-group">
                <input name="q" type="text" class="form-control" placeholder="Tìm kiếm nội dung...">
                <button class="btn btn-light button-search" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
<?php } ?>