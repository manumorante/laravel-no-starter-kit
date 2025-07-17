<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
</head>

<body
  class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]">

  <x-header />

  <div
    class="duration-750 starting:opacity-0 flex w-full items-center justify-center opacity-100 transition-opacity lg:grow">
    <main class="flex w-full max-w-[335px] flex-col-reverse lg:max-w-4xl lg:flex-row">
      <x-card>
        <x-card.title>Let's get started</x-card.title>
        <x-card.subtitle>Laravel has an incredibly rich ecosystem.<br>
          We suggest starting with the following.</x-card.subtitle>

        <x-steps>
          <x-steps.step>
            Read the
            <x-external-link href="https://laravel.com/docs">Documentation</x-external-link>
          </x-steps.step>

          <x-steps.step>
            Watch video tutorials at
            <x-external-link href="https://laracasts.com">Laracasts</x-external-link>
          </x-steps.step>
        </x-steps>

        <x-button href="https://cloud.laravel.com" target="_blank">
          Deploy now
        </x-button>
      </x-card>

      <div
        class="relative -mb-px aspect-[335/376] w-full shrink-0 overflow-hidden rounded-t-lg bg-[#fff2f2] lg:-ml-px lg:mb-0 lg:aspect-auto lg:w-[438px] lg:rounded-r-lg lg:rounded-t-none dark:bg-[#1D0002]">
        <x-laravel-logo />
        <x-twelve-logo />

        <div
          class="absolute inset-0 rounded-t-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] lg:rounded-r-lg lg:rounded-t-none dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
        </div>
      </div>
    </main>
  </div>

</body>

</html>
