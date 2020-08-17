<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TALL Stack') }}</title>

    <meta property="og:title" content="TALL Stack: Tailwind CSS, Alpine.js, Laravel, and Livewire. One Happy Family.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:image" content="{{ url('images/tallstack-og.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:description" content="Learn more about the newest stack for Laravel developers. Full stack, all in Laravel-inspired syntax.">
    <meta property="og:site_name" content="{{ config('app.name', 'TALL Stack') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@stauffermatt">
    <meta name="twitter:title" content="TALL Stack: Tailwind CSS, Alpine.js, Laravel, and Livewire.">
    <meta name="twitter:image" content="{{ url('images/tallstack-twitter.png') }}">

    <meta name="description" content="Learn more about the newest stack for Laravel developers. Full stack, all in Laravel-inspired syntax." />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://boom.laravel.io/script.js" site="VGRBYZSB" defer></script>
    <!-- / Fathom -->
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="relative bg-gray-50 overflow-hidden">
      <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
          <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
            <defs>
              <pattern id="svg-pattern-squares-1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#svg-pattern-squares-1)" />
          </svg>
          <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
            <defs>
              <pattern id="svg-pattern-squares-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#svg-pattern-squares-2)" />
          </svg>
        </div>
      </div>

      <div x-data="{ open: false }" class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-28">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
          <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#">
                  <img class="h-8 w-auto sm:h-10" src="/images/tallstack-logo.png" alt="TALL Stack logo" />
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button @click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <a href="https://tailwindcss.com/" class="font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Tailwind</a>
              <a href="https://github.com/alpinejs/alpine/" class="ml-10 font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Alpine.js</a>
              <a href="https://laravel.com/" class="ml-10 font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Laravel</a>
              <a href="https://laravel-livewire.com/" class="ml-10 font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Livewire</a>
            </div>
            {{-- <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
              <span class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-green-600 bg-white hover:text-green-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-50 active:text-green-700 transition duration-150 ease-in-out">
                  Log in
                </a>
              </span>
            </div> --}}
          </nav>
        </div>

        <div x-show="open" style="display: none;" class="absolute top-0 inset-x-0 p-2 md:hidden">
          <div class="rounded-lg shadow-md transition transform origin-top-right" x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
            <div class="rounded-lg bg-white shadow-xs overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="/images/tallstack-logo.png" alt="TALL Stack logo" />
                </div>
                <div class="-mr-2">
                  <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3">
                <a href="https://tailwindcss.com/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Tailwind</a>
                <a href="https://github.com/alpinejs/alpine/" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Alpine.js</a>
                <a href="https://laravel.com/" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Laravel</a>
                <a href="https://laravel-livewire.com/" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Livewire</a>
              </div>
    {{--           <div>
                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-green-600 bg-gray-50 hover:bg-gray-100 hover:text-green-700 focus:outline-none focus:bg-gray-100 focus:text-green-700 transition duration-150 ease-in-out">
                  Log in
                </a>
              </div> --}}
            </div>
          </div>
        </div>

        <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
          <div class="text-center">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
              Reactive Laravel apps with the
              <br class="xl:hidden" />
              <span class="text-green-600">TALL stack</span>
            </h2>
            <p class="leading-7 mt-3 max-w-md mx-auto text-base text-gray-700 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
              Tailwind, Alpine.js, Laravel, and Livewire. A full-stack development solution, built by Laravel community members.
            </p>
            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
              <div class="rounded-md shadow">
                <a href="#components" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                  Learn more
                </a>
              </div>
              <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                <a href="https://github.com/tightenco/novapackages" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-green-600 bg-white hover:text-green-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                  View example app
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="pt-12 pb-16 bg-white" id="components">
      <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <p class="text-base leading-6 text-green-600 font-semibold tracking-wide uppercase">TALL Components</p>
          <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
            A new way to build rich, reactive web apps.
          </h3>
          <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-700 lg:mx-auto">
            Learn Laravel, style it easily with Tailwind, and write Laravel-like Livewire components and a dash of Alpine.js, and you've got a full-stack reactive and interactive platform for creation.
          </p>
        </div>

        <div class="mt-10">
          <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
            <li>
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
{{--                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg> --}}
                    <img src="/images/tailwind-icon.png" alt="Tailwind Icon" class="h-6 w-6">
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg leading-6 font-medium text-gray-900"><a href="https://tailwindcss.com/">Tailwind CSS</a></h5>
                  <p class="mt-2 text-base leading-6 text-gray-700">
                    With Tailwind's utility classes, you're writing custom CSS without the CSS. Build your own customized designs with the ease of Bootstrap and the flexibility of handwritten CSS.
                  </p>
                </div>
              </div>
            </li>
            <li class="mt-10 md:mt-0">
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
{{--                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                    </svg> --}}
                    <img src="/images/alpine-icon.png" alt="Alpine.js Icon" class="h-6 w-6">
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg leading-6 font-medium text-gray-900"><a href="https://github.com/alpinejs/alpine">Alpine.js</a></h5>
                  <p class="mt-2 text-base leading-6 text-gray-700">
                    Alpine.js is a tiny, declarative JavaScript framework that allows you to create simple interactive components on the page. Perfectly paired with Livewire, and by the same creator.
                  </p>
                </div>
              </div>
            </li>
            <li class="mt-10 md:mt-0">
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
{{--                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg> --}}
                    <img src="/images/laravel-icon.png" alt="Laravel Icon" class="h-6 w-6">
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg leading-6 font-medium text-gray-900"><a href="https://laravel.com/">Laravel</a></h5>
                  <p class="mt-2 text-base leading-6 text-gray-700">
                    Robust, mature, powerful, and flexible, with an incredible community, Laravel is one of the leading full-stack web frameworks.
                  </p>
                </div>
              </div>
            </li>
            <li class="mt-10 md:mt-0">
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
{{--                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                    </svg> --}}
                    <img src="/images/livewire-icon.png" alt="Livewire Icon" class="h-6 w-6">
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg leading-6 font-medium text-gray-900"><a href="https://laravel-livewire.com/">Livewire</a></h5>
                  <p class="mt-2 text-base leading-6 text-gray-700">
                    Laravel view components, delivered seamlessly to your users via JavaScript that <em>you don't have to write</em>.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>

        <div class="mt-8 flex justify-center">
          <div class="rounded-md bg-blue-100 p-4">
            <div class="flex">
              <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
              </div>
              <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="text-sm leading-5 text-blue-700">
                  Want to get started quickly with the TALL stack?
                </p>
                <p class="mt-3 text-sm leading-5 md:mt-0 md:ml-6">
                  <a href="https://github.com/laravel-frontend-presets/tall" class="whitespace-no-wrap font-bold text-blue-700 hover:text-blue-600 transition ease-in-out duration-150">
                    Check out the preset &rarr;
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="bg-white mt-16">
  <div class="max-w-screen-xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
    <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
      <div class="px-5 py-2">
        <a href="https://tailwindcss.com/" class="text-base leading-6 text-gray-700 hover:text-gray-900">
          Tailwind
        </a>
      </div>
      <div class="px-5 py-2">
        <a href="https://github.com/alpinejs/alpine" class="text-base leading-6 text-gray-700 hover:text-gray-900">
          Alpine.js
        </a>
      </div>
      <div class="px-5 py-2">
        <a href="https://laravel.com/" class="text-base leading-6 text-gray-700 hover:text-gray-900">
          Laravel
        </a>
      </div>
      <div class="px-5 py-2">
        <a href="https://laravel-livewire.com/" class="text-base leading-6 text-gray-700 hover:text-gray-900">
          Livewire
        </a>
      </div>
    </nav>
    <div class="mt-8 flex justify-center">
        <a href="https://twitter.com/stauffermatt" class="ml-6 text-gray-600 hover:text-gray-800">
          <span class="sr-only">Twitter</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
          </svg>
        </a>
      <a href="https://github.com/tightenco/tallstack" class="ml-6 text-gray-600 hover:text-gray-800">
        <span class="sr-only">GitHub</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
        </svg>
      </a>
    </div>
    <div class="mt-8">
      <p class="text-center text-base leading-6 text-gray-700">
        &copy; {{ date('Y') }} <a href="https://mattstauffer.com/" class="underline hover:text-gray-900">Matt Stauffer</a> All rights reserved. | <a href="https://github.com/tightenco/tallstack" class="underline hover:text-gray-900">Open source on GitHub</a>
      </p>
    </div>
  </div>
</div>

</body>
</html>
