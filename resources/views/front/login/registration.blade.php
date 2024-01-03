@extends('front.layouts.app')

@section('main')
  <section class="bg-gray-50 h-[85vh] dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                    Sign Up
                </h1>
                <form class="space-y-4 md:space-y-6 text-white" action="#">
                    <div>
                        <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                        <input type="text" name="name" id="name" placeholder="enter your name" class="focus:outline-none bg-gray-900 py-2 pl-3 rounded w-full" required="">
                    </div>
                    <div>
                        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" class="focus:outline-none bg-gray-900 py-2 pl-3 rounded w-full" required="">
                    </div>
                    
                    <div>
                        <label for="Password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="focus:outline-none bg-gray-900 py-2 pl-3 rounded w-full" required="">
                    </div>
                    <div>
                        <label for="Confirm Password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" name="c-password" id="c-password" placeholder="Enter your password" class="focus:outline-none bg-gray-900 py-2 pl-3 rounded w-full" required="">
                    </div>
                    <button class="text-white bg-green-500 rounded py-2 w-full hover:bg-green-600"><a href="">SignUp</a></button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        allrady have an account >>><a href="{{route('login')}}" class="font-medium pl-3 text-green-500 hover:underline dark:text-primary-500">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection