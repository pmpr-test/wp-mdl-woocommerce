<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc34534485f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce; use DateTime; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Woocommerce\Invoice\Invoice; use WC_Product_Variable; class Woocommerce extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('WooCommerce', PR__MDL__WOOCOMMERCE); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Setting::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Checkout::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'], 99999)->qcsmikeggeemccuu('woocommerce_payment_complete', [$this, 'kgwgemeakauacagu'], 9999)->qcsmikeggeemccuu('woocommerce_before_variations_form', [$this, 'eycseukeqsgiqgky']); } public function kgquecmsgcouyaya() { $this->qcsmikeggeemccuu('woocommerce_ordeby_dropdown', [$this, 'wqssakswywwmguga'], 10, 2); $this->aqaqisyssqeomwom('product_discount_expire_html', [$this, 'yeqqmkwkggyuuwww'], 10, 2); } public function init() { $this->dequeue(); } public function dequeue() { $eueuqacmukymcyya = 'woo-tracks'; if ($this->caokeucsksukesyo()->usugyumcgeaaowsi()->wyouuiscukymcuua($eueuqacmukymcyya)) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->cawwmsmyseesuyee($eueuqacmukymcyya); } } public function kgwgemeakauacagu() { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->uauicwgqqogawesc(); } public function wqssakswywwmguga($qiouiwasaauyaaue = [], $sikaymiwcesagayc = null) { if ($qiouiwasaauyaaue) { $this->caokeucsksukesyo()->kugiyqykwaskawsc()->mccagaqeagiikkec(Constants::gqiasegggowomgie)->gswweykyogmsyawy(__('Sort by:', PR__MDL__WOOCOMMERCE))->acauweqyyugwisqc($qiouiwasaauyaaue)->uuagoowwgcuosuuu()->mswqgegakmgmewwq()->qigsyyqgewgskemg('orderby')->iygyugseyaqwywyg($sikaymiwcesagayc)->render([Constants::qaacaqioeyiuakeu => true]); } } public function eycseukeqsgiqgky() { global $product; if ($product instanceof WC_Product_Variable && count($product->get_variation_attributes()) === 1) { $iwamiguusayooguq = Setting::ckgyyysykiycqwwm(); if ($iwamiguusayooguq) { $wwgucssaecqekuek = (array) $this->ocksiywmkyaqseou('woocommerce_variable_product_guide_attrs', [], $product); echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($iwamiguusayooguq, $wwgucssaecqekuek); } } } public function yeqqmkwkggyuuwww($owiuekcekysskaoe, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::oguseymmyyoyaako => '', 'class' => '']); $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($ywmkwiwkosakssii[Constants::oguseymmyyoyaako]); if ($product) { $acuayeeoiwokyomo = $product->get_date_on_sale_to(); $mcmcymukmqioukkk = $product->get_date_on_sale_from(); if ($mcmcymukmqioukkk && $acuayeeoiwokyomo) { $cugkqygegsymsyic = new Datetime(); $iyqeksimguuekuum = $cugkqygegsymsyic->diff($acuayeeoiwokyomo); $acuayeeoiwokyomo = $acuayeeoiwokyomo->oacwasaeqqewmykw(); $cugkqygegsymsyic = $cugkqygegsymsyic->oacwasaeqqewmykw(); $mcmcymukmqioukkk = $mcmcymukmqioukkk->oacwasaeqqewmykw(); if ($cugkqygegsymsyic > $mcmcymukmqioukkk && $cugkqygegsymsyic < $acuayeeoiwokyomo) { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $egkyssmuqcwaciya = $ywmkwiwkosakssii['class']; if ($iyqeksimguuekuum->days > 99) { $owiuekcekysskaoe = wp_date($uuwwyaeymswgsgsi->uyomwmskouyyqyyq(), $acuayeeoiwokyomo); } else { if ($iyqeksimguuekuum->days > 0) { $owiuekcekysskaoe = sprintf(__('%s days left!', PR__MDL__WOOCOMMERCE), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($iyqeksimguuekuum->days)); } else { $egkyssmuqcwaciya .= ' countdown-timer js-counter'; $owiuekcekysskaoe = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("{$iyqeksimguuekuum->format('%H')}:{$iyqeksimguuekuum->format('%I')}:{$iyqeksimguuekuum->format('%S')}"); } } $owiuekcekysskaoe = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yekemqwyimcqgeuk($owiuekcekysskaoe, date($uuwwyaeymswgsgsi->yoaaussmackoisuw(), $acuayeeoiwokyomo), '', ['class' => $egkyssmuqcwaciya . ' sale-price-expire']); } } } return $owiuekcekysskaoe; } }
