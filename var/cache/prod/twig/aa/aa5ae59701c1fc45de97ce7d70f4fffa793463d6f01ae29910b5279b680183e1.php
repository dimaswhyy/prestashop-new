<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f1447612851385e6e51916951d0ecaf8e355823681bd5c3657ef045c58b6ae4f */
class __TwigTemplate_625cb80111dd3e460da53f49af45421d98495c2073f606bca7b427de57ca5c34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Theme & Logo > Tema • Sichana Cellular</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.8.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = 'a962780e10f46528379674e64e82100b';
    var token_admin_orders = tokenAdminOrders = '2cfe560c275726dbb4a6d037248133a8';
    var token_admin_customers = '0adc10f2343af1f80c57489c2e2cbe29';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'd3fd6d91c42a5d99bd2b839b37b46a8e';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '1bfa33e33b8799df4fb7e6016020fa07';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin344zfkxyz/index.php/improve/modules/catalog/recommended?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w';
    var admin_notification_get_link = '/prestashop/admin344zfkxyz/index.php/common/notifications?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w';
    var adm";
        // line 43
        echo "in_notification_push_link = adminNotificationPushLink = '/prestashop/admin344zfkxyz/index.php/common/notifications/ack?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w';
    var tab_modules_list = '';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/prestashop/admin344zfkxyz/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin344zfkxyz/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin344zfkxyz\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin344zfkxyz\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00";
        // line 66
        echo "d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin344zfkxyz/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.8.6\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin344zfkxyz/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.8.6\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin344zfkxyz/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_fav";
        // line 85
        echo "iconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin344zfkxyz/index.php/common/notifications?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/prestashop\\/admin344zfkxyz\\/index.php?controller=AdminGamification&token=67cf77cbd9c3f3fe7d0b8addfb0eea86\";
            var current_id_tab = 53;
        </script>

