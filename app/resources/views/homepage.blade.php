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
                        <a href="#" class="text-teal-300 text-2xl hover:text-blue-500"><svg class="icon icon-github">
                                <use xlink:href="#icon-github"></use>
                            </svg></a>
                    </div>
                    <div>
                        <a href="#" class="text-teal-300 text-2xl hover:text-blue-500"><svg class="icon icon-whatsapp">
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

                <div class="card__fields">
                    <div style='grid-column: 1/2;'>
                        <label for="">Full Name</label>
                        <input type='text'>
                    </div>
                    <div style='grid-column: 2/3;'>
                        <label for="">Email address</label>
                        <input type='email'>
                    </div>
                    <div style='grid-column: 1/3;'>
                        <label for="">Message</label>
                        <textarea></textarea>
                    </div>
                    <div style='grid-column: 1/2;'>
                        <button href='#' class="large-btn">
                            <div>Submit</div>
                            <div><svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg></div>
                        </button></div>
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