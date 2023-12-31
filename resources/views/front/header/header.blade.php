<header class="bg-gray-800  text-white w-full">
    <nav class=" flex items-center justify-between px-12 h-14 lg:gap-6">
        <a class="font-bold text-2xl whitespace-nowrap" href="{{route('home')}}">Find Job</a>
        <div id="nav_item" class="absolute top-[-180px] left-0 w-full text-center flex flex-col 
        max-lg:bg-gray-700 lg:text-[17px] text-xl lg:static lg:flex-row lg:justify-between z-50">
            <ul class="space-y-2 mt-2 lg:flex-row flex flex-col lg:gap-5">
                <li class="lg:mt-2 hover:text-green-600"><a href="{{route('home')}}">Home</a></li>
                <li class="hover:text-green-600"><a href="{{route('findJob')}}">Find Job</a></li>
                <li class="hover:text-green-600"><a href="{{route('signout')}}">signout</a></li>
            </ul>
            <div class="flex flex-col space-y-2 mt-2 mb-3 lg:flex-row lg:gap-5">
                @guest
                <button class="lg:mt-2 hover:text-green-600"><a href="{{route('signin')}}">Login</a></button>
                @endguest
                @auth
                <button class="hover:text-green-600"><a href="{{ route('jobPost')}}">Post Job</a></button>
                @endauth
            </div>
        </div>
        <div id="hamberger" class="text-xl lg:hidden">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
   </header>