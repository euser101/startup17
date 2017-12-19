<?php

/* __string_template__8c05b5382529eefcd52d0bf8052327783c014e500c1e6f26aea335db4bc6f2ed */
class __TwigTemplate_47e71f5c95769505483575cc1344de3646941d8924e8a41dbf9d70a492743b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/myFoto/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/myFoto/img/app_icon.png\" />

<title>Artikel • myFoto</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'de';
    var full_language_code = 'de';
    var full_cldr_language_code = 'de-DE';
    var country_iso_code = 'CH';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Eine neue Bestellung ist in Ihrem Shop eingegangen.';
    var order_number_msg = 'Bestell-Nr. ';
    var total_msg = 'Gesamt: ';
    var from_msg = 'von ';
    var see_order_msg = 'Diese Bestellung anzeigen';
    var new_customer_msg = 'Neue Kundenregistrierung im Shop.';
    var customer_name_msg = 'Kunde ';
    var new_msg = 'Ihr Shop hat eine neue Nachricht erhalten.';
    var see_msg = 'Nachricht lesen';
    var token = '7bc017c1cbd5c748b9c1d46f66b717b2';
    var token_admin_orders = 'a6658adbde3c4a3400993f8dbdf50ba9';
    var token_admin_customers = 'c8051b1b1146868265bd7378d77d2066';
    var token_admin_customer_threads = '6669fcbd5e094bcdde5bba59ebb20e60';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '7a7bc0e5f7981c66b85ef0e19d5ebfb0';
    var choose_language_translate = 'Wählen Sie eine Sprache';
    var default_language = '1';
    var admin_modules_link = '/myFoto/admin4033a5vm3/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Aktualisierung durchgeführt!';
    var errorLogin = 'PrestaShop konnte sich nicht bei Addons anmelden. Überprüfen Sie bitte Ihre Zugangsdaten und Ihre Internetverbindung.';
    var search_product_msg = 'Artikel suchen';
  </script>

      <link href=\"/myFoto/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/myFoto/admin4033a5vm3/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/myFoto/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/myFoto/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/myFoto/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/myFoto/admin4033a5vm3/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/myFoto\\/admin4033a5vm3\\/\";
