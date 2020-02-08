<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
        <link href='/css/homepage.css' rel='stylesheet'>
    </head>
    <body class='bg-grey-600'>
        <div id='app' class='h-screen bg-grey-100 flex items-center justify-end'>
            <div class='panel'>
                <div class='left-nav'>
                    <div class='flex-grow p-12 flex flex-col items-center justify-between relative'>
                        <div class='top-logo'>
                            <img src='/images/logo2.svg' class='h-12 w-auto'>
                        </div>
                        <div class='bottom'>
                            <div class='flex items-center absolute left-0 right-0'>
                                <img src='/images/logo.svg' class='h-4 w-auto'>
                                <p class='flex text-grey-400'>&nbsp;/&nbsp;20<span class='text-grey-600 font-bold'>{{ date('y') }}</span></p>
                            </div>
                            
                        </div>
                    </div>
                    <div class='flex flex-col'>
                        <div class='flex-grow border-r border-grey-300 w-1'></div>
                        <div class='flex flex-col'>
                            <a href='' class='font-bold text-grey-300 py-1'>Home</a>
                            <a href='' class='font-bold text-grey-300 py-1'>Projects</a>
                            <a href='' class='font-bold text-grey-300 py-1'>Tech Stack</a>
                            <a href='' class='font-bold text-grey-300 py-1'>Contact</a>
                        </div>
                        <div class='flex-grow'></div>
                    </div>
                </div>

            </div>
        </div>
        

        <script src='/js/manifest.js'></script>
        <script src='/js/vendor.js'></script>
        <script src='/js/homepage.js'></script>
    </body>
</html>