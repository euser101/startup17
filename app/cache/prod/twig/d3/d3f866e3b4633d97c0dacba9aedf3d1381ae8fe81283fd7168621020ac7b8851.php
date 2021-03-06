<?php

/* __string_template__0dbbbf6ec34628c917b6653f624659ef5ddfeb3e2ee160b8a4efbb7b749d7e67 */
class __TwigTemplate_f396abc4f88b30464a4b8475317286f2b4f76d7b6f8b4d4a44329cde96d85a24 extends Twig_Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/root/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/root/img/app_icon.png\" />

<title>Artikel • myfoto.ch</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'de';
    var full_language_code = 'de';
    var full_cldr_language_code = 'de-DE';
    var country_iso_code = 'DE';
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
    var token = '881272e344be22f40d0e77904b7dadff';
    var token_admin_orders = 'd6e6f9903166ae89a7505d99123689bc';
    var token_admin_customers = '235f5faa1d486699f229f37283cdae44';
    var token_admin_customer_threads = '1b4b6d5707bdc7d22101a71876642850';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '743482ab0d6ede3c343b1d67f89e7aef';
    var choose_language_translate = 'Wählen Sie eine Sprache';
    var default_language = '1';
    var admin_modules_link = '/root/admin529q2cv96/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=I0hKNCTOfeoU9RZIcHhH7tGDSQRHmHsQfNaksO8OtW0';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Aktualisierung durchgeführt!';
    var errorLogin = 'PrestaShop konnte sich nicht bei Addons anmelden. Überprüfen Sie bitte Ihre Zugangsdaten und Ihre Internetverbindung.';
    var search_product_msg = 'Artikel suchen';
  </script>

      <link href=\"/root/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/root/admin529q2cv96/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/root/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/root/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/root/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/root/admin529q2cv96/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/root\\/admin529q2cv96\\/\";
