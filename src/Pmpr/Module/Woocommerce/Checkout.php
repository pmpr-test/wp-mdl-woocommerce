<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3fcc659e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce; class Checkout extends Container { const wmceigwksmgagqaw = 'redirect_to_checkout'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_head', [$this, 'uksgekgcioqmceuo'])->qcsmikeggeemccuu('template_redirect', [$this, 'qygwgkqaiuigweqk']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_login_redirect', [$this, 'gwqgmkqcgwwmweom'], 100)->cecaguuoecmccuse('woocommerce_login_active_tab', [$this, 'uykoisoaoysaegci'], 100)->cecaguuoecmccuse('woocommerce_registration_redirect', [$this, 'gwqgmkqcgwwmweom'], 100); parent::kgquecmsgcouyaya(); } public function wkqciceaaimcscog() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(self::wmceigwksmgagqaw); } public function uksgekgcioqmceuo() { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); if ($this->wkqciceaaimcscog() && $cgceoyqmmwumqyqa->ckeyeaouokcgeqeq()) { if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $cgceoyqmmwumqyqa->yiggueaiwiygoiyi($this->eaqyesumeyoigesy()); } else { $yogeuygiqackeiky = $cgceoyqmmwumqyqa->aoqkwiysueqqwigk(); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('meta', ['http-equiv' => 'Refresh', 'content' => "0; url='{$yogeuygiqackeiky}'"]); exit; } } } public function eaqyesumeyoigesy() { return $this->ocksiywmkyaqseou('checkout_force_auth_message', __('Please log in or register to complete your purchase.', PR__MDL__WOOCOMMERCE)); } public function gwqgmkqcgwwmweom($gwqgmkqcgwwmweom) : string { if ($this->wkqciceaaimcscog()) { $gwqgmkqcgwwmweom = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aoqkwiysueqqwigk(); } return $gwqgmkqcgwwmweom; } public function uykoisoaoysaegci($cciauwuwuqaywgce) : string { if ($this->wkqciceaaimcscog()) { $cciauwuwuqaywgce = 'register'; } return $cciauwuwuqaywgce; } public function qygwgkqaiuigweqk() { if ($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gqoskmoekogyqwsc() && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $yogeuygiqackeiky = $ekymkycgewkiouqe->qmgkumeygiksekck(); if ($yogeuygiqackeiky && $yogeuygiqackeiky->is_registration_enabled() && $yogeuygiqackeiky->is_registration_required()) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(self::wmceigwksmgagqaw, 1, $ekymkycgewkiouqe->cswsgqkiqaowoamq())); exit; } } } }
