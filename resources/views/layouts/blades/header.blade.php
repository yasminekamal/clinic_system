 <header>
{{--     nav bar     --}}
     <section class="bg-primary" style="opacity: 0.8">
         <div class="container justify-content-between">
             <div class="row p-4">
                 <div class="col-2">
                     <img src="pictures/logo.webp">
                 </div>

                 <div class="col-10 row">
                     <nav class="col-6">
                         <ul class="navbar-nav flex-row" id="navbar">
                             <li class="nav-item h6 m-2">
                                 <a class="nav-link text-white" href="#">Home</a>
                             </li>
                             <li class="nav-item h6 m-2">
                                 <a class="nav-link text-white" href="#">About</a>
                             </li>
                             <li class="nav-item h6 m-2">
                                 <a class="nav-link text-white" href="#">Contact Us</a>
                             </li>
                         </ul>
                     </nav>

                     <button class="btn btn-light text-primary col-3">Book Appointment</button>

     <div class="col-3">
         @if (Route::has('login'))
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                     <a href="{{ url('/home') }}" class="text-sm text-white underline">Home</a>
                 @else
                     <a href="{{ route('login') }}" class="text-sm text-white underline">Login</a>

                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                     @endif
                 @endif
             </div>
         @endif
     </div>
     </div>
         </div>
         </div>
     </section>
{{--    slider        --}}
     <section class="container h-90 slider">
         <div class="row flex-column text-white justify-content-center h-100">
             <p class="h4">The Best Medical Center</p>
             <h1 id="h1-main"><strong>Bringing Health</strong></h1>
             <h1 id="thin-h1">To Life For the whole Family</h1>

             <div class="row m-0">
                 <button class="btn btn-outline-light col-2">Discover More</button>
             </div>
         </div>
     </section>

 </header>



