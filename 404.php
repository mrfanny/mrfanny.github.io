<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/img/e-logo.png">
     <link rel="stylesheet" href="/style.css">
    <title>WebRádio Epigon</title>
    <meta name="viewport" content="width=device-width, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body>
    <div class="hornilista"><div class="hraje"><?php
$url = 'https://radia.cz/data/pravehraje/160.html';
$content = file_get_contents($url);
$interpret = explode( '<div class="nazev">' , $content );
$second_step = explode("</div>" , $interpret[1]);
$song = explode( '<div class="song">' , $content );
$song_result = explode("</div>" , $song[1]);

echo $second_step[0] ." - ". $song_result[0];
?></div>
    <a href="/"><img src="/img/e-logo.png" title="logo WebRádia Epigon"></a></div>
    <div class="obsah">
        <a href="#"><div class="hornifoto"><div class="hornitext"><!--<div class="hornitextdatum">29. 6. 2021<br>15:00</div>--><div class="hornitexttext">WebRádio Epigon</div></div><div class="pozadi-special"></div></div></a>
        <p>Vítejte na webových stránkách studentského rádia Epigon. Naše rádio bylo založeno v červnu 2011, což znamená, že vám už 10 let hraje tu nejlepší muziku. Za celou dobu našeho vysílání se za mikrofonem vystřídalo spoustu moderátorů - někteří se objevili jen na krátkou chvíli, jiní zůstali i několik let.</p><p>A právě moderátoři, ve spojení s pekelně dobrou muzikou, jsou to, co dělalo a stále dělá naše vysílání tak skvělé. Jsme studentským rádiem a to znamená, že se narozdíl od rádiích komerčních, nemusíme omezovat na krátké vstupy, jejichž čas je pevně nastaven, aby se stihla odvysílat reklama. Nic takového v našem vysílání totiž nenajdete!</p><p>Proč? Naše vysílání neobsahuje žádné reklamy a vy si tak můžete nerušeně vychutnat to nejlepší z rockové muziky bez zbytečného přerušování.</p>
        <a href="https://radia.cz/radio-webradio-epigon-info" target="_blank"><div class="zapni"><div class="hornitext"><img src="/img/zapni.png">
        <div class="hornitexttext">Klikni a poslouchej >></div></div></div></a>
        <h2>Napiš do studia</h2>
        <p>Chceš nám nabídnout nějakou Tvou píseň, kterou bychom mohli zařadit do playlistu nebo nás kontaktovat přes e-mail? Napiš na adresu <a href="mailto:radio@stredni-skola.eu">radio@stredni-skola.eu</a>. Předem upozorňujeme, že zaslané písně prochází interním schválením a nemůžeme zaručit jejich zařazení do vysílání. Prosíme o zasílání pouze rockové, metalové, punkové, apod. hudby.</p>
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdx0AnnzagiOpPz9I8HMgO8weTFkeb-1TprYTh5SgfSV9xj0w/viewform?embedded=true" height="720px" width="100%" style="" frameborder="0" marginheight="0" marginwidth="0">Načítání…</iframe>
<h2>Sleduj naší webku!</h2>
<p>Pokud nevidíte obraz z webkamery, webkameru zrovna nevysíláme.</p>
<div class="video-container"><iframe src="https://www.youtube.com/embed/live_stream?channel=UCyBs26DLAUSnoXzqDCkzhtA" allowfullscreen="" style="width: 100%;" frameborder="0"></iframe></div>
<h2>Z historie</h2><div class="historie">
<img src="/img/rafael.jpg" class="historieimg"><div class="historietext"><h2>2011</h2>WebRádio Epigon zahájilo své vysílání v červenci roku 2011 z budovy tehdejšího domova mládeže v Brantlově ulici.</div>
<br><br><img src="/img/sipka.png" class="next"><br><br>
<img src="/img/provizorni.jpg" class="historieimg">
<div class="historietext"><h2>2015</h2>Stěhování do Nerudovy ulice, kde se zhruba měsíc vysílalo z provizorních prostor. Později došlo k přestěhování do samostatného studia.</div>
</div></div>
<div class="pozadi"><img src="/img/background.jpg"></div>
<a href="https://radia.cz/radio-webradio-epigon-info" target="_blank"><div class="zapnoutvysilani"><img src="/img/zapni.png"></div></a>
</body>
