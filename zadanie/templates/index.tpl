{include file="header.tpl"}



<div class="container">

        <header class="col-md-12 header">
            <h1 class="text-center header__title">{$title}</h1>
            <p class="text-center header__subtitle">{$subtitle}</p>
        </header>
        <section class="row">
            <div class="col-md-12 slider-container">
                <div class="slider">
                    {foreach $products as $keyvar=>$itemvar}
                        <div class="slider__item--products">
                            <div class="slider__item--products__price--container">
                                {if isset($itemvar['discount'])}
                                    <span class="price--container__rabat">{$itemvar['discount']}%</span>
                                {/if}
                                <span class="price--container__price">{$itemvar['price']} zł</span>
                                {if isset($itemvar['discount'])}
                                    <span class="price--container__price--previuos">{(($itemvar['discount']/100) * $itemvar['price']) + $itemvar['price'] } zł</span>
                                {/if}
                            </div>
                            <img src="./{$itemvar['image']}" alt="product" class="img img-fluid slider__item--products__photo">
                            <div class="slider__item--products__title--container">
                                 <h3 class="products__title--container__title text-center">{$itemvar['prod-title']}</h3>
                            </div>
                            <a href="{$itemvar['link']}" role="button" class="btn add-to-cart-product slider__item--products__btn--buy">kup teraz</a>
                        </div>
                    {/foreach}
                </div>
            </div>

        </section>

</div>



{include file="footer.tpl"}