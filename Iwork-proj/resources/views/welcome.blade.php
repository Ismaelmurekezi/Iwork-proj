<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/main.css">
        <!-- Styles -->
       
    
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="header">
                <div class="logo">
                    <h1>iWork</h1>
                </div>
                <div class="links">
                <a href="/">Home</a>
                <a href="/findJob">Find Job</a>
                <a href="">Services</a>
                <a href="">About Us</a>
                </div>
                @if (Route::has('login'))
                 <div class="btn">
                     @auth
                     @else
                     <button class="btn1"> <a href="{{ url('/jobpost') }}">Post Job</a></button>
                    <button class="btn2"> <a href="{{ route('login') }}">Login</a></button>
                    @if (Route::has('register'))
                    <button class="btn3"><a href="{{ route('register') }}">Signup</a></button>

                    @endif
                    @endauth
                </div>
                @endif
 
                
             </div>
            <div class="contents">
                <div class="content1">
                    <h2>LOOKING FOR JOB  ,YOU COME TO THE RIGHT PLACE</h2>
                    <p>Dump Utils. ServiceStack.Text has extension methods which </br>
                     recursively dumps all the public properties of any type into a human</br>
                    Dump Utils. ServiceStack.Text has extension methods which </br>
                     recursively dumps all the public properties of any type into a human  </p>
                     <form action="#" method="GET" class="search-form">
                    <input type="text" name="query" placeholder="Search for a job...">
                     <button type="submit" class="btn-search">Search</button>
                    </form>
                </div>
                <div class="content2">
                    <img src="/img/Rectangle2.jpeg" alt="groupp">
                </div>
                
            </div>
            <div class="vision">
                <div class="vision1">
                    <!-- <h2>About Us</h2> -->
                    <img src="/img/Group.jpeg" alt="">
                </div>
                <div class="vision2">
                    <h2>History</h2>
                    <p>
                  recursively dumps all the public properties of any type into a human .
                      Dump Utils. ServiceStack.Text has extension methods which 
                       recursively dumps all the public properties of any type into a human .
                  </p></br>
                      <h2>Vision</h2>
                      <p>
                  recursively dumps all the public properties of any type into a human .
                  Dump Utils. ServiceStack.Text has extension methods which 
                        recursively dumps all the public properties of any type into a human .
                        </p></br></br>
                        <button class="btn2b">OBJECTIVE</button>
                </div>
            </div>
            <div class="available">
                <div class="available1">
                    <h2>Available Jobs</h2>
                </div>
                <div class="available2">
                    <div class="av1">
                        <h3>Javascript Developer</h3>
                    </div>
                    <div class="av2">
                        <h4>Kigali,Rwanda</h4>
                        <p>Full Time</p>
                    </div>
                    <div class="av3">
                        <h4>Posted by</h4>
                    </div>
                    <div class="av4">
                        <img src="/img/ic.png" alt="">
                        <h4>King Tech</h4>
                        <p>2 days ago</p>
                    </div>
                </div>
            </div>
             </div>

        </div>   
        
        </div>
    </body>
</html>
