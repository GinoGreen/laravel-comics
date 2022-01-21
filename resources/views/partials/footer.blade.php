<footer>

   <div class="lists">
      <div class="container bg-dc-logo">
         
         @foreach (config('footer_lists') as $list) 
            <div class="list">
               <h4>{{ $list['listTitle'] }}</h4>
               <ul>
                  @foreach ($list['text'] as $list_item)
                  <li>
                     <a href="#">{{ $list_item }}</a>
                  </li>
                  @endforeach
               </ul>
            </div>
         @endforeach

      </div>
   </div>

   <div class="bottom-footer">
      <div class="container">

         <button>sign-up now!</button>

         <div class="socials">
            <h4>follow us</h4>
            @foreach (config('social_icons') as $imgPath)
               <img src="{{ $imgPath }}" alt="" class="icon">
            @endforeach
         </div>

      </div>
   </div>

</footer>