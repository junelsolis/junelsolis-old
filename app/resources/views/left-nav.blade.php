<div class='left-nav'>
    <div class='flex-grow p-12 flex flex-col items-center justify-between relative'>
        <div class='top-logo'>
            <img src='/images/logo2.svg'>
        </div>
        <div class='bottom'>
            <div>
                <img src='/images/logo.svg'>
                <p>&nbsp;/&nbsp;20<span>{{ date('y') }}</span></p>
            </div>
            
        </div>
    </div>
    <div class='flex flex-col'>
        <div class='flex-grow border-r border-grey-300 w-1'></div>
        <nav class='flex flex-col'>
            <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Home</scroll-to-link>
            <scroll-to-link href='#projects' class='font-bold text-grey-300 py-1'>Projects</scroll-to-link>
            <!-- <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Tech Stack</scroll-to-link> -->
            <!-- <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Contact</scroll-to-link> -->
            <scroll-to-link href='#open-source' class='font-bold text-grey-300 py-1'>Open Source</scroll-to-link>

            <!-- possibly useful for crawlers? -->
            <a href='#landing' class='hidden'>Home</a>
            <a href='#projects' class='hidden'>Projects</a>
            <!-- <a href='#tech-stack' class='hidden'>Tech Stack</a> -->
            <!-- <a href='#contact' class='hidden'>Contact</a> -->
            <a href='#open-source' class='hidden'>Open Source</a>
        </nav>
        <div class='flex-grow'></div>
    </div>
</div>