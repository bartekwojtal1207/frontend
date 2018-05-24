<?php
/* Smarty version 3.1.32, created on 2018-05-24 22:41:48
  from 'C:\xampp\htdocs\frontend\zadanie\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b07238c609d80_29132150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89250ec9dcec664ff4b9ef6e363d89595a739b24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\frontend\\zadanie\\templates\\index.tpl',
      1 => 1527194506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b07238c609d80_29132150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
    <div class="row">
        <header class="col-md-12">
            <h1 class="text-center title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            <p class="text-center subtitle"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</p>
        </header>
    </div>

    <div class="row">
        <section>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'itemvar', false, 'keyvar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyvar']->value => $_smarty_tpl->tpl_vars['itemvar']->value) {
?>
                <div class="col-xs-12 col-md-3 product">
                    <div class="price-box">
                        <?php if (isset($_smarty_tpl->tpl_vars['itemvar']->value['discount'])) {?>
                            <span class="rabat"><?php echo $_smarty_tpl->tpl_vars['itemvar']->value['discount'];?>
%</span>
                        <?php }?>
                        <span class="price"><?php echo $_smarty_tpl->tpl_vars['itemvar']->value['price'];?>
 zł</span>
                        <?php if (isset($_smarty_tpl->tpl_vars['itemvar']->value['discount'])) {?>
                        <span class="price-previuos"><?php echo (($_smarty_tpl->tpl_vars['itemvar']->value['discount']/100)*$_smarty_tpl->tpl_vars['itemvar']->value['price'])+$_smarty_tpl->tpl_vars['itemvar']->value['price'];?>
 zł</span>
                        <?php }?>
                    </div>
                    <img src="./<?php echo $_smarty_tpl->tpl_vars['itemvar']->value['image'];?>
" alt="product" class="img img-fluid">
                    <span class="product-title-container">
                        <h3 class="product-title text-center"><?php echo $_smarty_tpl->tpl_vars['itemvar']->value['prod-title'];?>
</h3>
                    </span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value['link'];?>
" role="button" class="btn add-to-cart-product">kup teraz</a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </section>
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