var baseDir = \"\\/myFoto\\/\";
var currency = {\"iso_code\":\"CHF\",\"sign\":\"CHF\",\"name\":\"Schweizer Franken\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/myFoto/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/admin4033a5vm3/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/myFoto/admin4033a5vm3/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/myFoto/admin4033a5vm3/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminGamification&token=334068253225207f01bb43ae7dab0b44';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminDashboard&amp;token=5ad0110f4b968af0a5b9af334328b19f\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Schnellzugriff</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminOrders&amp;token=a6658adbde3c4a3400993f8dbdf50ba9\"
                 data-item=\"Bestellungen\"
      >Bestellungen</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/myFoto/admin4033a5vm3/index.php/module/manage?token=12378ba368a7cb84bf53d9ca2029cbfc\"
                 data-item=\"Installierte Module\"
      >Installierte Module</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCategories&amp;addcategory&amp;token=7ec324b511cbc17eea04f044dc904924\"
                 data-item=\"Neue Kategorie\"
      >Neue Kategorie</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/myFoto/admin4033a5vm3/index.php/product/new?token=12378ba368a7cb84bf53d9ca2029cbfc\"
                 data-item=\"Neuer Artikel\"
      >Neuer Artikel</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c6f5377777ca96277b99c3bec0124ebe\"
                 data-item=\"Neuer Ermäßigungsgutschein\"
      >Neuer Ermäßigungsgutschein</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"2\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminQuickAccesses&token=c9ff07fe47484df99481d0c048798f0a\"
        data-prompt-text=\"Bitte dieses Kürzel angeben:\"
        data-link=\"Artikel - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Zu Schnellzugang hinzufügen
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminQuickAccesses&token=c9ff07fe47484df99481d0c048798f0a\">
      <i class=\"material-icons\">settings</i>
      Schnellzugänge verwalten
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/myFoto/admin4033a5vm3/index.php?controller=AdminSearch&amp;token=39e98530ec7ebda7f186b4a7f1e37fc8\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Suche (z.B. Bestell-Nr., Kundenname ...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Überall
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Überall\" href=\"#\" data-value=\"0\" data-placeholder=\"Wonach suchen Sie?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Überall</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Artikelname, Bestandseinheit, Artikel-Nr. ...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Katalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Kunden nach Name\" href=\"#\" data-value=\"2\" data-placeholder=\"E-Mail , Name...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Kunden nach Name
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Kunden nach IP-Adresse\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Kunden nach IP-Adresse</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Bestellungen\" href=\"#\" data-value=\"3\" data-placeholder=\"Bestell-Nr.\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Bestellungen
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Rechnungen\" href=\"#\" data-value=\"4\" data-placeholder=\"Rechnungsnummer\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Rechnungen
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Warenkörbe\" href=\"#\" data-value=\"5\" data-placeholder=\"Warenkorb-ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Warenkörbe
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Module\" href=\"#\" data-value=\"7\" data-placeholder=\"Modul-Name\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Module
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">SUCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/admin%40myfoto.ch.jpg\" /><br>
      <span>Admin Admin</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminEmployees&amp;token=7a7bc0e5f7981c66b85ef0e19d5ebfb0&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Ihr Profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminLogin&amp;token=2dfec0fb5c966000f6ac6a25d40d0243&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Abmelden
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Bestellungen<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Kunden<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Nachrichten<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell kein neuer Kunde!<br>
              Schauen Sie mal in Ihre <strong><a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCarts&token=23016b73e1d8b09a7c1450ba904897a8&action=filterOnlyAbandonedCarts\">aufgegebenen Warenkörbe</a></strong>!<br> Dort verbirgt sich vielleicht schon Ihre nächste Bestellung.
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell kein neuer Kunde!<br>
              Waren Sie in letzter Zeit in den Sozialen Medien aktiv?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell keine neuen Nachrichten <br>
              Ihre Kunden sind offenbar alle zufrieden.
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      von <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registriert <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/myFoto/\" target= \"_blank\">myFoto</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminDashboard&amp;token=5ad0110f4b968af0a5b9af334328b19f\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Übersicht</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Verkauf</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminOrders&amp;token=a6658adbde3c4a3400993f8dbdf50ba9\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Bestellungen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminOrders&amp;token=a6658adbde3c4a3400993f8dbdf50ba9\" class=\"link\"> Bestellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminInvoices&amp;token=f7a0e54d11e692447d7c11360e026823\" class=\"link\"> Rechnungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminSlip&amp;token=2b96bb2889b4906f488aa7bd48eda8e9\" class=\"link\"> Rückvergütungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminDeliverySlip&amp;token=6e93718f4fd4cb0ff4c054e275830c5e\" class=\"link\"> Lieferscheine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCarts&amp;token=23016b73e1d8b09a7c1450ba904897a8\" class=\"link\"> Warenkörbe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/myFoto/admin4033a5vm3/index.php/product/catalog?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/myFoto/admin4033a5vm3/index.php/product/catalog?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\" class=\"link\"> Artikel
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCategories&amp;token=7ec324b511cbc17eea04f044dc904924\" class=\"link\"> Kategorien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminTracking&amp;token=b6a3e489bb97b43e045e0405371762c5\" class=\"link\"> Kontrollübersicht
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminAttributesGroups&amp;token=b12243d895c940f57af50bb4c496aa4f\" class=\"link\"> Varianten &amp; Eigenschaften
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminManufacturers&amp;token=96a8d0c96e21d3a0ed4a688d816ac030\" class=\"link\"> Marken &amp; Lieferanten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminAttachments&amp;token=e11d2fe1a95702532413bbba5ec6f7e2\" class=\"link\"> Dateien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCartRules&amp;token=c6f5377777ca96277b99c3bec0124ebe\" class=\"link\"> Rabatt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/myFoto/admin4033a5vm3/index.php/stock/?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCustomers&amp;token=c8051b1b1146868265bd7378d77d2066\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Kunden
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCustomers&amp;token=c8051b1b1146868265bd7378d77d2066\" class=\"link\"> Kunden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminAddresses&amp;token=2fb4eadfe637a74d26611fadbc802bab\" class=\"link\"> Adressen
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCustomerThreads&amp;token=6669fcbd5e094bcdde5bba59ebb20e60\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Kundenservice
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCustomerThreads&amp;token=6669fcbd5e094bcdde5bba59ebb20e60\" class=\"link\"> Kundenservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminOrderMessage&amp;token=6b8bbc8322988bc51fbd6061e90906cd\" class=\"link\"> Bestellnachrichten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminReturn&amp;token=5239104d3208aff4b037b4bc71ca5583\" class=\"link\"> Warenrücksendungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminStats&amp;token=4c08380e5f6b532026247a431404e9d3\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiken
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Optimierung</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/myFoto/admin4033a5vm3/index.php/module/catalog?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Module
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/myFoto/admin4033a5vm3/index.php/module/catalog?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\" class=\"link\"> Module und Dienste
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminAddonsCatalog&amp;token=aee332a02db2270b930ce8549a65f3ea\" class=\"link\"> Versanddienst
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminThemes&amp;token=d5386ecc6001432c6e772b62d5046613\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminThemes&amp;token=d5386ecc6001432c6e772b62d5046613\" class=\"link\"> Template und Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminThemesCatalog&amp;token=1821cbe149ec275d41ced93948bbc2fd\" class=\"link\"> Templates
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCmsContent&amp;token=ffadf32e6531d7831989a5be121f8767\" class=\"link\"> Seiten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminModulesPositions&amp;token=6b08237e999b0f40806531518e95ec23\" class=\"link\"> Positionen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminImages&amp;token=cd6ae8dcfd6fad038039526a6bf431c7\" class=\"link\"> Bilder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminLinkWidget&amp;token=849c9b35b3a336f1afc847e4d6886a5a\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCarriers&amp;token=7eb2228f32d7cf04300f85a33aed5021\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Versand
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCarriers&amp;token=7eb2228f32d7cf04300f85a33aed5021\" class=\"link\"> Versanddienste
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminShipping&amp;token=b5e3a7708c1a838b30915f215811a1c3\" class=\"link\"> Voreinstellungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPayment&amp;token=2806cd0f1cc277f5021b2aef3254b450\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Zahlungsart
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPayment&amp;token=2806cd0f1cc277f5021b2aef3254b450\" class=\"link\"> Zahlungsarten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPaymentPreferences&amp;token=ca4cb1c489901dbf5450ee19a2cdd70a\" class=\"link\"> Voreinstellungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminLocalization&amp;token=be3617132290602251405d0693170ec3\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    international
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminLocalization&amp;token=be3617132290602251405d0693170ec3\" class=\"link\"> Lokalisierung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCountries&amp;token=e9138256d4410be976f2fb908a69082d\" class=\"link\"> Länder &amp; Gebiete
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminTaxes&amp;token=c653c6a18f302b092138ef3cfbddc7b0\" class=\"link\"> Steuersätze
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminTranslations&amp;token=45ea7672c1312a1044ff6f0c9ef8020c\" class=\"link\"> Übersetzungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Einstellungen</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPreferences&amp;token=98cde6fdf6f0cd564757539ce49d6fe6\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Shop-Einstellungen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPreferences&amp;token=98cde6fdf6f0cd564757539ce49d6fe6\" class=\"link\"> Allgemein
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminOrderPreferences&amp;token=89c33402271321105dc4dac8f32a8652\" class=\"link\"> Bestellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPPreferences&amp;token=520c549c1842a23f53a9cb76820319e6\" class=\"link\"> Artikel
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCustomerPreferences&amp;token=24f3cf151f8ebe3cd1e3f88616e004ae\" class=\"link\"> Benutzerdefinierte Einstellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminContacts&amp;token=595364afdcf6a1a72f8c0230181ef1c9\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminMeta&amp;token=776a62983e29c5c4fa51ebe917f82927\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminSearchConf&amp;token=40a862a75db67844f65e0c262ed1ffd6\" class=\"link\"> Suche
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminGamification&amp;token=334068253225207f01bb43ae7dab0b44\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminInformation&amp;token=6b602a0bfa849b11110fe48f2a16c0a2\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Erweiterte Einstellungen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminInformation&amp;token=6b602a0bfa849b11110fe48f2a16c0a2\" class=\"link\"> Informationen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminPerformance&amp;token=e8f8b581dab3ef4c6ca09011ee198979\" class=\"link\"> Leistung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminAdminPreferences&amp;token=c3330af3d2035a5ab7784a8a1e01aa3f\" class=\"link\"> Verwaltung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminEmails&amp;token=10b0a07b83ad28e45c659548fd8d9554\" class=\"link\"> E-Mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminImport&amp;token=59fb02e5d38cea41abee75032790ed6d\" class=\"link\"> Importieren
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminEmployees&amp;token=7a7bc0e5f7981c66b85ef0e19d5ebfb0\" class=\"link\"> Benutzerrechte
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminRequestSql&amp;token=51cad8c1a396a428f0b34a953797a548\" class=\"link\"> Datenbank
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminLogs&amp;token=e8f9f74873b81069a49eb594d0533efc\" class=\"link\"> Log-Dateien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminWebservice&amp;token=c7b867ea3c02dce71e95ff2ad063116f\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Starten Sie Ihren Shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Fortsetzen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quick Start beenden</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminCatalog&amp;token=fc98fd04bfa61eccfea3360344ecc5a1\">Katalog</a>
                  </li>
      
              <li>
                      <a href=\"/myFoto/admin4033a5vm3/index.php/product/catalog?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\">Artikel</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Artikel    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/myFoto/admin4033a5vm3/index.php/product/new?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\"            title=\"Speichern und nächsten Artikel anlegen: STRG + P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Neuer Artikel</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/myFoto/admin4033a5vm3/index.php/module/catalog?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\"          title=\"Empfohlene Module und Dienste\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Empfohlene Module und Dienste</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Hilfe\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/myFoto/admin4033a5vm3/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fde%252Fdoc%252FAdminProducts%253Fversion%253D1.7.2.4%2526country%253Dde/Hilfe?_token=PLuz2mnLYW6688xD1z1m1Ncxs7WRRrE5Z8h_8eXCXlQ\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Hilfe</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-DE&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/de/login?email=admin%40myfoto.ch&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2FmyFoto%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/myFoto/admin4033a5vm3/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Verbinden Sie Ihren Shop mit Prestashops Marktplatz, um automatisch alle gekauften Zusatzmodule zu importieren.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Sie haben noch keinen Account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Entdecken Sie die Vielfalt der PrestaShop Addons! Stöbern Sie im offiziellen PrestaShop Martkplatz mit aktuell über 3 500 innovativen Templates und modularen Erweiterungen - ob es sich nun um Optimierung der Wechselkurse, Erhöhung der Zugriffsrate, Maßnahmen zur Kundenbindung oder Rentabilitätssteigerung handelt.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Wechseln Sie zu PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/de/forgot-your-password\">Ich habe mein Passwort vergessen</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/de/login?email=admin%40myfoto.ch&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2FmyFoto%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tErstellen Sie ein Konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Anmelden
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Weiter</button>
  <a class=\"onboarding-button-shut-down\">Einführung überspringen</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Willkommen in Ihrem Shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hallo, ich bin Preston. Folgen Sie mir einfach auf einen kleinen Rundgang.<\\/p>\\n    <p>Hier lernen Sie die Grundlagen kennen, die jeder Shoper\\u00f6ffnung vorausgehen:\\n    Legen Sie den ersten Artikel an. Passen Sie den Shop an, richten Sie Versanddienste und Zahlungsarten ein ...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Los gehts!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Sp\\u00e4ter<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Auf zur Artikelerfassung\",\"subtitle\":{\"1\":\"Wie m\\u00f6chten Sie es beschreiben? Wichtig ist, was Ihre Kunden wissen wollen!\",\"2\":\"Treffende und ansprechende Informationen einf\\u00fcgen. Keine Bange, das k\\u00f6nnen Sie jederzeit wieder \\u00e4ndern.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Geben Sie dem Artikel einen treffende Namen.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Zun\\u00e4chst die Pflichtangaben. \\u00dcber die anderen Reiter k\\u00f6nnen optionmal erweiterte Angaben erfasst werden.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ein oder mehrere Bilder hinzuf\\u00fcgen, damit der Artikel ansprechend pr\\u00e4sentiert wird!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Zu welchem Preis wollen Sie den Artikel verkaufen?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Super! Ihr erster Artikel! Sieht doch gut aus, oder?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Individualisieren Sie Ihren Shop\",\"subtitle\":{\"1\":\"Wie soll Ihr Shop aussehen? Was macht ihn so unverwechselbar?\",\"2\":\"Passen Sie das Template an oder suchen Sie sich ein passendes Design aus dem Template-Angebot aus.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ein guter Anfang w\\u00e4re schon mal ein eigenes Logo hier!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wenn Sie wirklich etwas Besonderes suchen, schauen Sie sich die Templates im Angebot an!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Bezahlm\\u00f6glichkeiten einrichten\",\"subtitle\":{\"1\":\"Wie sollen Ihre Kunden bezahlen k\\u00f6nnen?\",\"2\":\"Passen Sie sich dem Markt an: F\\u00fcgen Sie die bei Ihren Kunden beliebten Zahlungsarten hinzu!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Diese Zahlungsarten sind bereits f\\u00fcr Ihre Kunden verf\\u00fcgbar.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Sie k\\u00f6nnen aber von hier weitere Zahlungsarten hinzuf\\u00fcgen!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Versandoptionen ausw\\u00e4hlen\",\"subtitle\":{\"1\":\"Welche Versandarten bevorzugen Sie?\",\"2\":\"W\\u00e4hlen Sie die Versandarten, die wohl am ehesten zu Ihren Kunden passen. Sie k\\u00f6nnen Versanddienste manuell erfassen oder auch fertige Versandmodule hinzuf\\u00fcgen.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Diese Versandarten sind aktuell f\\u00fcr Ihren Shop verf\\u00fcgbar.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Durch Einrichten zus\\u00e4tzlicher Versanddienste k\\u00f6nnen Sie mehr Versandoptionen anbieten\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Verbessern Sie Ihren Shop durch Module\",\"subtitle\":{\"1\":\"Mithilfe von Modulen k\\u00f6nnen Sie die Shopfunktionen erweitern bzw. die vorhandenen verwalten.\",\"2\":\"Einige Module sind bereits vorinstalliert, andere sind entweder kostenlos oder als Bezahlmodule erh\\u00e4ltlich - schauen Sie, was unsere Auswahl f\\u00fcr Sie bereith\\u00e4lt!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Seite 1 (Auswahl) bietet Ihnen eine Auswahl von Kaufmodulen. Die vorhandenen verwalten Sie unter \\\"Installierte Module\\\". Im dritten Fenster finden Sie Hinweise auf Versions-Updates oder fehlende Modul-Einstellungen.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">\\u00dcbernehmen Sie!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    Das waren erst die Grundlagen, es gibt aber noch viel mehr zu entdecken!<br \\/>\\n    Hier ein paar Links zur Vertiefung Ihrer Kenntnisse:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Quick Start<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">Forum<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Training<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Videoanleitung<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Ich bin bereit!<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminWelcome&token=54dfb694e8f6883d644b3b586310f8f9\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hallo! Wissen Sie nicht weiter?</p>    <p>Um fortzufahren, klicken Sie hier:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Weiter</button>    </div>    <p>Um die Einführung mit Quick Start abzubrechen, klicken Sie hier:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quick Start beenden</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Schritt <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Weiter</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1230
        $this->displayBlock('content_header', $context, $blocks);
        // line 1231
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1232
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1233
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1234
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh nein!</h1>
  <p class=\"m-t-3\">
    Für diese Seite gibt es derzeit keine Mobilversion.
  </p>
  <p class=\"m-t-2\">
    Da die Seite noch nicht für mobile Geräte angepasst wurde, können Sie sie nur am PC aufrufen.
  </p>
  <p class=\"m-t-2\">
    Vielen Dank!
  </p>
  <a href=\"http://localhost/myFoto/admin4033a5vm3/index.php?controller=AdminDashboard&amp;token=5ad0110f4b968af0a5b9af334328b19f\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Zurück
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Ladezeit \"></i> 1.860s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontakt
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug-Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Training
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-DE&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/de/login?email=admin%40myfoto.ch&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2FmyFoto%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/myFoto/admin4033a5vm3/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Verbinden Sie Ihren Shop mit Prestashops Marktplatz, um automatisch alle gekauften Zusatzmodule zu importieren.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Sie haben noch keinen Account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Entdecken Sie die Vielfalt der PrestaShop Addons! Stöbern Sie im offiziellen PrestaShop Martkplatz mit aktuell über 3 500 innovativen Templates und modularen Erweiterungen - ob es sich nun um Optimierung der Wechselkurse, Erhöhung der Zugriffsrate, Maßnahmen zur Kundenbindung oder Rentabilitätssteigerung handelt.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Wechseln Sie zu PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/de/forgot-your-password\">Ich habe mein Passwort vergessen</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/de/login?email=admin%40myfoto.ch&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2FmyFoto%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tErstellen Sie ein Konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Anmelden
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1399
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1230
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1231
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1232
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1233
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1399
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8c05b5382529eefcd52d0bf8052327783c014e500c1e6f26aea335db4bc6f2ed";
    }

    public function getDebugInfo()
    {
        return array (  1478 => 1399,  1473 => 1233,  1468 => 1232,  1463 => 1231,  1458 => 1230,  1449 => 84,  1441 => 1399,  1274 => 1234,  1271 => 1233,  1268 => 1232,  1265 => 1231,  1263 => 1230,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8c05b5382529eefcd52d0bf8052327783c014e500c1e6f26aea335db4bc6f2ed", "");
    }
}
