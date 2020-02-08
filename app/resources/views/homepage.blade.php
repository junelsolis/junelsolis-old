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

                    <main class='content h-full bg-grey-200'>
                        <div class='w-full h-full'>
                            <h1 class='uppercase leading-tight' style='font-size:5rem;'>Web<br>Applications</h1>
                            <h4 class='normal-case text-grey-300 w-1/3'>Elegant, fully-tested and customized to meet your requirements</h4>
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