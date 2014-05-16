<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" class="input_text" placeholder="Tìm kiếm sản phẩm" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" class="button" value="Tìm" />
        <input type="hidden" name="post_type" value="product">
    </div>
</form>