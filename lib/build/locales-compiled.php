<?php
/**
 * Compiled source build from Loco core.
 * Wed, 14 May 2014 19:16:05 +0100
 */
  function loco_language_country( $lang ){ static $a; if( ! isset($a) ){ $a = unserialize('a:79:{s:2:"en";s:2:"GB";s:2:"bg";s:2:"BG";s:2:"de";s:2:"DE";s:2:"es";s:2:"ES";s:2:"fi";s:2:"FI";s:2:"fo";s:2:"FO";s:2:"fr";s:2:"FR";s:2:"hr";s:2:"HR";s:2:"ht";s:2:"HT";s:2:"hu";s:2:"HU";s:2:"id";s:2:"ID";s:2:"is";s:2:"IS";s:2:"it";s:2:"IT";s:2:"lt";s:2:"LT";s:2:"lv";s:2:"LV";s:2:"mg";s:2:"MG";s:2:"mt";s:2:"MT";s:2:"nl";s:2:"NL";s:2:"no";s:2:"NO";s:2:"pl";s:2:"PL";s:2:"pt";s:2:"PT";s:2:"ro";s:2:"RO";s:2:"ru";s:2:"RU";s:2:"sk";s:2:"SK";s:2:"so";s:2:"SO";s:2:"th";s:2:"TH";s:2:"tr";s:2:"TR";s:2:"uz";s:2:"UZ";s:2:"af";s:2:"ZA";s:2:"ar";s:2:"AE";s:2:"az";s:2:"TR";s:2:"bn";s:2:"BD";s:2:"bs";s:2:"BA";s:2:"cs";s:2:"CZ";s:2:"cy";s:2:"GB";s:2:"da";s:2:"DK";s:2:"el";s:2:"CY";s:2:"et";s:2:"EE";s:2:"fa";s:2:"AF";s:2:"ga";s:2:"IE";s:2:"gl";s:2:"ES";s:2:"gn";s:2:"PY";s:2:"he";s:2:"IL";s:2:"hi";s:2:"IN";s:2:"hy";s:2:"AM";s:2:"ja";s:2:"JP";s:2:"jv";s:2:"ID";s:2:"ka";s:2:"GE";s:2:"kk";s:2:"KZ";s:2:"kn";s:2:"IN";s:2:"ko";s:2:"KR";s:2:"lb";s:2:"LU";s:2:"li";s:2:"NL";s:2:"lo";s:2:"LA";s:2:"ms";s:2:"MY";s:2:"my";s:2:"MM";s:2:"nb";s:2:"NO";s:2:"ne";s:2:"NP";s:2:"nn";s:2:"NO";s:2:"os";s:2:"GE";s:2:"pa";s:2:"IN";s:2:"sa";s:2:"IN";s:2:"sc";s:2:"IT";s:2:"sd";s:2:"PK";s:2:"si";s:2:"LK";s:2:"sl";s:2:"SI";s:2:"sq";s:2:"AL";s:2:"sr";s:2:"RS";s:2:"su";s:2:"ID";s:2:"sv";s:2:"SE";s:2:"sw";s:2:"KE";s:2:"ta";s:2:"IN";s:2:"te";s:2:"IN";s:2:"tg";s:2:"TJ";s:2:"ug";s:2:"CN";s:2:"uk";s:2:"UA";s:2:"ur";s:2:"IN";s:2:"vi";s:2:"VN";s:2:"zh";s:2:"CN";}'); } if( isset($a[$lang]) ){ return $a[$lang]; } return ''; } return unserialize('a:79:{s:2:"af";a:1:{s:2:"ZA";a:3:{i:0;s:24:"Afrikaans (South Africa)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ar";a:2:{s:2:"AE";a:3:{i:0;s:29:"Arabic (United Arab Emirates)";i:1;s:78:"n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5";i:2;a:6:{i:0;s:4:"None";i:1;s:6:"Single";i:2;s:3:"Two";i:3;s:12:"Few (e.g. 3)";i:4;s:14:"Many (e.g. 11)";i:5;s:16:"Other (e.g. 100)";}}s:2:"IL";a:3:{i:0;s:15:"Arabic (Israel)";i:1;s:78:"n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5";i:2;a:6:{i:0;s:4:"None";i:1;s:6:"Single";i:2;s:3:"Two";i:3;s:12:"Few (e.g. 3)";i:4;s:14:"Many (e.g. 11)";i:5;s:16:"Other (e.g. 100)";}}}s:2:"az";a:1:{s:2:"TR";a:3:{i:0;s:20:"Azerbaijani (Turkey)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"bg";a:1:{s:2:"BG";a:3:{i:0;s:9:"Bulgarian";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"bn";a:1:{s:2:"BD";a:3:{i:0;s:20:"Bengali (Bangladesh)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"bs";a:1:{s:2:"BA";a:3:{i:0;s:30:"Bosnian (Bosnia & Herzegovina)";i:1;s:82:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}}s:2:"cs";a:1:{s:2:"CZ";a:3:{i:0;s:5:"Czech";i:1;s:35:"(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:14:"Other (e.g. 5)";}}}s:2:"cy";a:1:{s:2:"GB";a:3:{i:0;s:5:"Welsh";i:1;s:53:"(n==1) ? 0 : (n==2) ? 1 : (n != 8 && n != 11) ? 2 : 3";i:2;a:5:{i:0;s:4:"None";i:1;s:6:"Single";i:2;s:3:"Two";i:3;s:12:"Few (e.g. 8)";i:4;s:4:"Many";}}}s:2:"da";a:1:{s:2:"DK";a:3:{i:0;s:6:"Danish";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"de";a:3:{s:2:"AT";a:3:{i:0;s:16:"German (Austria)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CH";a:3:{i:0;s:20:"German (Switzerland)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"DE";a:3:{i:0;s:6:"German";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"el";a:2:{s:2:"CY";a:3:{i:0;s:14:"Greek (Cyprus)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"GR";a:3:{i:0;s:5:"Greek";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"en";a:11:{s:2:"AE";a:3:{i:0;s:30:"English (United Arab Emirates)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"AU";a:3:{i:0;s:19:"English (Australia)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CA";a:3:{i:0;s:16:"English (Canada)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"GB";a:3:{i:0;s:12:"English (UK)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"HK";a:3:{i:0;s:19:"English (Hong Kong)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"IE";a:3:{i:0;s:17:"English (Ireland)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"IN";a:3:{i:0;s:15:"English (India)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"NZ";a:3:{i:0;s:21:"English (New Zealand)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"SG";a:3:{i:0;s:19:"English (Singapore)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"US";a:3:{i:0;s:13:"English (USA)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"ZA";a:3:{i:0;s:22:"English (South Africa)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"es";a:19:{s:2:"AR";a:3:{i:0;s:19:"Spanish (Argentina)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"BO";a:3:{i:0;s:17:"Spanish (Bolivia)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CL";a:3:{i:0;s:15:"Spanish (Chile)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CO";a:3:{i:0;s:18:"Spanish (Colombia)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CR";a:3:{i:0;s:20:"Spanish (Costa Rica)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CU";a:3:{i:0;s:14:"Spanish (Cuba)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"DO";a:3:{i:0;s:28:"Spanish (Dominican Republic)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"EC";a:3:{i:0;s:17:"Spanish (Ecuador)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"ES";a:3:{i:0;s:7:"Spanish";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"GT";a:3:{i:0;s:19:"Spanish (Guatemala)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"HN";a:3:{i:0;s:18:"Spanish (Honduras)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"MX";a:3:{i:0;s:16:"Spanish (Mexico)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"NI";a:3:{i:0;s:19:"Spanish (Nicaragua)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"PA";a:3:{i:0;s:16:"Spanish (Panama)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"PE";a:3:{i:0;s:14:"Spanish (Peru)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"PY";a:3:{i:0;s:18:"Spanish (Paraguay)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"SV";a:3:{i:0;s:21:"Spanish (El Salvador)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"UY";a:3:{i:0;s:17:"Spanish (Uruguay)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"VE";a:3:{i:0;s:19:"Spanish (Venezuela)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"et";a:1:{s:2:"EE";a:3:{i:0;s:8:"Estonian";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"fa";a:2:{s:2:"AF";a:3:{i:0;s:21:"Persian (Afghanistan)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}s:2:"IR";a:3:{i:0;s:14:"Persian (Iran)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"fi";a:1:{s:2:"FI";a:3:{i:0;s:7:"Finnish";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"fo";a:2:{s:2:"DK";a:3:{i:0;s:17:"Faroese (Denmark)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"FO";a:3:{i:0;s:23:"Faroese (Faroe Islands)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"fr";a:5:{s:2:"BE";a:3:{i:0;s:16:"French (Belgium)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CA";a:3:{i:0;s:15:"French (Canada)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"CH";a:3:{i:0;s:20:"French (Switzerland)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"FR";a:3:{i:0;s:6:"French";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"HT";a:3:{i:0;s:14:"French (Haiti)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ga";a:1:{s:2:"IE";a:3:{i:0;s:15:"Irish (Ireland)";i:1;s:44:"n==1 ? 0 : n==2 ? 1 : n<7 ? 2 : n<11 ? 3 : 4";i:2;a:5:{i:0;s:6:"Single";i:1;s:3:"Two";i:2;s:12:"Few (e.g. 3)";i:3;s:13:"Many (e.g. 7)";i:4;s:15:"Other (e.g. 11)";}}}s:2:"gl";a:1:{s:2:"ES";a:3:{i:0;s:16:"Galician (Spain)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"gn";a:1:{s:2:"PY";a:3:{i:0;s:18:"Guarani (Paraguay)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"he";a:1:{s:2:"IL";a:3:{i:0;s:15:"Hebrew (Israel)";i:1;s:8:"(n != 1)";i:2;a:3:{i:0;s:6:"Single";i:1;s:3:"Two";i:2;s:4:"Many";}}}s:2:"hi";a:1:{s:2:"IN";a:3:{i:0;s:13:"Hindi (India)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"hr";a:1:{s:2:"HR";a:3:{i:0;s:8:"Croatian";i:1;s:82:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}}s:2:"ht";a:1:{s:2:"HT";a:3:{i:0;s:14:"Haitian Creole";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"hu";a:1:{s:2:"HU";a:3:{i:0;s:9:"Hungarian";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"hy";a:1:{s:2:"AM";a:3:{i:0;s:8:"Armenian";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"id";a:1:{s:2:"ID";a:3:{i:0;s:10:"Indonesian";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"is";a:1:{s:2:"IS";a:3:{i:0;s:9:"Icelandic";i:1;s:22:"(n%10!=1 || n%100==11)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"it";a:2:{s:2:"CH";a:3:{i:0;s:21:"Italian (Switzerland)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"IT";a:3:{i:0;s:7:"Italian";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ja";a:1:{s:2:"JP";a:3:{i:0;s:8:"Japanese";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"jv";a:1:{s:2:"ID";a:3:{i:0;s:20:"Javanese (Indonesia)";i:1;s:4:"n!=0";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"ka";a:1:{s:2:"GE";a:3:{i:0;s:8:"Georgian";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"kk";a:1:{s:2:"KZ";a:3:{i:0;s:6:"Kazakh";i:1;s:1:"0";i:2;a:1:{i:0;s:6:"Single";}}}s:2:"kn";a:1:{s:2:"IN";a:3:{i:0;s:15:"Kannada (India)";i:1;s:6:"(n!=1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"ko";a:1:{s:2:"KR";a:3:{i:0;s:6:"Korean";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"lb";a:1:{s:2:"LU";a:3:{i:0;s:13:"Luxembourgish";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"li";a:1:{s:2:"NL";a:3:{i:0;s:24:"Limburgish (Netherlands)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"lo";a:1:{s:2:"LA";a:3:{i:0;s:10:"Lao (Laos)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"lt";a:1:{s:2:"LT";a:3:{i:0;s:10:"Lithuanian";i:1;s:71:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && (n%100<10 or n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:15:"Other (e.g. 10)";}}}s:2:"lv";a:1:{s:2:"LV";a:3:{i:0;s:7:"Latvian";i:1;s:43:"(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2)";i:2;a:3:{i:0;s:4:"None";i:1;s:6:"Single";i:2;s:14:"Other (e.g. 0)";}}}s:2:"mg";a:1:{s:2:"MG";a:3:{i:0;s:21:"Malagasy (Madagascar)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ms";a:1:{s:2:"MY";a:3:{i:0;s:16:"Malay (Malaysia)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"mt";a:1:{s:2:"MT";a:3:{i:0;s:7:"Maltese";i:1;s:81:"(n==1 ? 0 : n==0 || ( n%100>1 && n%100<11) ? 1 : (n%100>10 && n%100<20 ) ? 2 : 3)";i:2;a:4:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:14:"Many (e.g. 11)";i:3;s:15:"Other (e.g. 20)";}}}s:2:"my";a:1:{s:2:"MM";a:3:{i:0;s:17:"Burmese (Myanmar)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"nb";a:1:{s:2:"NO";a:3:{i:0;s:7:"Bokmål";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ne";a:1:{s:2:"NP";a:3:{i:0;s:6:"Nepali";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"nl";a:2:{s:2:"BE";a:3:{i:0;s:15:"Dutch (Belgium)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"NL";a:3:{i:0;s:5:"Dutch";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"nn";a:1:{s:2:"NO";a:3:{i:0;s:7:"Nynorsk";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"no";a:1:{s:2:"NO";a:3:{i:0;s:9:"Norwegian";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"os";a:3:{s:2:"GE";a:3:{i:0;s:18:"Ossetian (Georgia)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"RU";a:3:{i:0;s:17:"Ossetian (Russia)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"TR";a:3:{i:0;s:17:"Ossetian (Turkey)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"pa";a:1:{s:2:"IN";a:3:{i:0;s:15:"Punjabi (India)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"pl";a:1:{s:2:"PL";a:3:{i:0;s:6:"Polish";i:1;s:66:"(n==1 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}}s:2:"pt";a:2:{s:2:"BR";a:3:{i:0;s:19:"Portuguese (Brazil)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"PT";a:3:{i:0;s:10:"Portuguese";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ro";a:1:{s:2:"RO";a:3:{i:0;s:8:"Romanian";i:1;s:56:"(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:15:"Other (e.g. 20)";}}}s:2:"ru";a:2:{s:2:"RU";a:3:{i:0;s:7:"Russian";i:1;s:82:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}s:2:"UA";a:3:{i:0;s:17:"Russian (Ukraine)";i:1;s:82:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}}s:2:"sa";a:1:{s:2:"IN";a:3:{i:0;s:16:"Sanskrit (India)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"sc";a:1:{s:2:"IT";a:3:{i:0;s:17:"Sardinian (Italy)";i:1;s:14:"n == 1 ? 0 : 1";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"sd";a:1:{s:2:"PK";a:3:{i:0;s:17:"Sindhi (Pakistan)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"si";a:1:{s:2:"LK";a:3:{i:0;s:19:"Sinhala (Sri Lanka)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"sk";a:1:{s:2:"SK";a:3:{i:0;s:6:"Slovak";i:1;s:35:"(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:14:"Other (e.g. 5)";}}}s:2:"sl";a:1:{s:2:"SI";a:3:{i:0;s:9:"Slovenian";i:1;s:60:"(n%100==1 ? 1 : n%100==2 ? 2 : n%100==3 || n%100==4 ? 3 : 0)";i:2;a:4:{i:0;s:6:"Single";i:1;s:3:"Two";i:2;s:12:"Few (e.g. 2)";i:3;s:14:"Other (e.g. 3)";}}}s:2:"so";a:1:{s:2:"SO";a:3:{i:0;s:6:"Somali";i:1;s:6:"n != 1";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"sq";a:1:{s:2:"AL";a:3:{i:0;s:18:"Albanian (Albania)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"sr";a:1:{s:2:"RS";a:3:{i:0;s:7:"Serbian";i:1;s:82:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}}s:2:"su";a:1:{s:2:"ID";a:3:{i:0;s:21:"Sundanese (Indonesia)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"sv";a:1:{s:2:"SE";a:3:{i:0;s:7:"Swedish";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"sw";a:4:{s:2:"KE";a:3:{i:0;s:15:"Swahili (Kenya)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"KM";a:3:{i:0;s:17:"Swahili (Comoros)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"TZ";a:3:{i:0;s:18:"Swahili (Tanzania)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"UG";a:3:{i:0;s:16:"Swahili (Uganda)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"ta";a:2:{s:2:"IN";a:3:{i:0;s:13:"Tamil (India)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"LK";a:3:{i:0;s:17:"Tamil (Sri Lanka)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"te";a:1:{s:2:"IN";a:3:{i:0;s:14:"Telugu (India)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"tg";a:1:{s:2:"TJ";a:3:{i:0;s:18:"Tajik (Tajikistan)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"th";a:1:{s:2:"TH";a:3:{i:0;s:15:"Thai (Thailand)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"tr";a:1:{s:2:"TR";a:3:{i:0;s:7:"Turkish";i:1;s:5:"(n>1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"ug";a:1:{s:2:"CN";a:3:{i:0;s:14:"Uyghur (China)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"uk";a:1:{s:2:"UA";a:3:{i:0;s:19:"Ukrainian (Ukraine)";i:1;s:82:"(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)";i:2;a:3:{i:0;s:6:"Single";i:1;s:12:"Few (e.g. 2)";i:2;s:13:"Many (e.g. 5)";}}}s:2:"ur";a:2:{s:2:"IN";a:3:{i:0;s:12:"Urdu (India)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}s:2:"PK";a:3:{i:0;s:15:"Urdu (Pakistan)";i:1;s:8:"(n != 1)";i:2;a:2:{i:0;s:6:"Single";i:1;s:5:"Other";}}}s:2:"uz";a:1:{s:2:"UZ";a:3:{i:0;s:18:"Uzbek (Uzbekistan)";i:1;s:7:"(n > 1)";i:2;a:2:{i:0;s:5:"Other";i:1;s:5:"Other";}}}s:2:"vi";a:1:{s:2:"VN";a:3:{i:0;s:10:"Vietnamese";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}s:2:"zh";a:3:{s:2:"CN";a:3:{i:0;s:7:"Chinese";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}s:2:"HK";a:3:{i:0;s:19:"Chinese (Hong Kong)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}s:2:"TW";a:3:{i:0;s:16:"Chinese (Taiwan)";i:1;s:1:"0";i:2;a:1:{i:0;s:5:"Other";}}}}');