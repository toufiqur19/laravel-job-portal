@extends('front.layouts.app')

@section('main')
<section class="">
    <div>
        <img class="lg:h-[500px] h-64 w-full" src="{{asset('assets/img/banner55.jpg')}}" alt="">
    </div>
    <div class="absolute sm:absolute z-10 top-28 left-8 lg:top-1/3 lg:left-28">
        <h1 class="text-3xl lg:text-5xl font-bold text-white">Find your dream job</h1>
        <p class="text-xl  lg:text-2xl font-semibold text-white pt-5 pb-4">Thounsands of jobs available.</p>
        <button class="bg-green-500 hover:bg-green-600 text-white 
        font-semibold py-2 px-4 rounded-md">Explore Now</button>
    </div>
</section>

<section class="lg:px-16 px-6 mt-8">
    <div class="bg-gray-800 p-5 lg:text-center rounded-md space-y-3 lg:space-x-3">
        <input class="border-none lg-ml-6 bg-gray-900 py-2.5 w-full lg:w-1/4 focus:outline-none rounded-md pl-3" type="text" placeholder="Keywords">
        <input class="border-none bg-gray-900 py-2.5 w-full lg:w-1/4 focus:outline-none rounded-md pl-3" type="text" placeholder="Location">
        <select class="border-none text-gray-400 bg-gray-900 py-2.5 w-full lg:w-1/4 focus:outline-none rounded-md pl-3 " name="category" id="category">
            <option value="">Select a Category</option>
            <option value="">Engineering</option>
            <option value="">Accountant</option>
            <option value="">Information Technology</option>
            <option value="">Fashion designing</option>
        </select>
        <button class="bg-green-500 py-2.5 px-10 rounded-md text-white font-semibold hover:bg-green-600"><a href="">Search</a></button>
    </div>
</section>

<section>
    <div class="grid gap-4 lg:grid-cols-4 lg:px-16 px-6 mt-5">
        <div class="grid gap-4 h-screen">
            <h1 class="heading"><span class="sobuj">Popular</span> Category</h1>
            <div class="text-white bg-gray-800 hover:bg-gray-700 cursor-pointer rounded-md w-full px-5 py-[17.5px] space-y-2">
                <h1 class="text-xl text-green-400"><a href="">Design & Creative</a></h1>
                <p>50 Available Position</p>
            </div>
            <div class="text-white bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-md w-full px-5 py-[17.5px] space-y-2">
                <h1 class="text-xl text-green-400"><a href="">Design & Creative</a></h1>
                <p>50 Available Position</p>
            </div>
            <div class="text-white bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-md w-full px-5 py-[17.5px] space-y-2">
                <h1 class="text-xl text-green-400"><a href="">Design & Creative</a></h1>
                <p>50 Available Position</p>
            </div>
            <div class="text-white bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-md w-full px-5 py-[17.5px] space-y-2">
                <h1 class="text-xl text-green-400"><a href="">Design & Creative</a></h1>
                <p>50 Available Position</p>
            </div>
            <div class="text-white bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-md w-full px-5 py-[17.5px] space-y-2">
                <h1 class="text-xl text-green-400"><a href="">Design & Creative</a></h1>
                <p>50 Available Position</p>
            </div>
            <div class="text-white bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-md w-full px-5 py-[17.5px] space-y-2">
                <h1 class="text-xl text-green-400"><a href="">Design & Creative</a></h1>
                <p>50 Available Position</p>
            </div>
        </div>
            <!-- Featured job -->
        <div class="lg:col-span-3">
            <h1 class="heading"><span class="sobuj">Featured</span> Job</h1>
            <div class="lg:grid-cols-2 grid gap-4 mt-4">
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
            </div>
            <button class="bg-green-500 py-2 mt-3 float-right px-10 rounded-md text-white font-semibold hover:bg-green-600"><a href="">More >></a></button>
        </div>
    </div>
</section>

<section class="lg:px-16 px-6">
         <!-- Latest job -->
         <div class="lg:col-span-3">
            <h1 class="heading text-3xl"><span class="sobuj">Latest</span> Job</h1>
            <div class="lg:grid-cols-3 grid gap-4 mt-4">
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
                <div class="text-white bg-gray-800 rounded-md p-6 hover:bg-gray-700">
                    <div class="pb-4">
                        <h1 class="text-xl font-semibold pb-1">Web Devloper</h1>
                        <p class="">We are in need of a Web Devloper for our company</p>
                    </div>
                    <div class="text-black bg-gray-700 rounded-md p-5">
                        <p><i class="fa-solid fa-location-dot"></i> Company Location</p>
                        <p class="py-1"><i class="fa-regular fa-clock text-sm"></i> Job type</p>
                        <p><i class="fa-solid fa-dollar-sign"></i> Job salary</p>
                    </div>
                    <button class="bg-green-500 w-full p-2 rounded-md mt-3 font-semibold hover:bg-green-600"><a href="">Detalls</a></button>
                </div>
            </div>
            <button class="bg-green-500 py-2 mt-3 float-right px-10 rounded-md text-white font-semibold hover:bg-green-600"><a href="">More >></a></button>
        </div>
</section>
@endsection