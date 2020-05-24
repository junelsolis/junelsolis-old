<footer>
    <div class="bg-teal-700 px-6 py-12">
        <div class="container mx-auto">
            <img src='/images/logo-full-inverse.svg' alt='Junel Solis full stack web developer' class='w-64 h-auto mx-auto'>
        </div>

    </div>
    <div class="bottom">
        <div class="container mx-auto">
            <span class="text-center text-teal-500 text-xs">Created using <a href='https://laravel.com'>Laravel</a> | <a href='https://vuejs.org'>Vue</a> | <a href='https://tailwindcss.com'>Tailwind</a> | <a href='https://docker.com'>Docker</a></span><br>
            <span class="text-center text-xs text-teal-700">
                <a href="https://github.com/junelsolis/junelsolis/commit/{{ Cache::get('git_commit') }}" target='_blank'>
                    {{ Cache::get('git_commit') }}</a>
            </span>
        </div>

    </div>
</footer>