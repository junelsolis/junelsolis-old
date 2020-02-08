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

                <div class='scroller flex-grow bg-grey-400 ml-24 relative'>
                    <div class='top-fader'></div>
                    <div class='bottom-fader'></div>
                </div>

            </div>
        </div>
        

        <script src='/js/manifest.js'></script>
        <script src='/js/vendor.js'></script>
        <script src='/js/homepage.js'></script>
    </body>
</html>