<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
    @include('meta-tags')
    <link href='/css/site.css' rel='stylesheet'>
    <title>Full Stack Web Developer | Junel Solis | Project Demos</title>
</head>

<body>

    <div class="project__demos">
        <div class="sidebar">
            <a href='/' class="logo">
                <img src="/images/logo.svg" class='h-8 w-auto' alt="">
                <div class='ml-2'>
                    <h3>Junel Solis</h3>
                    <h4>Full Stack Web Developer</h4>
                </div>
            </a>

        </div>
        <div class="main__content">content</div>
    </div>

    @include('symbols')
    @include('footer')

    <script src='/js/manifest.js'></script>
    <script src='/js/vendor.js'></script>
    <script src='/js/site.js'></script>

</body>

</html>