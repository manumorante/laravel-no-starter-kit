@props([
    'href' => '#',
])

<a href="{{ $href }}" target="_blank"
   class="ml-1 inline-flex items-center space-x-1 font-medium text-[#f53003] underline underline-offset-4 dark:text-[#FF4433]">
  <span>{{ $slot }}</span>

  <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"
       class="h-2.5 w-2.5">
    <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square" />
  </svg>
</a>
