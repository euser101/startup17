<?php /*%%SmartyHeaderCode:866310835a2fa4460141d2-50632404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1513071258,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '866310835a2fa4460141d2-50632404',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2fa446086d19_54498767',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa446086d19_54498767')) {function content_5a2fa446086d19_54498767($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/root/mein-Konto" rel="nofollow">
      Ihr Konto
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Ihr Konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/root/adressen" title="Adressen" rel="nofollow">
            Adressen
          </a>
        </li>
            <li>
          <a href="http://localhost/root/bestellungsverlauf" title="Bestellungen" rel="nofollow">
            Bestellungen
          </a>
        </li>
            <li>
          <a href="http://localhost/root/profil" title="Persönliche Angaben" rel="nofollow">
            Persönliche Angaben
          </a>
        </li>
            <li>
          <a href="http://localhost/root/bestellschein" title="Rückvergütungen" rel="nofollow">
            Rückvergütungen
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
