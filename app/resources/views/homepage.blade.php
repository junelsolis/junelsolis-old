<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
    @include('meta-tags')
    <link href='/css/site.css' rel='stylesheet'>
    <title>Junel Solis | Full Stack Web Developer</title>
</head>

<body>
    <div id='app' class='homepage'>
        <section class='landing'>
            <div class='left'>
                <div>
                    <div>
                        <a href="#" class="text-grey-500 text-2xl hover:text-blue-500"><svg class="icon icon-github"><use xlink:href="#icon-github"></use></svg></a>
                    </div>
                    <div>
                        <a href="#" class="text-grey-500 text-2xl hover:text-blue-500"><svg class="icon icon-whatsapp"><use xlink:href="#icon-whatsapp"></use></svg></a>
                    </div>
                    <div>
                        <a href="#" class="text-grey-500 text-2xl hover:text-blue-500"><svg class="icon icon-alternate_email"><use xlink:href="#icon-alternate_email"></use></svg></a>
                    </div>
                </div>
            </div>
            <div class='middle'>
                <div class='logo'>
                    <div>
                        <img src='/images/logo.svg' alt='Junel Solis Full Stack Web Developer Logo'>
                    </div>
                    <div class='ml-4'>
                        <h1>Junel Solis</h1>
                        <h2>Full Stack Web Developer</h2>
                    </div>
                </div>
                <div class='stack'>
                    <ul>
                        <li>Laravel</li>
                        <li>Vue</li>
                        <li>Tailwind CSS</li>
                        <li>MariaDB</li>
                        <li>Docker</li>
                        <li>Nginx</li>
                        <li>Redis</li>
                        <li>Linux</li>
                    </ul>
                    <ul class='mt-4'>
                        <li>Stripe</li>
                        <li>Paypal</li>
                        <li>Mapbox</li>
                        <li>Google Maps</li>
                        <li>Wordpress API</li>
                    </ul>
                </div>
                <div class='mt-20'>
                    <a href='#' class="large-btn">
                        <div>Project Demos</div>
                        <div><svg class="icon icon-arrow-right">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg></div>
                    </a>
                </div>
            </div>
            <div class='right'>right</div>
        </section>
    </div>

    @include('symbols')


    <script src='/js/manifest.js'></script>
    <script src='/js/vendor.js'></script>
    <script src='/js/site.js'></script>

    <!-- <script type="text/javascript" src='/js/rellax.min.js'></script>
        <script>
            var rellax = new Rellax('.rellax', {
                // center: true,
                wrapper: '.scroller'
            });
        </script> -->
</body>

</html>