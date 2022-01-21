<header class="container">
   <div class="logo">
      <img src="{{ asset('img/dc-logo.png')}}" alt="logo">
   </div>
   <ul>
      @foreach (config('menu') as $section)
         <li>
            {{-- <a 
               class="{{ Route::currentRoutName() === $section['route'] ? 'active' : '' }}" 
               href="{{ route($section['route']) }}"
            >{{ $section['title'] }}</a> --}}
         </li>
      @endforeach
   </ul>
</header>