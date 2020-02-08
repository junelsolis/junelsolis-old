<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
        <link href='/css/homepage.css' rel='stylesheet'>
    </head>
    <body class='bg-grey-600'>
        <div id='app' class='h-screen bg-grey-100 flex items-center justify-end'>
            <div class='panel'>
                @include('left-nav')

                <div class='scroller'>
                    

                    <div class='top-fader'></div>

                    <main class='content h-full w-full'>
                        <div id='landing' class='w-full h-full pt-48'>
                            <div class='w-3/5' style='z-index:1;'>
                                <h1 class='uppercase leading-tight' style='font-size:5rem;'>Web<br>Applications</h1>
                                <h3 class='mt-6 normal-case text-grey-400'>Elegant, fully-tested and customized to meet your requirements</h3>
                            </div>

                            <img src='/images/hero-image.svg'>
                        </div>
                    </main>

                    <div class='bottom-fader'></div>
                </div>

            </div>
        </div>
        

        <script src='/js/manifest.js'></script>
        <script src='/js/vendor.js'></script>
        <script src='/js/homepage.js'></script>
    </body>
</html>