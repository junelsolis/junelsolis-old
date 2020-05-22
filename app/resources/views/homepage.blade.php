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
                        <a href="https://www.github.com/junelsolis" target='_blank' class="text-teal-300 text-2xl hover:text-blue-500"><svg class="icon icon-github">
                                <use xlink:href="#icon-github"></use>
                            </svg></a>
                    </div>
                    <div>
                        <a href="https:://wa.me/254790503144" target='_blank' class="text-teal-300 text-2xl hover:text-blue-500"><svg class="icon icon-whatsapp">
                                <use xlink:href="#icon-whatsapp"></use>
                            </svg></a>
                    </div>
                    <div>
                        <a href="#" class="text-teal-300 text-2xl hover:text-blue-500"><svg class="icon icon-alternate_email">
                                <use xlink:href="#icon-alternate_email"></use>
                            </svg></a>
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
            <div class='right'></div>
        </section>

        <section class="contact container">
            <div class="contact__card">
                <h3 class="underlined">Let's work on a project</h3>

                <p class='mt-6 text-grey-600 text-sm'>
                    Do you have a project you’d like to get started on?<br>
                    Are you looking for a customized solution for your business?
                </p>

                <contact-form></contact-form>
            </div>
        </section>

        <section class="steps container">
            <div class='steps__top'>
                <div class='left'>
                    <img src='/images/logo.svg' class='h-10 w-auto'>
                    <h3 class='mt-3 leading-none'>Project<br>Development</h3>
                    <p class='mt-3 w-3/4'>
                    Here’s what it takes to get your web application project up and running
                    </p>
                </div>
                <div class='flex items-center'>
                    <p>
                    Cras sodales felis ac sem imperdiet facilisis. Mauris mollis mauris orci, eu facilisis tortor tristique efficitur. Nulla facilisi. Integer ullamcorper mauris odio, non malesuada erat mollis sit amet. Etiam iaculis molestie erat eu luctus
                    </p>
                </div>
            </div>
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