<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       

        <title>Homepage</title>

      
        <!-- Styles -->
       

        <style>
           
            .topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
body {
  background-image: url('https://w0.peakpx.com/wallpaper/1014/834/HD-wallpaper-indian-railways-freighttrain-indianrailway-graphy-railway-track-train-trains.jpg');
}


      </style>
    </head>
    <body >
    
    <div> <center><font color=black><h2>DHAKA METRO SYSTEM</h2></font></center></div>

    
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
            @if (Route::has('login'))
                <div class="topright">
               
                    @auth
                    <p>
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" ><font COLOR=black>Log in</font></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" ><font COLOR=black>Register</font></a>
                        @endif
</p>
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>
