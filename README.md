echo location_table_id("41.009458","28.978976"); <br>
Çıktı: 441 - 243
<br>
Bu fonksiyondan dönen cevap bize lat ve lng değerinin dünya üzerinden 100 er metrelik karelere bölünerek lat_bin ve lng_bin değerlerini verir.
<br>
#Örnek#<br>
ilk lokasyon sorgumuzda lat_bin 411, lng_bin 242 değerinin geldiğini,<br>
ikinci lokasyon sorgumuzdada latbin_ 414 lng_bin 240 geldiğini varsayarsak.<r>

Yatayda 414-411 = 3 ( her kareyi 100 metre belirlediğimizden yatayda diğer koordinat bizden 300 metre uzaktaymış diyebiliriz. )<br>
Dikeyde 242-240 = 2 ( dikeyde 200 metre uzaklıkta diyebiliriz. )<br>
<br>
Buda bize (3+2) * 100 = 500 yani sorguladığımız iki konum arasında maximum 500 metre mesafe olabilir cevabını vermektedir.

