echo location_table_id("41.009458","28.978976")."<br>";
##

Bu fonksiyondan dönen cevap bize lat ve lng değerinin dünya üzerinden 100 er metrelik karelere bölünerek lat_bin ve lng_bin değerlerini verir.

#Örnek#
ilk lokasyon sorgumuzda lat_bin 411, lng_bin 243 değerinin geldiğini,
ikinci lokasyon sorgumuzdada latbin_ 414 lng_bin 240 geldiğini varsayarsak.

Yatayda 414-411 = 3 ( her kareyi 300 metre belirlediğimizden yatayda diğer koordinat bizden 100 metre uzaktaymış diyebiliriz. )
Dikeyde 243-240 = 3 ( dikeyde 300 metre uzaklıkta diyebiliriz. )

Buda bize (3+3) * 100 = 600 yani sorguladığımız iki konum arasında maximum 600 metre mesafe olabilir cevabını vermektedir.

