<?php
/* Smarty version 3.1.32, created on 2018-05-29 22:47:02
  from 'C:\xampp\htdocs\frontend\zadanie\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0dbc46aed5e2_52003718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89250ec9dcec664ff4b9ef6e363d89595a739b24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\frontend\\zadanie\\templates\\index.tpl',
      1 => 1527626640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b0dbc46aed5e2_52003718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">

        <header class="col-md-12 header">
            <h1 class="text-center header__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            <p class="text-center header__subtitle"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</p>
        </header>
        <section class="row">
            <div class="col-md-12 slider-container">
                <div class="slider">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'itemvar', false, 'keyvar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyvar']->value => $_smarty_tpl->tpl_vars['itemvar']->value) {
?>
                        <div class="slider__item--products">
                            <div class="slider__item--products__price--container">
                                <?php if (isset($_smarty_tpl->tpl_vars['itemvar']->value['discount'])) {?>
                                    <span class="price--container__rabat"><?php echo $_smarty_tpl->tpl_vars['itemvar']->value['discount'];?>
%</span>
                                <?php }?>
                                <span class="price--container__price"><?php echo $_smarty_tpl->tpl_vars['itemvar']->value['price'];?>
 zł</span>
                                <?php if (isset($_smarty_tpl->tpl_vars['itemvar']->value['discount'])) {?>
                                    <span class="price--container__price--previuos"><?php echo (($_smarty_tpl->tpl_vars['itemvar']->value['discount']/100)*$_smarty_tpl->tpl_vars['itemvar']->value['price'])+$_smarty_tpl->tpl_vars['itemvar']->value['price'];?>
 zł</span>
                                <?php }?>
                            </div>
                            <img src="./<?php echo $_smarty_tpl->tpl_vars['itemvar']->value['image'];?>
" alt="product" class="img img-fluid slider__item--products__photo">
                            <div class="slider__item--products__title--container">
                                 <h3 class="products__title--container__title text-center"><?php echo $_smarty_tpl->tpl_vars['itemvar']->value['prod-title'];?>
</h3>
                            </div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value['link'];?>
" role="button" class="btn add-to-cart-product slider__item--products__btn--buy">kup teraz</a>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>

        </section>

</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
