{include file="header.tpl"}



<div class="container">
    <div class="row">
        <header class="col-md-12">
            <h1 class="text-center title">{$title}</h1>
            <p class="text-center subtitle">{$subtitle}</p>
        </header>
    </div>

    <div class="row">
        <section>

            {foreach $products as $keyvar=>$itemvar}
                <div class="col-xs-12 col-md-3 product">
                    <div class="price-box">
                        {if isset($itemvar['discount'])}
                            <span class="rabat">{$itemvar['discount']}%</span>
                        {/if}
                        <span class="price">{$itemvar['price']} zł</span>
                        {if isset($itemvar['discount'])}
                        <span class="price-previuos">{(($itemvar['discount']/100) * $itemvar['price']) + $itemvar['price'] } zł</span>
                        {/if}
                    </div>
                    <img src="./{$itemvar['image']}" alt="product" class="img img-fluid">
                    <h3 class="product-title text-center">{$itemvar['prod-title']}</h3>
                    <a href="{$itemvar['link']}" role="button" class="btn btn-primary">kup teraz</a>
                </div>
            {/foreach}

        </section>
    </div>
</div>



{include file="footer.tpl"}