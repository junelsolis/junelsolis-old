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
                        <div id='landing' class='w-full h-full pt-48'>
                            <img src='/images/hero-image.svg' class='rellax' data-rellax-speed='-6' data-rellax-zindex='-100'>
                            <div class='w-3/5 rellax' data-rellax-speed='-1'>
                                <h1 class='uppercase leading-tight' style='font-size:5rem;'>Web<br>Applications</h1>
                                <h3 class='mt-6 normal-case text-grey-400 w-3/5'>Elegant, fully-tested and customized to meet your requirements</h3>
                            </div>

                            
                        </div>

                        <p class='bg-white'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae asperiores odio cum corrupti nemo, laboriosam modi, consectetur deserunt in accusamus facere beatae ducimus dolor aperiam expedita nulla vero, tenetur tempore? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis reiciendis dolorem repudiandae itaque exercitationem fugit tempora obcaecati maxime fuga! Facilis, ducimus neque? Asperiores autem impedit suscipit quod nesciunt ut porro? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos eveniet id maxime expedita quis praesentium soluta perspiciatis ipsum recusandae. Itaque cupiditate nam quibusdam, quos non consectetur nobis fugit quia aut. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt dolorem libero dolore saepe atque. Sequi provident repellat modi voluptates voluptatibus neque, aliquid, delectus voluptate est veritatis, praesentium sed fugit nisi! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, fuga? Excepturi corrupti beatae incidunt ex quae, dolores repellendus blanditiis culpa voluptatum assumenda doloremque eveniet pariatur, delectus maiores. Mollitia, dolor quasi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque praesentium possimus sunt nesciunt consequuntur nostrum tempora in magnam quam facilis fuga, eos illo sequi explicabo at, cum suscipit quisquam quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam magnam, labore officia possimus cumque, dolorem adipisci quibusdam reprehenderit enim expedita ipsa consequatur exercitationem qui temporibus in nostrum unde id! Deserunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis obcaecati magni fuga quae fugiat! Explicabo consectetur, magnam, deleniti rerum repellat quo id ut molestiae ab quasi illum excepturi ipsum atque? lorem lorem Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere numquam nisi officia error natus nostrum reprehenderit expedita aperiam voluptates iusto iste architecto commodi maxime, dolore itaque enim ullam cupiditate sunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere odio libero dicta commodi consequuntur incidunt tenetur quas, impedit molestiae accusantium rem atque cum veritatis ullam aut earum perspiciatis nisi modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit deleniti debitis dolore minima itaque velit repellendus incidunt magni illum porro aperiam quas fuga, sequi vero repellat quos, modi est? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo maxime distinctio quisquam hic itaque aspernatur aliquid reprehenderit necessitatibus rem enim, accusamus temporibus iste quos, consequuntur cupiditate voluptas, excepturi sed sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti assumenda quam porro deserunt, sit nemo neque molestias tenetur dolorum quia voluptate maxime molestiae nobis pariatur delectus minima, quas, voluptatum nihil!</p>
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