var baseDir = \"\\/root\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/root/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/root/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/root/admin529q2cv96/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/root/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/root/admin529q2cv96/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/root/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/root/admin529q2cv96/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/root/admin529q2cv96/index.php?controller=AdminGamification&token=caa4271fefdd6499281fab3b1dfc32ba';
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
    <a class=\"logo pull-left\" href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminDashboard&amp;token=559d9d057e4ba6c0f9bb0343d6ff30b4\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Schnellzugriff</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminOrders&amp;token=d6e6f9903166ae89a7505d99123689bc\"
                 data-item=\"Bestellungen\"
      >Bestellungen</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/root/admin529q2cv96/index.php/module/manage?token=3a7d719274ee1bc6d10bad45132345b2\"
                 data-item=\"Installierte Module\"
      >Installierte Module</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCategories&amp;addcategory&amp;token=368379c684ceea8881348d8175e5c1c1\"
                 data-item=\"Neue Kategorie\"
      >Neue Kategorie</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/root/admin529q2cv96/index.php/product/new?token=3a7d719274ee1bc6d10bad45132345b2\"
                 data-item=\"Neuer Artikel\"
      >Neuer Artikel</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=963effe0ef0b923f9707080b9c0fd8c4\"
                 data-item=\"Neuer Ermäßigungsgutschein\"
      >Neuer Ermäßigungsgutschein</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"160\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/form/7\"
        data-post-link=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminQuickAccesses&token=c2524485ac3d299201c6821ed3375307\"
        data-prompt-text=\"Bitte dieses Kürzel angeben:\"
        data-link=\"Artikel - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Zu Schnellzugang hinzufügen
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminQuickAccesses&token=c2524485ac3d299201c6821ed3375307\">
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
      action=\"/root/admin529q2cv96/index.php?controller=AdminSearch&amp;token=285ceb0aa7b12de10c9aa79856f22d26\"
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
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/dario.huzanic%40lernende.bfo-vs.ch.jpg\" /><br>
      <span>Admin Admin</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminEmployees&amp;token=743482ab0d6ede3c343b1d67f89e7aef&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Ihr Profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminLogin&amp;token=dd6d117c3e4c614714c667e1ee533333&amp;logout\">
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
              Was halten Sie von saisonalen Preisnachlässen?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell kein neuer Kunde!<br>
              Haben Sie in der letzten Zeit Werbe-Mails versandt?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell keine neuen Nachrichten <br>
              Keine Neuigkeiten sind gute Neuigkeiten, stimmt's?
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
    <a class=\"link\" href=\"http://localhost/root/\" target= \"_blank\">myfoto.ch</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminDashboard&amp;token=559d9d057e4ba6c0f9bb0343d6ff30b4\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Übersicht</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Verkauf</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminOrders&amp;token=d6e6f9903166ae89a7505d99123689bc\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Bestellungen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminOrders&amp;token=d6e6f9903166ae89a7505d99123689bc\" class=\"link\"> Bestellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminInvoices&amp;token=7457399785dde752ea9f32e338242d5d\" class=\"link\"> Rechnungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminSlip&amp;token=f69d6885af4e0400258ca8532f7dc0aa\" class=\"link\"> Rückvergütungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminDeliverySlip&amp;token=d8ae7d61ff0205b89b107e22d53bab56\" class=\"link\"> Lieferscheine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCarts&amp;token=77b52dcb113383cd08ac1695a1e3db8a\" class=\"link\"> Warenkörbe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/root/admin529q2cv96/index.php/product/catalog?_token=I0hKNCTOfeoU9RZIcHhH7tGDSQRHmHsQfNaksO8OtW0\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/root/admin529q2cv96/index.php/product/catalog?_token=I0hKNCTOfeoU9RZIcHhH7tGDSQRHmHsQfNaksO8OtW0\" class=\"link\"> Artikel
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCategories&amp;token=368379c684ceea8881348d8175e5c1c1\" class=\"link\"> Kategorien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminTracking&amp;token=ea02565c35f7f266a303af4078711aa2\" class=\"link\"> Kontrollübersicht
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminAttributesGroups&amp;token=cd6e5d2e05e8cbfcf3d6d315a7aefa6a\" class=\"link\"> Varianten &amp; Eigenschaften
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminManufacturers&amp;token=1b33a5d11ad81a4c731d70f8ef380948\" class=\"link\"> Marken &amp; Lieferanten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminAttachments&amp;token=f919d1b6d2430bdb794c193dfc14436f\" class=\"link\"> Dateien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCartRules&amp;token=963effe0ef0b923f9707080b9c0fd8c4\" class=\"link\"> Rabatt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/root/admin529q2cv96/index.php/stock/?_token=I0hKNCTOfeoU9RZIcHhH7tGDSQRHmHsQfNaksO8OtW0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCustomers&amp;token=235f5faa1d486699f229f37283cdae44\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Kunden
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCustomers&amp;token=235f5faa1d486699f229f37283cdae44\" class=\"link\"> Kunden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminAddresses&amp;token=c029c70931815289d70438c063450b53\" class=\"link\"> Adressen
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCustomerThreads&amp;token=1b4b6d5707bdc7d22101a71876642850\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Kundenservice
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCustomerThreads&amp;token=1b4b6d5707bdc7d22101a71876642850\" class=\"link\"> Kundenservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminOrderMessage&amp;token=7f5a8053606e3148565c91d6f8c8cd64\" class=\"link\"> Bestellnachrichten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminReturn&amp;token=409f2b290d4e809f683f8e29f565f4d3\" class=\"link\"> Warenrücksendungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminStats&amp;token=f2105e20d842c8a4e6b50a0abe19e49d\" class=\"link\">
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
                  <a href=\"/root/admin529q2cv96/index.php/module/catalog?_token=I0hKNCTOfeoU9RZIcHhH7tGDSQRHmHsQfNaksO8OtW0\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Module
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/root/admin529q2cv96/index.php/module/catalog?_token=I0hKNCTOfeoU9RZIcHhH7tGDSQRHmHsQfNaksO8OtW0\" class=\"link\"> Module und Dienste
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminAddonsCatalog&amp;token=3c316f6bd14659b337c61c71c39a2d8d\" class=\"link\"> Versanddienst
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminThemes&amp;token=e6975575126f1ac68a675d267a243f69\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminThemes&amp;token=e6975575126f1ac68a675d267a243f69\" class=\"link\"> Template und Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminThemesCatalog&amp;token=2d8590cc4d3cc586c8b71a8c3cbda7a5\" class=\"link\"> Templates
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCmsContent&amp;token=c25ed252f5ffb0f892c544e7ead55383\" class=\"link\"> Seiten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminModulesPositions&amp;token=597b424a9b86c60f17fbb486e7a8f265\" class=\"link\"> Positionen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminImages&amp;token=90e0692e84ffa609828caadf04114644\" class=\"link\"> Bilder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminLinkWidget&amp;token=ff8da9be1abdec9068bdf80fdfe9e01c\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCarriers&amp;token=8e057cbf885e908aa59c260331f24e71\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Versand
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCarriers&amp;token=8e057cbf885e908aa59c260331f24e71\" class=\"link\"> Versanddienste
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminShipping&amp;token=9270bf801430ee4b165354e859148153\" class=\"link\"> Voreinstellungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPayment&amp;token=9dc99a44a6ca98823fb3aae938605e6e\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Zahlungsart
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPayment&amp;token=9dc99a44a6ca98823fb3aae938605e6e\" class=\"link\"> Zahlungsarten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPaymentPreferences&amp;token=4e180000d3113335369c2c64eca34208\" class=\"link\"> Voreinstellungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminLocalization&amp;token=a7edef0e7c41ffccc2bec24037ddb28c\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    international
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminLocalization&amp;token=a7edef0e7c41ffccc2bec24037ddb28c\" class=\"link\"> Lokalisierung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCountries&amp;token=ce9b957429651103bf0da1f3fbc592c5\" class=\"link\"> Länder &amp; Gebiete
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminTaxes&amp;token=3ff8664bfebd1690eb020049c121028a\" class=\"link\"> Steuersätze
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminTranslations&amp;token=add1d70b255a246f3a603f95294efb42\" class=\"link\"> Übersetzungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Einstellungen</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPreferences&amp;token=2a69142c540bf4437c7084d6245b77d9\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Shop-Einstellungen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPreferences&amp;token=2a69142c540bf4437c7084d6245b77d9\" class=\"link\"> Allgemein
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminOrderPreferences&amp;token=59ea2d4972a8cf406249034ff163765f\" class=\"link\"> Bestellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPPreferences&amp;token=a46e2a9a875efa440cb9c59b9723ab63\" class=\"link\"> Artikel
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminCustomerPreferences&amp;token=d680b39201b0181e3a09f99a9325824b\" class=\"link\"> Benutzerdefinierte Einstellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminContacts&amp;token=240b6a0379202a7f64f23d07b1146ba1\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminMeta&amp;token=7b322c3f5b753b0e9aba15955761a5a8\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminSearchConf&amp;token=baa39684bd2ee0213fa120cff4009002\" class=\"link\"> Suche
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminGamification&amp;token=caa4271fefdd6499281fab3b1dfc32ba\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminInformation&amp;token=4898afc4576f4d96c6d3cf71059436ec\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Erweiterte Einstellungen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminInformation&amp;token=4898afc4576f4d96c6d3cf71059436ec\" class=\"link\"> Informationen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminPerformance&amp;token=4ab71afe0aa31f59f231592e8e0bb1e9\" class=\"link\"> Leistung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminAdminPreferences&amp;token=b2f0699027b44eda01ae1b189797678f\" class=\"link\"> Verwaltung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminEmails&amp;token=57e69bf10b47b5e4dee25c3a3664f9e0\" class=\"link\"> E-Mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminImport&amp;token=4a8e1ad79a3f8abbd3f3a5f512ac2816\" class=\"link\"> Importieren
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminEmployees&amp;token=743482ab0d6ede3c343b1d67f89e7aef\" class=\"link\"> Benutzerrechte
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminRequestSql&amp;token=0288d7e66632ce6d32495d8dc0358ad6\" class=\"link\"> Datenbank
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminLogs&amp;token=b00ac145a8d50a8eeff5dcc90576305b\" class=\"link\"> Log-Dateien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminWebservice&amp;token=7eaf81ad447fc1713417e7d14516ecab\" class=\"link\"> Webservice
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

  
        
    <div class=\"content-div -notoolbar\">

      

      
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
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Willkommen in Ihrem Shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hallo, ich bin Preston. Folgen Sie mir einfach auf einen kleinen Rundgang.<\\/p>\\n    <p>Hier lernen Sie die Grundlagen kennen, die jeder Shoper\\u00f6ffnung vorausgehen:\\n    Legen Sie den ersten Artikel an. Passen Sie den Shop an, richten Sie Versanddienste und Zahlungsarten ein ...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Los gehts!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Sp\\u00e4ter<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Auf zur Artikelerfassung\",\"subtitle\":{\"1\":\"Wie m\\u00f6chten Sie es beschreiben? Wichtig ist, was Ihre Kunden wissen wollen!\",\"2\":\"Treffende und ansprechende Informationen einf\\u00fcgen. Keine Bange, das k\\u00f6nnen Sie jederzeit wieder \\u00e4ndern.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Geben Sie dem Artikel einen treffende Namen.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Zun\\u00e4chst die Pflichtangaben. \\u00dcber die anderen Reiter k\\u00f6nnen optionmal erweiterte Angaben erfasst werden.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ein oder mehrere Bilder hinzuf\\u00fcgen, damit der Artikel ansprechend pr\\u00e4sentiert wird!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Zu welchem Preis wollen Sie den Artikel verkaufen?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Super! Ihr erster Artikel! Sieht doch gut aus, oder?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Individualisieren Sie Ihren Shop\",\"subtitle\":{\"1\":\"Wie soll Ihr Shop aussehen? Was macht ihn so unverwechselbar?\",\"2\":\"Passen Sie das Template an oder suchen Sie sich ein passendes Design aus dem Template-Angebot aus.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ein guter Anfang w\\u00e4re schon mal ein eigenes Logo hier!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wenn Sie wirklich etwas Besonderes suchen, schauen Sie sich die Templates im Angebot an!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Bezahlm\\u00f6glichkeiten einrichten\",\"subtitle\":{\"1\":\"Wie sollen Ihre Kunden bezahlen k\\u00f6nnen?\",\"2\":\"Passen Sie sich dem Markt an: F\\u00fcgen Sie die bei Ihren Kunden beliebten Zahlungsarten hinzu!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Diese Zahlungsarten sind bereits f\\u00fcr Ihre Kunden verf\\u00fcgbar.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Sie k\\u00f6nnen aber von hier weitere Zahlungsarten hinzuf\\u00fcgen!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Versandoptionen ausw\\u00e4hlen\",\"subtitle\":{\"1\":\"Welche Versandarten bevorzugen Sie?\",\"2\":\"W\\u00e4hlen Sie die Versandarten, die wohl am ehesten zu Ihren Kunden passen. Sie k\\u00f6nnen Versanddienste manuell erfassen oder auch fertige Versandmodule hinzuf\\u00fcgen.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Diese Versandarten sind aktuell f\\u00fcr Ihren Shop verf\\u00fcgbar.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Durch Einrichten zus\\u00e4tzlicher Versanddienste k\\u00f6nnen Sie mehr Versandoptionen anbieten\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Verbessern Sie Ihren Shop durch Module\",\"subtitle\":{\"1\":\"Mithilfe von Modulen k\\u00f6nnen Sie die Shopfunktionen erweitern bzw. die vorhandenen verwalten.\",\"2\":\"Einige Module sind bereits vorinstalliert, andere sind entweder kostenlos oder als Bezahlmodule erh\\u00e4ltlich - schauen Sie, was unsere Auswahl f\\u00fcr Sie bereith\\u00e4lt!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Seite 1 (Auswahl) bietet Ihnen eine Auswahl von Kaufmodulen. Die vorhandenen verwalten Sie unter \\\"Installierte Module\\\". Im dritten Fenster finden Sie Hinweise auf Versions-Updates oder fehlende Modul-Einstellungen.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">\\u00dcbernehmen Sie!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    Das waren erst die Grundlagen, es gibt aber noch viel mehr zu entdecken!<br \\/>\\n    Hier ein paar Links zur Vertiefung Ihrer Kenntnisse:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Quick Start<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">Forum<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Training<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Videoanleitung<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Ich bin bereit!<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/root/admin529q2cv96/index.php?controller=AdminWelcome&token=ab1929a8b9d461a1532b38f957b8afb4\", baseAdminDir);

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
        // line 1105
        $this->displayBlock('content_header', $context, $blocks);
        // line 1106
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1107
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1108
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1109
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
  <a href=\"http://localhost/root/admin529q2cv96/index.php?controller=AdminDashboard&amp;token=559d9d057e4ba6c0f9bb0343d6ff30b4\" class=\"btn btn-primary p-y-1 m-t-3\">
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
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Ladezeit \"></i> 0.817s</span>
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
\t\t\t\t\t<a href=\"https://addons.prestashop.com/de/login?email=dario.huzanic%40lernende.bfo-vs.ch&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2Froot%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/root/admin529q2cv96/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/de/login?email=dario.huzanic%40lernende.bfo-vs.ch&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2Froot%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\">
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
        // line 1274
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

    // line 1105
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1106
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1107
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1108
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1274
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
        return "__string_template__0dbbbf6ec34628c917b6653f624659ef5ddfeb3e2ee160b8a4efbb7b749d7e67";
    }

    public function getDebugInfo()
    {
        return array (  1353 => 1274,  1348 => 1108,  1343 => 1107,  1338 => 1106,  1333 => 1105,  1324 => 84,  1316 => 1274,  1149 => 1109,  1146 => 1108,  1143 => 1107,  1140 => 1106,  1138 => 1105,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__0dbbbf6ec34628c917b6653f624659ef5ddfeb3e2ee160b8a4efbb7b749d7e67", "");
    }
}
