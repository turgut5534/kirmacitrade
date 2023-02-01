
<!DOCTYPE html>
<html>
<head>
<title>Kırmacı Dış Ticaret</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Yaş Meyve Sebze İhracatı yapan firma kurumsal politikasını sizlere sunuyor">
<meta name="Keywords" content="kırmacı, kırmacı dış ticaret, kırmacıdışticaret, kirmaci dis ticaret, kirmacidisticaret">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta property="og:image" content="{{ asset('images/background.jpg') }}">
<link rel="shortcut icon" href="../images/turkiye.png" type="image/x-icon">
<link rel="alternate" hreflang="en" href="https://www.kirmaci.com.tr/en" />
<link rel="alternate" hreflang="ru" href="https://www.kirmaci.com.tr/ru" />
<link rel="alternate" hreflang="ar" href="https://www.kirmaci.com.tr/ar" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
h5 {text-align: justify;}
p {text-align: justify;}
.medium {text-align: center;}
.responsive {width: 100%;height: auto;}
.bgimg {background-color: darkslategray;background-image: url("{{ asset('images/background.jpg') }}");min-height: 100%;background-position: center;background-size: cover;}

.language {
  position: absolute;
  right: 30px;
  top: 20px;
}
</style>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-60YR2L8J3P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-60YR2L8J3P');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1008559401"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1008559401');
</script>

<script>
  gtag('event', 'conversion', {'send_to': 'AW-1008559401/VeHtCKuOjs4BEKnK9eAD'});
</script>
</head>
<body>
<div class="bgimg w3-display-container w3-text-white">
<div class="w3-display-middle w3-jumbo">
<p class="w3-xlarge medium w3-text-light-gray"><img src="{{ asset('images/logo.png') }}" alt="Kırmacı Dış Ticaret" width="150px;"><br>{{ __('homepage.trade') }}</p>

</div>
<div class="language">
 
    <select class="form-control changeLang">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}>Türkçe</option>
        <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>русский</option>
        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>عربى</option>
    </select>
  
</div>
<div class="w3-display-topleft w3-container w3-small">


<p class="mt-4"><button onclick="document.getElementById('meyve').style.display='block'" class="w3-button w3-red">{{ __('products.fruit') }}</button></p>
<p><button onclick="document.getElementById('sebze').style.display='block'" class="w3-button w3-green">{{ __('products.vegetable') }}</button></p>
<p><button onclick="document.getElementById('narenciye').style.display='block'" class="w3-button w3-orange">{{ __('products.citrus') }}</button></p>
<p><button onclick="document.getElementById('kalite-politikasi').style.display='block'" class="w3-button w3-blue">{{ __('products.quality') }}</button></p>
<p><button onclick="document.getElementById('sirket').style.display='block'" class="w3-button w3-grey">{{ __('products.contact') }}</button></p>
</div>
<div class="w3-display-bottomright w3-container w3-right-align">
<p class="w3-medium w3-right-align">Hançerli Mah. Dervişzade Sk. No:6 Kat:7 Daire:10<br>İlkadım, Samsun, Türkiye</p>
<p class="w3-xlarge w3-right-align w3-text-red"><a href="mailto:exim@kirmaci.com.tr" style="text-decoration: none" target="_blank"><span>exim@kirmaci.com.tr
</span></a></p>
<p class="w3-xlarge w3-right-align w3-text-yellow"><a href="tel:+903624471447" style="text-decoration: none" target="_blank">+90 362 447 1 447</a></p>
</div>

<div class="w3-display-bottomleft w3-container w3-right-align">
<p class="w3-medium w3-right-align"><a href="https://wa.me/903624471447" style="text-decoration: none" target="_blank"><img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp"></a></p>
</div>
</div>

<div id="meyve" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom">
<div class="w3-container w3-black w3-display-container">
<span onclick="document.getElementById('meyve').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
<h1>{{ __('fruits.cherry_title') }}</h1>
</div>
<div class="w3-container">
<p>{{ __('fruits.cherry') }}</p>
<h5><img src="{{ asset('images/kiraz.jpeg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('fruits.peach_title') }}</h1>
<p>{{ __('fruits.peach') }}</p>
<h5><img src="{{ asset('images/seftali.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('fruits.apple_title') }}</h1>
<p>{{ __('fruits.apple') }}</p>
<h5><img src="{{ asset('images/elma.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('fruits.pomegranate_title') }}</h1>
<p>{{ __('fruits.pomegranate') }}</p>
<h5><img src="{{ asset('images/nar.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('fruits.strawberry_title') }}</h1>
<p>{{ __('fruits.strawberry') }}</p>
<h5><img src="{{ asset('images/cilek.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('fruits.apricot_title') }}</h1>
<p>{{ __('fruits.apricot') }}</p>
<h5><img src="{{ asset('images/kayisi.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('fruits.plum_title') }}</h1>
<p>{{ __('fruits.plum') }}</p>
<h5><img src="{{ asset('images/erik.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('fruits.grape_title') }}</h1>
<p>{{ __('fruits.grape') }}</p>
<h5><img src="{{ asset('images/uzum.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('fruits.sour_cherry_title') }}</h1>
<p>{{ __('fruits.sour_cherry') }}</p>
<h5><img src="{{ asset('images/visne.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('fruits.pear_title') }}</h1>
<p>{{ __('fruits.pear') }}</p>
<h5><img src="{{ asset('images/armut.jpg') }}" class="responsive"></h5>
</div>
</div>
</div>

