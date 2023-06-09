<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="eb4921f405093029" />
    @vite('resources/js/app.js')
    @inertiaHead
    @routes
    <link rel="icon" href="favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="title" content="NickWeb - Сайт портфолио - Создание сайтов - Услуги по разработке сайтов" />
    <meta name="description" content="Сайты на заказ. Сколько стоит сделать продающий сайт? Не дорого, а выгодно! Занимаюсь разработкой и оптимизацией сайтов, интернет-магазинов, лендингов более 3 лет. Предоставляю услуги по технической поддержке и обслуживанию сайтов на заказ. Сайт - портфолио frontend-разработчика" />
    <meta name="keywords"
        content="Разработка и создание сайтов, верстка сайтов, frontend - разработка, frontend - разработчик, красивые сайты." />
    <link href="/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="/assets/css/colors/default.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <!-- Yandex.RTB R-A-2349465-1 -->
    <script>
        window.yaContextCb.push(() => {
            Ya.Context.AdvManager.render({
                "blockId": "R-A-2349465-1",
                "type": "floorAd"
            })
        })
    </script>
    <main>
        @inertia
        <script src="/assets/lib/jquery/dist/jquery.js"></script>
        <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/assets/lib/wow/dist/wow.js"></script>
        <script src="/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
        <script src="/assets/lib/isotope/dist/isotope.pkgd.js"></script>
        <script src="/assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
        <script src="/assets/lib/flexslider/jquery.flexslider.js"></script>
        <script src="/assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="/assets/lib/smoothscroll.js"></script>
        <script src="/assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
        <script src="/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
    </main>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(92943266, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/92943266" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!--LiveInternet counter-->
    <script>
        (function(d, s) {
            d.getElementById("licntDEA0").src =
                "https://counter.yadro.ru/hit?t26.6;r" + escape(d.referrer) +
                ((typeof(s) == "undefined") ? "" : ";s" + s.width + "*" + s.height + "*" +
                    (s.colorDepth ? s.colorDepth : s.pixelDepth)) + ";u" + escape(d.URL) +
                ";h" + escape(d.title.substring(0, 150)) + ";" + Math.random()
        })
        (document, screen)
    </script>
    <!--/LiveInternet-->
</body>

</html>
