# PHP Gramer

Php için türkçe gramer yardımcısı  
*İyelik Ekleri*  
Bu repoda sadece türkçe kullanım için uygun olduğundan metinler türkçedir.  
This descriptions turkish language because of lib just for using on turkish language.  

----------
### Kurulum 

```sh
composer require atiksoftware/php-gramer
```

### Kullanım  
```php
include '../vendor/autoload.php';

use Atiksoftware\Gramer\Iyelik;


echo Iyelik::Ek('Reşat','in') . " sesi kısıldı \n"; 
echo Iyelik::Ek('Mansur','in') . " sesi kısıldı \n"; 
echo Iyelik::Ek('Ahmet','in') . " sesi kısıldı \n"; 
echo Iyelik::Ek('Ömür','in') . " sesi kısıldı \n"; 
echo "\n";
echo Iyelik::Ek('Hanzade','e') . " borç para verdim \n"; 
echo Iyelik::Ek('Mustafa','e') . " borç para verdim \n"; 
echo Iyelik::Ek('Kemâl','e') . " borç para verdim \n"; 
echo Iyelik::Ek('Nazlı','e') . " borç para verdim \n"; 
echo Iyelik::Ek('Güllü','e') . " borç para verdim \n"; 
echo Iyelik::Ek('Mattö','e') . " borç para verdim \n";  
echo "\n";
echo Iyelik::Ek('Erkan','i') . " aradınız mı \n";  
echo Iyelik::Ek('Furkan','i') . " aradınız mı \n";  
echo Iyelik::Ek('Mücahit','i') . " aradınız mı \n";  
echo Iyelik::Ek('Umut','i') . " aradınız mı \n";  
echo Iyelik::Ek('Gamze','i') . " aradınız mı \n";  
echo Iyelik::Ek('Hatice','i') . " aradınız mı \n";  
echo Iyelik::Ek('Ayşe','i') . " aradınız mı \n";  
echo "\n"; 
echo Iyelik::Ek('Ahmet','de') . " bizimle gelecek \n";  
echo Iyelik::Ek('Ali','de') . " bizimle gelecek \n";  
echo Iyelik::Ek('Kemal','de') . " bizimle gelecek \n";  
echo Iyelik::Ek('Oğuz','de') . " bizimle gelecek \n";  
echo Iyelik::Ek('Azat','de') . " bizimle gelecek \n";  
echo Iyelik::Ek('Patron','de') . " bizimle gelecek \n";  
echo Iyelik::Ek('Usta','de') . " bizimle gelecek \n";  
echo "\n";   
echo Iyelik::Ek('Ahmet','den') . " şikayetçi oldular \n";  
echo Iyelik::Ek('Nazlı','den') . " şikayetçi oldular \n";  
echo Iyelik::Ek('Kemâl','den') . " şikayetçi oldular \n";  
echo Iyelik::Ek('Nil','den') . " şikayetçi oldular \n";  
echo Iyelik::Ek('Hadi','den') . " şikayetçi oldular \n";  
echo Iyelik::Ek('Sefa','den') . " şikayetçi oldular \n";  
echo Iyelik::Ek('Ömer','den') . " şikayetçi oldular \n";  
echo "\n";   
echo Iyelik::Ek('Ahmet','ile') . " görüştük \n";  
echo Iyelik::Ek('Cemâl','ile') . " görüştük \n";  
echo Iyelik::Ek('Nazlı','ile') . " görüştük \n";  
echo Iyelik::Ek('Mansur','ile') . " görüştük \n";  
echo Iyelik::Ek('Murat','ile') . " görüştük \n";  
echo Iyelik::Ek('Harun','ile') . " görüştük \n"; 
```
### Sonuç
```
Reşat'ın sesi kısıldı 
Mansur'un sesi kısıldı 
Ahmet'in sesi kısıldı 
Ömür'ün sesi kısıldı 

Hanzade'ye borç para verdim 
Mustafa'ya borç para verdim 
Kemâl'e borç para verdim 
Nazlı'ya borç para verdim 
Güllü'ye borç para verdim 
Mattö'ye borç para verdim 

Erkan'ı aradınız mı 
Furkan'ı aradınız mı 
Mücahit'i aradınız mı 
Umut'u aradınız mı 
Gamze'yi aradınız mı 
Hatice'yi aradınız mı 
Ayşe'yi aradınız mı 

Ahmet'te bizimle gelecek 
Ali'de bizimle gelecek 
Kemal'da bizimle gelecek 
Oğuz'da bizimle gelecek 
Azat'ta bizimle gelecek 
Patron'da bizimle gelecek 
Usta'da bizimle gelecek 

Ahmet'ten şikayetçi oldular 
Nazlı'dan şikayetçi oldular 
Kemâl'den şikayetçi oldular 
Nil'den şikayetçi oldular 
Hadi'den şikayetçi oldular 
Sefa'dan şikayetçi oldular 
Ömer'den şikayetçi oldular 

Ahmetle görüştük 
Cemâlle görüştük 
Nazlıyla görüştük 
Mansurla görüştük 
Muratla görüştük 
Harunla görüştük
```
