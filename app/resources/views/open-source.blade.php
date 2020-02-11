<div class='mt-24 flex' id='open-source'>
    <div class='bar'>
        <div class='left'>
            <div class='bg-grey-100 w-6 h-24 flex items-center justify-center relative'>
                <p class='flex uppercase text-grey-500 text-sm text-center font-bold'>Code</p>
                <div class='w-3 h-1 bg-red-400 absolute bottom-0'></div>
            </div>
        </div>
        <div class='right rellax' data-rellax-speed='1'>
            <h2><span class='text-grey-200'>Open Source</span>Open Source</h2>
        </div>
    </div>
    <div class='flex-grow h-64 px-8'>
        <h3 class='normal-case'>The source code for this site is available for <a href='https://www.github.com/junelsolis/junelsolis' target='_blank' class='font-bold text-red-400'>FREE</a> under the <a href='https://github.com/junelsolis/junelsolis/blob/master/LICENSE' target='_blank' class='text-grey-400'>MIT LIcense</a>.</h3>
        <div class='mt-12'>
            <p class='text-grey-400 text-sm'>Using commit <span class='font-bold text-grey-500'>{{ Cache::get('git_commit') }}</span></p>
            <p class='text-grey-400 text-sm'>Last updated on <span class='font-bold text-grey-500'>{{ \Carbon\Carbon::createFromTimestamp(Cache::get('git_last_update'))->format('M d, Y') }}</span>.</p>
        </div>
        <div class='mt-6'>
            <p class='text-grey-400 text-sm'>Many icons on this site are provided by <span class='bold text-grey-500'>FontAwesome</span> as licensed <a href='' class='text-red-400'>here</a></p>
        </div>
        <div class='mt-6'>
            <p class='text-grey-400 text-xs'>
                While the source code is freely available for you to use and modify, I reserve the rights to the content of the site, including projects, images, logos and trademarks.
            </p>
        </div>
    </div>
    <div class='w-1/2 h-full'>
        <img src='/images/graphic.svg' class='h-full w-auto rellax' data-rellax-speed='2'>
    </div>
</div>