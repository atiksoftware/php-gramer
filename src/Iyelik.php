<?php 

    namespace Atiksoftware\Gramer;

    class Iyelik
    {

        public static function Ek($ad, $ektipi= "in"){

            $sertsessizler = array("ç", "f", "h", "k", "p","s", "ş", "t");
            
            /// türkçe sesli ve sert sessiz karakterler
            $buyuk = array("A", "I", "E", "İ", "U","O", "Ü", "Ö", "Ç", "F", "H", "K", "P","S", "Ş", "T");
            $kucuk = array("a", "ı", "e", "i", "u","o", "ü", "ö", "ç", "f", "h", "k", "p","s", "ş", "t");
            $kucultulmus = str_replace($buyuk, $kucuk, $ad);
            $isim=trim($kucultulmus);
            $sonharf = substr($isim, -1);    // isimdeki son karakteri bulduk
            if(ord($sonharf) > 130){
                $sonharf = substr($isim, -2);
            }

            /// aşağıdaki kısım regexp ile son sesli harfi buluyor. 
            /// bugcheck şeysi regexp özürlü turkce harfleri adam etmek için. 
            $bugcheckkaynak = array("ı", "ö", "ü");
            $bugcheckhedef = array("a", "`", "`");
            $bugfixed=str_replace($bugcheckkaynak, $bugcheckhedef, $isim);
            preg_match_all('/[aeiou`]/', $bugfixed, $bulunanlar);
            $sesliler=$bulunanlar[0];
            $sonsesli=end($sesliler); //isimdeki son sesli harfi bulduk
 

            switch ($ektipi) { 
                case 'in': // iyelik eki -> Ahmet'in
                case 'ın': 
                case 'un': 
                case 'nın': 
                case 'nin': 
                case 'nun': 
                case 'nün': 
                    if ($sonharf=="a" || $sonharf=="ı") {$eki="'nın";}
                    elseif ($sonharf=="e" || $sonharf=="i") {$eki="'nin";}
                    elseif ($sonharf=="u" || $sonharf=="o") {$eki="'nun";}
                    elseif ($sonharf=="ü" || $sonharf=="ö") {$eki="'nün";}

                    elseif ($sonsesli=="a" || $sonsesli=="ı") {$eki="'ın";}
                    elseif ($sonsesli=="e" || $sonsesli=="i") {$eki="'in";}
                    elseif ($sonsesli=="u" || $sonsesli=="o") {$eki="'un";}
                    elseif ($sonsesli=="`" ) {$eki="'ün";}
                    else  {$eki="'ın";} 
                break;
                
                case 'e': // ismin e hali -> Ahmet'e
                case 'a':
                case 'ye':
                case 'ya':
                    if ($sonharf=="a" || $sonharf=="ı" || $sonharf=="u" || $sonharf=="o") {$eki="'ya";}
                    elseif ($sonharf=="e" || $sonharf=="i" || $sonharf=="ü" || $sonharf=="ö") {$eki="'ye";}

                    elseif ($sonsesli=="a" || $sonsesli=="ı" || $sonsesli=="u" || $sonsesli=="o") {$eki="'a";}
                    elseif ($sonsesli=="e" || $sonsesli=="i" || $sonsesli=="ö" || $sonsesli=="ü") {$eki="'e";}
                    else  {$eki="'a";}         
                break;
                
                case 'i': // ismin i hali -> Ahmet'i 
                case 'yı':
                case 'yi':
                case 'yu':
                case 'yü':
                case 'ı':
                case 'u':
                    if ($sonharf=="a" || $sonharf=="ı") {$eki="'yı";}
                    elseif ($sonharf=="e" || $sonharf=="i") {$eki="'yi";}
                    elseif ($sonharf=="u" || $sonharf=="o") {$eki="'yu";}
                    elseif ($sonharf=="ü" || $sonharf=="ö") {$eki="'yü";}

                    elseif ($sonsesli=="a" || $sonsesli=="ı") {$eki="'ı";}
                    elseif ($sonsesli=="e" || $sonsesli=="i") {$eki="'i";}
                    elseif ($sonsesli=="u" || $sonsesli=="o") {$eki="'u";}
                    elseif ($sonsesli=="`" ) {$eki="'ü";}      
                break;
                    

                case 'da': // ismin de hali -> Ahmet'te / Ayşe'de
                case 'de': 
                case 'ta': 
                case 'te': 
                    if ($sonharf=="a" || $sonharf=="ı" || $sonharf=="u" || $sonharf=="o") {$eki="'da";}
                    elseif ($sonharf=="e" || $sonharf=="i" || $sonharf=="ü" || $sonharf=="ö") {$eki="'de";}
                    elseif (in_array($sonharf, $sertsessizler) and ($sonsesli=="a" || $sonsesli=="ı" || $sonsesli=="u" || $sonsesli=="o") ) {$eki="'ta";}
                    elseif (in_array($sonharf, $sertsessizler) and ($sonsesli=="e" || $sonsesli=="i" || $sonsesli=="ü" || $sonsesli=="ö") ) {$eki="'te";}
                    elseif ($sonsesli=="a" || $sonsesli=="ı" || $sonsesli=="u" || $sonsesli=="o") {$eki="'da";}
                    elseif ($sonsesli=="e" || $sonsesli=="i" || $sonsesli=="ü" || $sonsesli=="ö") {$eki="'da";}
                    elseif (in_array($sonharf, $sertsessizler)) {$eki="'ta";} 
                    else  {$eki="'da";}         
                break;        
                
                case 'den': // ismin de hali -> Ahmet'ten / Ayşe'den
                case 'den': 
                case 'ten': 
                case 'tan': 
                    if ($sonharf=="a" || $sonharf=="ı" || $sonharf=="u" || $sonharf=="o") {$eki="'dan";}
                    elseif ($sonharf=="e" || $sonharf=="i" || $sonharf=="ü" || $sonharf=="ö") {$eki="'den";}
                    elseif (in_array($sonharf, $sertsessizler) and ($sonsesli=="a" || $sonsesli=="ı" || $sonsesli=="u" || $sonsesli=="o") ) {$eki="'tan";}
                    elseif (in_array($sonharf, $sertsessizler) and ($sonsesli=="e" || $sonsesli=="i" || $sonsesli=="ü" || $sonsesli=="ö") ) {$eki="'ten";}
                    elseif ($sonsesli=="a" || $sonsesli=="ı" || $sonsesli=="u" || $sonsesli=="o") {$eki="'dan";}
                    elseif ($sonsesli=="e" || $sonsesli=="i" || $sonsesli=="ü" || $sonsesli=="ö") {$eki="'den";}
                    elseif (in_array($sonharf, $sertsessizler)) {$eki="'tan";}

                    else  {$eki="'dan";}         
                break;        
                
                case 'ile': // beraberlik hali  -> Ayşeyle / Ahmetle
                case 'yla':
                case 'yle':
                case 'la':
                case 'le':
                    if ($sonharf=="a" || $sonharf=="ı" || $sonharf=="u" || $sonharf=="o") {$eki="yla";}
                    elseif ($sonharf=="e" || $sonharf=="i" || $sonharf=="ü" || $sonharf=="ö") {$eki="yle";}

                    elseif ($sonsesli=="a" || $sonsesli=="ı" || $sonsesli=="u" || $sonsesli=="o") {$eki="la";}
                    elseif ($sonsesli=="e" || $sonsesli=="i" || $sonsesli=="ö" || $sonsesli=="ü") {$eki="le";}
                    else  {$eki="'la";}         
                break;
            }
            $sonuc = $ad.$eki; 
            return $sonuc;
        }


    }
