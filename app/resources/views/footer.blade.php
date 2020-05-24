<footer>
    <div class="bg-teal-700 px-6 py-12">
        <img src='/images/logo-full-inverse.svg' alt='Junel Solis full stack web developer' class='w-64 h-auto mx-auto'>
    </div>
    <div class="bg-teal-800 px-6 py-3 text-center">
        <span class="text-center text-teal-500 text-xs">Created using Laravel | Vue | Tailwind | Docker</span><br>
        <span class="text-center text-xs text-teal-700">
            <a href="https://github.com/junelsolis/junelsolis/commit/{{ Cache::get('git_commit') }}" target='_blank'>
            {{ Cache::get('git_commit') }}</a>
        </span>
    </div>
</footer>