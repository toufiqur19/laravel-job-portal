@extends('front.layouts.app')

@section('main')
<section class="bg-gray-50 h-[85vh] dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            @if(session()->has('message'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">{{ session()->get('message') }}</span>
                    </div>
                @endif
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-2xl font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign In
                </h1>
                <form method="POST" action="{{ route('login.custom') }}" class="space-y-4 md:space-y-6 text-white">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" class="focus:outline-none bg-gray-900 py-2 pl-3 rounded w-full">
                        @if ($errors->has('email'))
                        <div class="mt-2 " role="alert">
                            <span class="font-medium text-sm">{{ $errors->first('email') }}</span>
                          </div>
                        @endif
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Your Password" class="focus:outline-none bg-gray-900 py-2 pl-3 rounded w-full">
                            @if ($errors->has('password'))
                            <div class="mt-2" role="alert">
                                <span class="font-medium text-sm">{{ $errors->first('password') }}</span>
                              </div>
                            @endif
                    </div>
                    <button type="submit" class="text-white bg-green-500 rounded py-2 w-full hover:bg-green-600">Signin</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="{{route('signup')}}" class="font-medium pl-3 text-green-500 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection