<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8c5ddb74             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { protected ?Generator $generator = null; public function siciqscsekqaqess() : ?Generator { if ($this->generator) { goto siqagquguiemuoku; } $this->generator = Generator::symcgieuakksimmu(); siqagquguiemuoku: return $this->generator; } public function sywqsimcesscwamc() { $yeacayasgueouoqc = null; $wsgaqoyasieoiwuw = $this->eiwcuqigayigimak(Setting::aegqguumccieqwyk); $seauiwyeoycowegg = [Constants::ugsuecoyuqcamsac => "\x70\157\x73\164\x6d\x65\164\141", Constants::cgiswgcumueqgcmw => 1, Constants::cqcimoqckgmaacyw => "\103\101\x53\124\x28\x6d\145\x74\x61\x5f\x76\141\x6c\x75\x65\x73\40\101\x53\40\x53\x49\107\x4e\105\x44\51", Constants::iowgsqgiaamyuswi => [Constants::osocaqqumyuooqyo => self::sqsaisksswaayayo]]; if (!$wsgaqoyasieoiwuw) { goto ycakugokkqkuqyiu; } $yooaaeuioeawcqms = date("\131\55\x30\61\x2d\x30\x31"); $seusouwwgeqagsce = date("\x59\x2d\61\x32\55\x33\x31"); $seauiwyeoycowegg[Constants::iowgsqgiaamyuswi]["\x70\x6f\x73\164\x5f\x69\144"] = [Constants::ugsuecoyuqcamsac => "\x70\x6f\163\x74\x6d\x65\164\141", Constants::soquiwyuimckgiow => "\x70\x6f\x73\164\x5f\x69\x64", Constants::iowgsqgiaamyuswi => [Constants::osocaqqumyuooqyo => self::cekyaeaeeigmwysa, [Constants::ciyoccqkiamemcmm => $yooaaeuioeawcqms, Constants::meisqwykgaymauka => Constants::iwmgegikocuwggua, Constants::eugyciakiowwcuwm => "\x3e\75"], [Constants::ciyoccqkiamemcmm => $seusouwwgeqagsce, Constants::meisqwykgaymauka => Constants::iwmgegikocuwggua, Constants::eugyciakiowwcuwm => "\x3c\x3d"]]]; ycakugokkqkuqyiu: $eioamqeaccimmisg = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->gmogewiwceqokqmy($seauiwyeoycowegg); if (!$eioamqeaccimmisg) { goto oouoqimaaqcmccay; } $yeacayasgueouoqc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eioamqeaccimmisg, Constants::iwmgegikocuwggua); oouoqimaaqcmccay: if (!$yeacayasgueouoqc) { goto kciouyuaqkyqomam; } $mmwoqcwiwemokkue = $yeacayasgueouoqc + 1; goto wwkgkaecgiwggcck; kciouyuaqkyqomam: $occuycyyyycsosao = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg([Constants::ugsuecoyuqcamsac => "\160\x6f\x73\x74\x6d\145\x74\141", Constants::soquiwyuimckgiow => "\x63\157\165\156\164\x28\52\51", Constants::iowgsqgiaamyuswi => [Constants::osocaqqumyuooqyo => self::sqsaisksswaayayo]]); $mmwoqcwiwemokkue = 1; $mesieoomaagsgyqe = $this->eiwcuqigayigimak(Setting::uumqsyagoeuaaimw, 0); if (!$mesieoomaagsgyqe) { goto gygawoqywkukmqee; } if (!(!$wsgaqoyasieoiwuw || $occuycyyyycsosao == 0)) { goto sycygoiaiqqageym; } $mmwoqcwiwemokkue = $mesieoomaagsgyqe; sycygoiaiqqageym: gygawoqywkukmqee: wwkgkaecgiwggcck: $acwmgkosiwekkosk = $this->eiwcuqigayigimak(Setting::ysoqycicuciiyuaw, 0); if (!(!$wsgaqoyasieoiwuw && $acwmgkosiwekkosk > $mmwoqcwiwemokkue)) { goto umgaesggesswoaqe; } $mmwoqcwiwemokkue = $acwmgkosiwekkosk; umgaesggesswoaqe: return $mmwoqcwiwemokkue; } public function ywgkowokogikyoem($umwqusowiqmyseom) : string { $gkkgcoiwayaccqgm = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->iooowgsqoyqseyuu($umwqusowiqmyseom); $egaioscwooawuigc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); $qqueccegigsqmmmg = $this->iaicueasqoiusuoo([Constants::awkcoioakcaougmq => $umwqusowiqmyseom]); $yuwymayicwwqiske = esc_html($this->eiwcuqigayigimak(Setting::mqcukmwiaqukgywi)); $yuwymayicwwqiske = $this->imuqeaaqmwwkgqui($yuwymayicwwqiske, $qqueccegigsqmmmg); $scqcgogsiaiksiiq = esc_html($this->eiwcuqigayigimak(Setting::wywskiqiowiagemy)); $scqcgogsiaiksiiq = $this->imuqeaaqmwwkgqui($scqcgogsiaiksiiq, $qqueccegigsqmmmg); if (!($wukmmiqowweyucaa = $this->eiwcuqigayigimak(Setting::osgqakokgccsywgw))) { goto qsygcycwieukkgwc; } $egaioscwooawuigc = str_pad($egaioscwooawuigc, strlen($wukmmiqowweyucaa), "\60", STR_PAD_LEFT); qsygcycwieukkgwc: return $yuwymayicwwqiske . $egaioscwooawuigc . $scqcgogsiaiksiiq; } public function mwmuaeuyequywmsq($umwqusowiqmyseom) { $qummwmsmceweyoqo = [self::ykqogmimmamwckwe => $this->eoagosyscaaqycai($umwqusowiqmyseom), self::sqsaisksswaayayo => $this->oskkikcewyayqmme($umwqusowiqmyseom), self::cekyaeaeeigmwysa => current_time("\x6d\x79\x73\161\154"), self::mgisuqmqaesqscso => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wmamggmmccsqcqwa), self::wkuaqkmwcegcgwim => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qiookqywwgemeamk), self::sokaqgmykimmecwq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kwmkawqoiesweswy), self::owoskccgqgyycqoe => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wsccocqiicegwska), self::cueaooscqucmcseu => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::aockomuqgkgqyaki), self::occkmmmsugiucmsi => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kosymqioioyguigs), self::yisqmeewaaykaeqg => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::ekyyyewmowkgcgay), self::asmcgcuuyowickgq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qaowyaoaqwacmgeo), self::uicuqucwwkscyyyy => $this->ywgkowokogikyoem($umwqusowiqmyseom)]; if (!($gkkgcoiwayaccqgm = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->iooowgsqoyqseyuu($umwqusowiqmyseom))) { goto iqcogmsguwoikame; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $seumokooiykcomco->ksmqawcowkmegigw(self::uqkoiiemwwwicsyu, $qummwmsmceweyoqo, $gkkgcoiwayaccqgm); foreach ($qummwmsmceweyoqo as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $seumokooiykcomco->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gkkgcoiwayaccqgm); quwcqmyokicssyew: } kiwqkcaekqqyuegq: iqcogmsguwoikame: } public function eoagosyscaaqycai($umwqusowiqmyseom) : ?string { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); $gkkgcoiwayaccqgm = $aqauykcugwiqkumq->iooowgsqoyqseyuu($umwqusowiqmyseom); $umwqusowiqmyseom = $aqauykcugwiqkumq->get($umwqusowiqmyseom); $ogegikscwkaowsqa = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm); if ($ogegikscwkaowsqa) { goto yqykqysmiquwoasu; } $oqycwugsseyiisou = $this->eiwcuqigayigimak(Setting::ekeaeyoouiiymayo); if ($oqycwugsseyiisou === Constants::amcogigwsaqssuai) { goto gimmuoqwckiseaik; } $ogegikscwkaowsqa = $umwqusowiqmyseom->get_date_created(); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $ogegikscwkaowsqa = current_time("\155\171\163\161\154"); cmqucgoewuyieoyk: yqykqysmiquwoasu: return $this->cqswciouesmewqke($ogegikscwkaowsqa); } public function oskkikcewyayqmme($umwqusowiqmyseom) { $egaioscwooawuigc = 0; if (!($gkkgcoiwayaccqgm = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->iooowgsqoyqseyuu($umwqusowiqmyseom))) { goto ygcsmkuycoagwyou; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $egaioscwooawuigc = $seumokooiykcomco->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); if ($egaioscwooawuigc) { goto omugkkesagcyagmk; } if ($this->eiwcuqigayigimak(Setting::gooouyogomkqyiwa)) { goto ayyweymyuuiauamo; } $egaioscwooawuigc = $this->sywqsimcesscwamc(); goto mosqsmqimqgqoase; ayyweymyuuiauamo: $egaioscwooawuigc = $gkkgcoiwayaccqgm; mosqsmqimqgqoase: $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update(self::cgsyasqoqekikcue, date("\131")); $egaioscwooawuigc = $this->ocksiywmkyaqseou("\x70\144\146\x5f\x69\x6e\166\x6f\151\x63\x65\163\137\x73\x65\164\137\151\156\166\157\151\x63\x65\x5f\x6e\x75\x6d\142\145\x72", $egaioscwooawuigc, $gkkgcoiwayaccqgm); $seumokooiykcomco->ksmqawcowkmegigw(self::sqsaisksswaayayo, $egaioscwooawuigc, $gkkgcoiwayaccqgm); Setting::symcgieuakksimmu()->eiaacegkigqiwawg(Setting::ysoqycicuciiyuaw, $egaioscwooawuigc); omugkkesagcyagmk: ygcsmkuycoagwyou: return $egaioscwooawuigc; } }
