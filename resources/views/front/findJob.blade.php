@extends('front.layouts.app')

@section('main')

<section class="lg:px-16 px-6">
    <div class="grid grid-cols-2 pt-14">
        <h1 class="heading text-xl font-semibold"><span class="sobuj">Find</span> Jobs</h1>
        <div class="text-right mt-1">
            <select class="border-none text-gray-400 bg-gray-800 py-2 lg:w-1/5 focus:outline-none rounded-md pl-3" name="category" id="category">
                <option value="">Latest</option>
                <option value="">Oldest</option>
            </select>
        </div>
    </div>

    <div class="">
        <div class="lg:h-1/2 text-white">
            <div class="rounded-md space-y-3 lg:space-x-3 pt-4">
                <input class="border-none lg-ml-6 bg-gray-800 py-2.5 w-full lg:w-[18.5%] focus:outline-none rounded-md pl-3" type="text" placeholder="Keywords">
                <input class="border-none bg-gray-800 py-2.5 w-full lg:w-[18.5%] focus:outline-none rounded-md pl-3" type="text" placeholder="Location">
                <select class="border-none text-gray-400 bg-gray-800 py-2.5 w-full lg:w-[17%] focus:outline-none rounded-md pl-3 " name="category" id="category">
                    <option value="">Job Type</option>
                    <option value="">Full Time</option>
                    <option value="">Part Time</option>
                    <option value="">Remote</option>
                    <option value="">Freelance</option>
                </select>
                <select class="border-none text-gray-400 bg-gray-800 py-2.5 w-full lg:w-[18.5%] focus:outline-none rounded-md pl-3 " name="category" id="category">
                    <option value="">Select a Category</option>
                    <option value="">Engineering</option>
                    <option value="">Accountant</option>
                    <option value="">Information Technology</option>
                    <option value="">Fashion designing</option>
                </select>
                <select class="border-none text-gray-400 bg-gray-800 py-2.5 w-full lg:w-[20%] focus:outline-none rounded-md pl-3 " name="category" id="category">
                    <option value="">Select a Experience</option>
                        <option value="">1 Year</option>
                        <option value="">2 Year</option>
                        <option value="">3 Year</option>
                        <option value="">4 Year</option>
                        <option value="">5 Year</option>
                        <option value="">6 Year</option>
                        <option value="">7 Year</option>
                        <option value="">8 Year</option>
                        <option value="">9 Year</option>
                        <option value="">10 Year</option>
                        <option value="">10+ Year</option>
                </select>
                   
            </div>
        </div>
        <!-- Find job -->
        <div class="lg:col-span-3">
            
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
        </div>
    </div> 
</section>
    
@endsection