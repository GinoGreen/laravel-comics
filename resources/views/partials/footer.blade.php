<footer>

   <div class="lists">
      <div class="container bg-dc-logo">
         
         @foreach (config('footer_lists') as $lists) 
            <div class="list">
               <h4>{{ $lists['listTitle'] }}</h4>
               <ul>
                  @foreach ($lists as $list)
                  <li>
                     <a href="#">{{ $list['text'] }}</a>
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