<div id="sebze" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom">
<div class="w3-container w3-black w3-display-container">
<span onclick="document.getElementById('sebze').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
<h1>{{ __('vegetables.tomato_title') }}</h1>
</div>
<div class="w3-container">
<p>{{ __('vegetables.tomato') }}</p>
<h5><img src="{{ asset('images/domates.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('vegetables.pepper_title') }}</h1>
<p>{{ __('vegetables.pepper') }}</p>
<h5><img src="{{ asset('images/biber.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('vegetables.pumpkins_title') }}</h1>
<p>{{ __('vegetables.pumpkins') }}</p>
<h5><img src="{{ asset('images/kabak.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('vegetables.cucumber_title') }}</h1>
<p>{{ __('vegetables.cucumber') }}</p>
<h5><img src="{{ asset('images/hiyar.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('vegetables.eggplant_title') }}</h1>
<p>{{ __('vegetables.eggplant') }}</p>
<h5><img src="{{ asset('images/patlican.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('vegetables.onion_title') }}</h1>
<p>{{ __('vegetables.onion') }}.</p>
<h5><img src="{{ asset('images/sogan.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('vegetables.carrot_title') }}</h1>
<p>{{ __('vegetables.carrot') }}</p>
<h5><img src="{{ asset('images/havuc.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('vegetables.radish_title') }}</h1>
<p>{{ __('vegetables.radish') }}</p>
<h5><img src="{{ asset('images/turp.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('vegetables.potato_title') }}</h1>
<p>{{ __('vegetables.potato') }}</p>
<h5><img src="{{ asset('images/patates.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('vegetables.broccoli_title') }}</h1>
<p>{{ __('vegetables.broccoli') }}</p>
<h5><img src="{{ asset('images/brokoli.jpg') }}" class="responsive"></h5>
</div>
</div>
</div>

<div id="narenciye" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom">
<div class="w3-container w3-black w3-display-container">
<span onclick="document.getElementById('narenciye').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
<h1>{{ __('citrus.mandarin_title') }}</h1>
</div>
<div class="w3-container">
<p>{{ __('citrus.mandarin') }}</p>
<h5><img src="{{ asset('images/mandarin.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('citrus.orange_title') }}</h1>
<p>{{ __('citrus.orange') }}</p>
<h5><img src="{{ asset('images/portakal.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container">
<h1>{{ __('citrus.lemon_title') }}</h1>
<p>{{ __('citrus.lemon') }}</p>
<h5><img src="{{ asset('images/limon.jpg') }}" class="responsive"></h5>
</div>
<div class="w3-container w3-black">
<h1>{{ __('citrus.grapefruit_title') }}</h1>
<p>{{ __('citrus.grapefruit') }}</p>
<h5><img src="{{ asset('images/greyfurt.jpg') }}" class="responsive"></h5>
</div>
</div>
</div>

<div id="kalite-politikasi" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom">
<div class="w3-container w3-black w3-display-container">
<span onclick="document.getElementById('kalite-politikasi').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
<h1>{{ __('quality.title') }}</h1>
</div>
<div class="w3-container w3-justify">
<p>{!! __('quality.quality') !!}</p>
</div>
</div>
</div>

<div id="sirket" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom">
<div class="w3-container w3-black w3-display-container">
<span onclick="document.getElementById('sirket').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
<h1>{{ __('contact.contact_info') }}</h1>
</div>
<div class="w3-container w3-justify">
<h5><b>Kırmacı İletişim Gıda Limited Şirketi</b><br><br>Gaziler Vergi Dairesi : <b>385 065 3242</b><br>Tic.Sic.No: <b>32580</b><br>Mersis No: <b>0385 0653 2420 0019</b><br><br>Hançerli Mah. Dervişzade Sk. No:6 Kat:7 Daire:10<br>İlkadım, Samsun, Türkiye<br><br><a class="w3-text-blue-gray" href="mailto:exim@kirmaci.com.tr" style="text-decoration: none" target="_blank"><span>exim@kirmaci.com.tr</span></a><br><br><a class="w3-text-orange" href="https://wa.me/903624471447" style="text-decoration: none" target="_blank"><b>+90 362 447 1 447</b></a> <span class="w3-small">( Tel & Fax & Whatsapp )</span></h5>
<br>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  
    var url = "{{ route('changeLang') }}";
  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
  
</script>

</body>
</html>
