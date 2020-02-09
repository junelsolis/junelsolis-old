<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        @include('meta-tags')
        <link href='/css/homepage.css' rel='stylesheet'>
        <title>Laravel Web Applications | Junel Solis | Full-Stack Web Developer</title>
    </head>
    <body class='bg-grey-600'>
        <div id='app' class='h-screen bg-grey-100 flex items-center justify-end'>
            <div class='panel'>
                @include('left-nav')

                <div class='scroller'>
                    

                    <div class='top-fader'></div>
                    

                    <main class='content h-full w-full'>
                        @include('landing')

                        
                    </main>

                    <!-- <div class='bottom-fader'></div> -->
                </div>

            </div>
        </div>
        

        <script src='/js/manifest.js'></script>
        <script src='/js/vendor.js'></script>
        <script src='/js/homepage.js'></script>

        <script type="text/javascript" src='/js/rellax.js'></script>
        <script>
            var rellax = new Rellax('.rellax', {
                // center: true,
                wrapper: '.scroller'
            });
        </script>
    </body>
</html>