";
        // line 107
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-id adminthemes\"
  data-base-url=\"/prestashop/admin344zfkxyz/index.php\"  data-token=\"NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminDashboard&amp;token=c25cdd099dbdb672451999f0e9a31432\"></a>
      <span id=\"shop_version\">1.7.8.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9fc80c5f6697393fe522b2c9003c1e0a\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin344zfkxyz/index.php/sell/catalog/categories/new?token=81a7eb6090afe680b7d9f1f7114fa125\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin344zfkxyz/index.php/improve/modules/manage?token=81a7eb6090afe680b7d9f1f7114fa125\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminOrders&amp;token=2cfe560c275726dbb4a6d037248133a8\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a cla";
        // line 144
        echo "ss=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin344zfkxyz/index.php/sell/catalog/products/new?token=81a7eb6090afe680b7d9f1f7114fa125\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=dc80d45e3d825ac526605950eef3f570\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"168\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w&&-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"
        data-post-link=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminQuickAccesses&token=4f9751505f67826c13d6710741685809\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Theme &amp; Logo - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminQuickAccesses&token=4f9751505f67826c13d6710741685809\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin344zfkxyz/index.php?controller=AdminSearch&amp;token=3971a96f64fb82a4a802c68f784370c8\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js";
        // line 182
        echo "-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Nama\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor invoice\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle";
        // line 196
        echo "-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Lihat toko</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
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
              Pesanan<span id=\"_nb_new_orders_\"></span>
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
              Pelanggan<span id=\"_nb_ne";
        // line 252
        echo "w_customers_\"></span>
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
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=136545e0f19e7b07076bd063dd4190e9\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Aktifkah Anda di media sosial akhir-akhir ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
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
      dari <strong>_customer_name_</strong> ";
        // line 300
        echo "(_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
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
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Sichana</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/employees/1/edit?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\">
      <i class=\"material-icons\">edit</i>
      <span>Profile Anda</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=d";
        // line 339
        echo "ownload17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Pelatihan</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Prestashop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminLogin&amp;logout=1&amp;token=402497366652f03ad4f81f3386b01b88\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/employees/toggle-navigation?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminDashboard&amp;token=c25cdd099dbdb672451999f0e9a31432\" ";
        // line 367
        echo "class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Jual</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/sell/orders/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Penjualan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/orders/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Penjualan
                                </a>
                              </li>

                                                                                  
                              
                                                            
             ";
        // line 407
        echo "                 <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/orders/invoices/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Invoice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/orders/credit-slips/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Nota kredit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/orders/delivery-slips/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Nota pengiriman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCarts&amp;token=136545e0f19e7b07076bd063dd4190e9\" class=\"link\"> Daftar belanja
                                </a>
                              </li>

                                                             ";
        // line 436
        echo "                 </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/sell/catalog/products?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/catalog/products?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/catalog/categories?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Kategori
                                </a>
 ";
        // line 467
        echo "                             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/catalog/monitoring/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminAttributesGroups&amp;token=1594e4f18f5c20c107df35de6464414b\" class=\"link\"> Atribut dan Fitur
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/catalog/brands/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Brand dan Supplier
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/";
        // line 497
        echo "prestashop/admin344zfkxyz/index.php/sell/attachments/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCartRules&amp;token=dc80d45e3d825ac526605950eef3f570\" class=\"link\"> Diskon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/stocks/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Stok
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/sell/customers/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Pelanggan
                      </span>
                                      ";
        // line 529
        echo "              <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/customers/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/addresses/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Alamat
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCustomerThreads&amp;token=d3fd6d91c42a5d99bd2b839b37b46a8e\" class=\"link\">
                     ";
        // line 558
        echo " <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Layanan Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCustomerThreads&amp;token=d3fd6d91c42a5d99bd2b839b37b46a8e\" class=\"link\"> Layanan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/sell/customer-service/order-messages/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Pesan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminRet";
        // line 587
        echo "urn&amp;token=5627b045a29c9f6f18e7043669aba588\" class=\"link\"> Retur barang
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminStats&amp;token=9fc80c5f6697393fe522b2c9003c1e0a\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistik
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Peningkatan</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/improve/modules/manage?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modul
  ";
        // line 627
        echo "                    </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/modules/manage?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/modules/addons/modules/catalog?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Katalog Modul
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"";
        // line 655
        echo "subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/improve/design/themes/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Desain
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/design/themes/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/modules/addons/themes/catalog?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Kumpulan Tema
                                </a>
                              </li>

                                                                                  
                              
                          ";
        // line 684
        echo "                                  
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/design/mail_theme/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Tema email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/design/cms-pages/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Halaman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/design/modules/positions/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Posisi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminImages&amp;token=3ecc5bb20a54a2cf4be1d7d80d1c6a32\" class=\"link\"> Pengaturan Gambar
                                </a>
                       ";
        // line 712
        echo "       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/modules/link-widget/list?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Daftar tautan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminCarriers&amp;token=fb43d2e27b1f970c520d9178e991c1aa\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Pengiriman
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/in";
        // line 743
        echo "dex.php?controller=AdminCarriers&amp;token=fb43d2e27b1f970c520d9178e991c1aa\" class=\"link\"> Kurir
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/shipping/preferences/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/improve/payment/payment_methods?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pembayaran
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-levelt";
        // line 775
        echo "wo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/payment/payment_methods?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Cara Pembayaran
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/payment/preferences?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/improve/international/localization/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internasional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                       ";
        // line 805
        echo "               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/international/localization/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Pelokalan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/international/zones/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Lokasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/international/taxes/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Pajak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/improve/international/translations/settings?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZ";
        // line 833
        echo "O14w\" class=\"link\"> Terjemahan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"142\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminPsfacebookModule&amp;token=4bee94ba353047965cf272a7089c73c0\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-142\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminPsfacebookModule&amp;token=4bee94ba353047965cf272a7089c73c0\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminP";
        // line 865
        echo "sxMktgWithGoogleModule\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=660c1273056b2f9d66311aba3774eb7f\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfigurasi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/configure/shop/preferences/preferences?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parameter Toko
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin344z";
        // line 901
        echo "fkxyz/index.php/configure/shop/preferences/preferences?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Umum
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/shop/order-preferences/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Pengaturan Order
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/shop/product-preferences/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/shop/customer-preferences/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Pengaturan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                 ";
        // line 931
        echo "                                           
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/shop/contacts/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Kontak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/shop/seo-urls/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminSearchConf&amp;token=c5a57ea1a17579b622cf0261bca71e8e\" class=\"link\"> Cari
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminGamification&amp;token=67cf77cbd9c3f3fe7d0b8addfb0eea86\" class=\"link\"> Merchant Expertise
                                </a>";
        // line 958
        echo "
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/system-information/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parameter lanjutan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/system-information/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Informasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
               ";
        // line 990
        echo "                 <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/performance/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Kinerja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/administration/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Administrasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/emails/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/import/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Impor
                                </a>
                              </li>

                                                                                  
                              
                                        ";
        // line 1020
        echo "                    
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/employees/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Karyawan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/sql-requests/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/logs/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Log
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/webservice-keys/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Webservice
                                </a>
                              </li>

    ";
        // line 1050
        echo "                                                                                                                                                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin344zfkxyz/index.php/configure/advanced/feature-flags/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">55%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:54.545454545455%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Theme &amp; Logo &gt; Tema          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary p";
        // line 1109
        echo "ointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin344zfkxyz/index.php/improve/design/themes/import?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"                  title=\"Tambah theme\"                >
                  <i class=\"material-icons\">add</i>                  Tambah theme
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/prestashop/admin344zfkxyz/index.php/improve/design/themes/export?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"                  title=\"Ekspor theme aktif\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Ekspor theme aktif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin344zfkxyz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.6%2526country%253Did/Bantuan?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                          ";
        // line 1139
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/prestashop/admin344zfkxyz/index.php/improve/design/themes/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminPsThemeCustoConfiguration&token=6df5137e2598184de35af76616519ba0\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"131\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminPsThemeCustoAdvanced&token=10314ff5095504ff45a139d957f210c5\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"132\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      <";
        // line 1160
        echo "/span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/admin344zfkxyz/index.php/improve/design/themes/import?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"              title=\"Tambah theme\"            >
              Tambah theme
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/";
        // line 1180
        echo "prestashop/admin344zfkxyz/index.php/improve/design/themes/export?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"              title=\"Ekspor theme aktif\"            >
              Ekspor theme aktif
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Bantuan\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin344zfkxyz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.6%2526country%253Did/Bantuan?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\"
            >
              Bantuan
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modul dan layanan yang direkomendasikan',
        'Close': 'Tutup',
      },
      recommendedModulesUrl: '/prestashop/admin344zfkxyz/index.php/modules/addons/modules/recommended?tabClassName=AdminThemes&_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 54.545454545455%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 54.545454545455%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style";
        // line 1227
        echo "=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 54.545454545455%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 54.545454545455%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 54.545454545455%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(6, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ayo kita mulai!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/prestashop\\/admin344zfkxyz\\/index.php?controller=AdminDashboard&token=c25cdd099dbdb672451999f0e9a31432\"}]},{\"name\":\"product\",";
        // line 1254
        echo "\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop\\/admin344zfkxyz\\/index.php\\/sell\\/catalog\\/products\\/new?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin344zfkxyz\\/index.php\\/improve\\/design\\/themes\\/?_token=NP2VW";
        echo "Johusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"\\/prestashop\\/admin344zfkxyz\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin344zfkxyz\\/index.php\\/improve\\/payment\\/payment_methods?_token=NP2VWJohusp-63Uc1QIZmRnWR8iqB_cu3maRSsZO14w\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/localhost\\/prestashop\\/admin344zfkxyz\\/index.php?controller=AdminCarriers&token=fb43d2e27b1f970c520d9178e991c1aa\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\n          Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\n        <\\/p>\\n        <div class=\\\"conta";
        echo "iner-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Pelatihan<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/prestashop\\/admin344zfkxyz\\/index.php?controller=AdminDashboard&token=c25cdd099dbdb672451999f0e9a31";
        echo "432\"}]}]}, 0, \"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminWelcome&token=856e74f6f2b0a10adbae58b20a7f35ef\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
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


                                            ";
        // line 1288
        echo "            
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1294
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"https://localhost/prestashop/admin344zfkxyz/index.php?controller=AdminDashboard&amp;token=c25cdd099dbdb672451999f0e9a31432\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=sichanapranata%40gmail.com&amp;firstname=Sichana&amp;lastname=Pranata&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin344zfkxyz/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t";
        // line 1342
        echo "\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=sichanapranata%40gmail.com&amp;firstname=Sichana&amp;lastname=Pranata&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" clas";
        // line 1382
        echo "s=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
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
        // line 1402
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1294
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1402
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__f1447612851385e6e51916951d0ecaf8e355823681bd5c3657ef045c58b6ae4f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1573 => 1402,  1556 => 1294,  1547 => 107,  1538 => 1402,  1516 => 1382,  1474 => 1342,  1420 => 1294,  1412 => 1288,  1373 => 1254,  1344 => 1227,  1295 => 1180,  1273 => 1160,  1250 => 1139,  1218 => 1109,  1157 => 1050,  1125 => 1020,  1093 => 990,  1059 => 958,  1030 => 931,  998 => 901,  960 => 865,  926 => 833,  896 => 805,  864 => 775,  830 => 743,  797 => 712,  767 => 684,  736 => 655,  706 => 627,  664 => 587,  633 => 558,  602 => 529,  568 => 497,  536 => 467,  503 => 436,  472 => 407,  430 => 367,  400 => 339,  359 => 300,  309 => 252,  251 => 196,  235 => 182,  195 => 144,  153 => 107,  129 => 85,  108 => 66,  83 => 43,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f1447612851385e6e51916951d0ecaf8e355823681bd5c3657ef045c58b6ae4f", "");
    }
}