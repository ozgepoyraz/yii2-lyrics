## 180202025 Özge POYRAZ

# Yii2 Şarkı Sözü Modülü

# Nasıl Kurulur?

Modülü mevcut yii projenize packagist üstünden aşağıdaki composer komutu ile kurabilirsiniz.

```
composer require --prefer-dist ozgepoyraz/yii2-lyrics "dev-master"
 ```

Daha sonrasında advanced yii projesi için backend\config\main.php dosyasında modules kısmına aşağıdaki gibi modülü eklemeniz gerekmektedir.

```
'modules' => [
  'lyrics' => [
      'class' => 'ozgepoyraz\lyrics\Module',
  ],
],
 ```

Daha sonrasında migration işlemi gerçekleştirerek modül için gerekli tabloları oluşturmanız gerekiyor. Bunun için yii üzerinden bir konsol komutu girmelisiniz aşağıdaki komutu girerek migration işlemini gerçekleştirebilirsiniz.(Komutu proje dizininde giriniz.)

```
php yii migrate/up --migrationPath=@vendor/ozgepoyraz/yii2-lyrics/src/migrations
 ```

Artık modül başarıyla kurulmuştur.

"domaininiz/backend/web/index.php?r=lyrics" adresinden modül sayfasına ulaşabilirsiniz.

# Modül Hakkında

Modül anasayfasına girdiğinizde karşınıza aşağıdaki gibi bir sayfa gelecektir.

![](images/mainpage.jpg)

"Manage Musicians" Butonu ile Müzisyenler tablosu üzerinde işlemlerinizi gerçekleştirebilirsiniz.

Müzisyenler sayfasında "Create Musician" ile form üzerinde isim, yaş ve milliyet girerek yeni müzisyen ekleyebilirsiniz. Ayrıca eklenen her veri için sistem saatinden otomatik olarak oluşturulma zamanı değeri de doldurulur. Örnek Müzisyenler tablosu ve oluşturma sayfası;

![](images/musicians.jpg)

Daha sonrasında "domaininiz/backend/web/index.php?r=lyrics" route'u ile modül anasayfasına dönerek veya menüye dön butonunu kullandıktan sonra "Manage Lyrics" butonu ile Şarkı Sözleri tablosu üzerinde işlemlerinizi gerçekleştirebilirsiniz ya da direkt olarak bu sayfaya "domaininiz/backend/web/index.php?r=lyrics/lyrics" route'u ile ulaşabilirsiniz. Burada "Create Lyrics" ile yeni bir şarkı sözü oluşturmak istediğinizde;

![](images/createlyrics.jpg)

İlgili şarkı sözünü daha önce oluşturduğunuz bir sanatçı ile ilişkilendirmeniz gerekmektedir. Eğer herhangi bir sanatçı ile ilişkilendirmek istemiyorsanız. Anonim adı ile bir müzisyen oluşturup, kimliği belirsiz şarkı sözlerini ilişkilendirmeniz gerekmektedir. Daha sonrasında şarkı sözü için başlık, içerik ve tür kısımlarını doldurarak şarkı sözleri oluşturabilirsiniz.Aşağıda örnek olarak oluşturulmuş ve müzisyenlerle ilişkilendirilmiş şarkı sözleri bulunmaktadır.

![](images/lyrics.jpg)

Tablolar ilişkili olduğu için bir müzisyeni sildiğinizde onunla ilişkilendirilmiş şarkı sözleri de silinecektir. Ayrıca tabloları ilişkilendiren müzisyen adı satırını kullanarak şarkı sözlerini filtreleyebilirsiniz. Normalde o sütun idye aittir fakat search model üzerinden düzenlenerek isme göre arama işlevi kazandırılmıştır.

Anasayfada Apis kısmında Random Lyrics ya da Random Musicians seçenekleriyle http response olarak rastgele bir şarkı veya sanatçı bilgisi dönmektedir.
/lyrics/random/lyrics ya da /lyrics/random/musicians urllerine get isteği yaparak rastgele bir şarkıyı tarayıcıda görüntülersek;

![](images/randomlyrics.jpg)

json formatında rastgele bir şarkıyı dönmektedir. Aynı şekilde rastgele bir müzisyende döndürebilirsiniz. Eğer tablolar boş ise json olarak hata kodu dönecektir.

## Modülde Yaptıklarımdan Bazıları

-Migration ile foreign keyle bağlanmış 2 adet ilişkili tablo oluşturdum.

-Bu Tablolar üzerindeki ilişkileri kullanarak modelleri generate ettim.

-Modelleri kullanarak CRUD generate ettim.

-Tablolardaki id ilişkisini kaldırarak helperları kullanarak formlarda isim özelliğiyle değiştirdim.

-Gridview widget'ını düzenleyerek id attribute'unun value'sunu isim özellikleriyle değiştirdim.

-Bu şekilde eklenen elemanlar arayüz üzerinden elle id girmeden dropdown ile seçilerek ilişkilendirilebilir hale geldi.

-Search Modeli düzenleyerek id aramasını kaldırıp join query ile ilişkili özelliğe göre arama ekledim.

-Random şarkı sözü ve şarkıcı için controller oluşturdum ve rastgele bir elemanı response döndüm.

-Yii helperlarını kullanarak bir ana sayfa oluşturdum.

-Derslerde gördüğümüz her şeyi kullanmaya çalıştım. Raporda hepsine değinememiş olabilirim. Ek olarak yiinin rest api sistemini kullanmak istedim fakat url management kısmında problem yaşadığım için basit bir http api yaptım.





