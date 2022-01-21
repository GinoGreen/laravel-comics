@extends('layouts.app')
@section('content')
   
<main>

   <section id="jumbotrone"></section>

   <div class="container">
      <h2>current series</h2>
   </div>

   <section id="thumbs" class="container">
      @foreach ($comics as $comic_book)
         <div class="myCard">
            <div class="img-square-container">
               <img src="{{ $comic_book['thumb'] }}" alt="{{ $comic_book['series'] }}">
            </div>
            <h5>{{ $comic_book['series'] }}</h5>
         </div>
      @endforeach
   </section>

   <button>load more</button>

</main>

@endsection