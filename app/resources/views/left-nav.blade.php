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
            <left-menu></left-menu>

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