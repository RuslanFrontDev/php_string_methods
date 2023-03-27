<!-- String metodlari -->
<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>PHP Dersleri</title>
</head>

<body>
   <h1>
      String metodlari
      <?php
      //1.strlen()-metod
      // $text = strlen("her gun seni gozleyirdim");
      // echo $text
      //2.str-word-count()-metod
      //  $text = str_word_count("her gun seni gozleyirdim");
      //  echo $text
      //3.strev()-metod-tersine cevirir
      //  $text = strrev("her gun seni gozleyirdim");
      //  echo $text
      //4.strpos()-metod "sözün hansı indexde olduğunu deyir"
      // $text = strpos("her gun seni gozleyirdim", "seni");
      // echo $text
      //5.strreplace()-metod "bir sözü başqa sözlə dəyişir"
      // $text = str_replace("seni", "Aydani","her gun seni gozleyirdim");
      // echo $text
      //6.addcslashes()-metod "Əyri xətt çəkir"
      // $text = addcslashes("her gun seni gozleyirdim","s");
      // echo $text
      // 7. addslashes() :Dırnaqdan sonra xətt qoyur:
      // $text = addslashes("her gun 'seni' gozleyirdim");
      // echo $text
      // 8. bin2hex() "Stringi 16lıq sistemə çevirir"
      // $text = bin2hex("her gun seni gozleyirdim");
      // echo $text
      // 9. chop() 'Ən sonunncu sözü silir'
      // $text =("her gun seni gozleyirdim");
      // echo $text."<br>";
      //  echo chop($text, "seni")ı
      // 10.chr() *ASCİİ Tablosundaki xarakterleri verir*
      // echo chr(52).'<br>'; //decimal (onlu);
      // echo chr(052).'<br>'; //octal (sekizlik);
      // echo chr(0x52).'<br>'; //hex (onaltiliq);
      // 11. chunk_split()
      // $text = ("her gun seni gozleyirdim");
      // echo chunk_split($text, 3, '.')
      // 12.convert_uuencode() "Yazılan sözləri (herf ve ya rəqəm) kodlayır" 
      // $text = ("her gun seni gozleyirdim");
      // $encStr = convert_uuencode($text);
      // echo $encStr.'<br>'
      // 13.convert_uudecode() :Kodlanan sözləri hərflərə çevirir:
      // $text = ("her gun seni gozleyirdim");
      // $encStr = convert_uuencode($text);
      // echo $encStr.'<br>';
      // $decStr = convert_uudecode($encStr);
      // echo $decStr.'<br>'
      // 14. crc32() "Ancaq rəqəm ilə kodluyur"
      // $text = ("her gun seni gozleyirdim");
      // echo crc32($text).'<br>'
      // 15.print_r "Girilen verinin okunabilir çıktısını verir."; 
      //    explode() "isə hər sözü parçalayıb bir diziyə atır" 
      //    explode(".", $text, 0=>1=>2 ) "3cü paramatrə olaraq rəqəmlə neçə diziyə bölsün"
      // $text = ("her.gun.seni.gozleyirdim");
      // print_r( explode(".", $text));
      // 16.fprintf() "fopen ilə dosyanın yolunu müəyyənləşdirib, w ilə yazılacağını deyirik və fprintf ilə də onu yazırıq"
      // $country = "Baki";
      // $number = 4000;
      // $file = fopen("test.txt", 'w');
      // echo fprintf($file, "%s %u issiz var",$country, $number ) 
      // 17.get_html_translation_table() !HTML-lə aid özəl karakter kod tablosunu verir!
      // print_r(get_html_translation_table(HTML_SPECIALCHARS));
      // echo 'br';
      // print_r(get_html_translation_table(HTML_ENTITIES));
      // 18. htmlentities() "html yazılarını stringə çevirir, html_entity_decode() isə html-ə"
      // $text = "<a href=https://www.instagram.com/'>insta</a>";
      // $str = htmlentities(($text));
      // echo (html_entity_decode($str))
      // 19.htmlspecialchars() 'Html kodunu olduğu kimi ekrana yazır'
      // $text = 'this is so <b> nice </b> code';
      // echo htmlspecialchars($text)ı
      // &amp;& (ampersand);
      // &quot;" (double quote)
      // &#039;' (single quote)
      // &lt;< (less than)
      // &gt;becomes> (greater than)
      // 20.implode() 'Arrayda olan yazıları stringə çevirir'
      // $array = array('bu', 'bir', 'array');
      // echo implode(" ",$array)
      // 21.join() 20ci islemi gorur
      // 22.lcfirst()
      // $text = ("her.gun.seni.gozleyirdim");
      // echo lcfirst($text)
      // 23. ucfirst()
      // $text = ("her.gun.seni.gozleyirdim");
      // echo ucfirst($text)
      // 24.ucwords() sozleri ilk herfini boyudur
      // $text ="her gun seni gozleyirdim";
      // echo ucwords($text)
      // 25.strtoupper() butun stringleri boyuk herfe cevirir
      // 26. strtolower() butun stringleri kicik herfe cevirir
      // 27. trim(); ltrim; rtrim
      // 28. md5() reqemlerle kodlayir
      // $text ="her gun seni gozleyirdim";
      // echo md5(md5($text))
      // 29. md5_file() file-i kodlayir 
      // echo md5_file('test.txt')
      // 30. nl2br()
      // $text ="her gun seni gozleyirdim";
      // echo nl2br("ilk setir.\n diger setir",true)
      // 31. number_format()
      // echo number_format('1000000').'<br>';
      // echo number_format('1000000',2).'<br>';
      // echo number_format('102.90').'<br>';
      // echo number_format('104.90', 2).'<br>';
      // 32.parse_str()
      // $text = "name=fehmi&age=30";
      // parse_str($text, $output);
      // echo $output['name'];
      // 33. printf() 16.ci qaydadaki kimidir
      // 34. echo spritnf()-in ise yanina echo yazaraq istifade olunur
      // 35. similar_text() benzer karakterlerin sayini verir; $similar ise 100de ne qeder benziyir 
      // echo similar_text("hello Php", "HelloPhp Js", $similar);
      // echo $similar
      // 36. soundex( ingilizce teleffuz kodudur)
      // $text="Node Js";
      // echo soundex($text)
      // 37.sscanf()
      // $text = "age:30 weight:60kg";
      // sscanf($text, "age:%d weight:%dkg", $age, $weight);
      // echo "yasiniz:".$age."<br> Kilonuz: ".$weight;
      // 38. str_ireplace 5ci qayda ile uygundur
      // $text = 'salam e kalxoz';
      // echo str_pad($text, 19, "*")
      // 39.str_repeat() nece defe tekrarlatmaq istediyimi deyir
      // $text = 'salam e kalxoz';
      // echo str_repeat('alal', 10);
      //40.str_rot13() herf kimi kodlayir
      // $text = 'salam e kalxoz';
      // echo str_rot13($text);
      // 41.str_shuffle(her yeniledikce herleri qarisdirir)
      // 42.print_r(str_split()) reqem olmasada olur
      // print_r(str_split("hello",2))
      // 43.strcasecmp(boyukherf/kicikherf duyarliliqi yoxdur) eynidirse true 0
      // 44.strcmp(boyukherf/kicikherf duyarliliqi yoxdur) eyni deyilse false 1
      // 45.strcspn( 4.cu qayda ile uygundur)
      // 46. strip_tags(html kodlarini silir, 2ci parametr olaraq hansi html kodun oldugunu yaziriq)
      // echo strip_tags("salam <i>PHP</i>")
      // 47. stripcslashes(eyri xetti aradan qaldirir)
      // echo stripcslashes("salam\ PHP \ necesen")
      // 48. stripos(4. qayda ile eynidir)
      // 49. stristr(hansi sozu yaziriqsa o sozun cumlede olub olmadigini deyir)
      // echo stristr("hello ruslan", "xx" )
      // if(stristr("hello ruslan", "xx" )){
      //    echo "dogru";
      // }else{
      //    echo "yanlis";
      // }
      // 50.strpbrk(verilecek herfden sonraki sozleri yazdirmaq ucun)
      // echo strpbrk("hello ruslan", "l" )
      // 51. strtr(herleri basqa herflerle deyisirik)
      // echo strtr("hillo ruslan", "ia", "eo" )
      // $arrPhp = array("hello"=>"salam", "ruslan"=>"Peri");
      // echo strtr('hello ruslan', $arrPhp)
      // 52.substr(nece herf kesmek isteyirikse)
      // $text= "salam";
      // echo substr($text, 2)
      // 53.substr_compare(qarsilasdirir. eger eyni deyilse -1, eynidirse 0)
      // $text= "salam";
      // echo substr_compare($text, "xx", 0)
      // 54. substr_count(cumlede ne qeder php sozu var oldugunu)
      // $text= "salam ruslan necesen. ruslan men heyetdeyem";
      // echo substr_count($text, "ruslan")
      // 55. substr_replace(metni bir sozle deyisirem)
      // $text= "salam ruslan necesen. ruslan men heyetdeyem";
      // echo substr_replace($text, "ruslan", 0);
      // echo "<br>";
      // echo substr_replace($text, " akif", 5)
      // 56. wordwrap( nece setir (misal 12ci indexden sonra) istiyirikse onu qirib asagi yaziriq. TRUE ise uzun yazilan sozu qirir)
      // echo wordwrap($text, 12,"<br>\n", TRUE) 
      ?>

   </h1>
</body>

</html>