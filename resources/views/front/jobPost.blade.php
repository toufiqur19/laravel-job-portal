@extends('front.layouts.app')

@section('main')
<section class="lg:px-16 px-6">
    <!-- headline -->
    <div class="mt-16">
        <ul class="flex">
            <li class="text-green-400 hover:text-green-500"><a href="">Home</a></li>
            <li class="text-white pl-2"><a href=""><span>/</span> Account Settings</a></li>
        </ul>
    </div>

    <div class="grid lg:grid-cols-4 gap-4 mt-5">
        <!-- left side -->
        <div class="lg:h-auto">
            <div class="bg-gray-800 rounded-md p-4 text-center lg:pb-6 pb-8">
                <div class="top_section">
                    <img id="profile_pic" class="rounded-full lg:ml-7 lg:w-32 lg:h-32 w-40 h-40 ring-4 ml-16 ring-white mt-3 mb-3" src="img/33.jpg" alt="">
                    <h1 class="text-green-400 font-semibold lg:text-xl text-3xl">Toufiqur Rahman</h1>
                    <p class="text-white lg:pb-3 py-1 pb-6 lg:py-0 lg:text-[16px] text-xl">Full Stack Devloper</p>
                    <label class="bg-gray-900 text-white lg:py-2 lg:px-6 py-3 px-10 rounded lg:text-sm cursor-pointer hover:bg-green-400 hover:text-gray-900" for="input-file">Update Image</label>
                    <input class="hidden" type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                </div>
            </div>
            <div class="bg-gray-800 rounded-md mt-4 text-white">
                <ul>
                    <li class="border-b border-gray-900 pl-4 py-3"><a href="post.html">Account Settings</a></li>
                    <li class="border-b border-gray-900 pl-4 py-3"><a href="post_jobs.html">Post a Job</a></li>
                    <li class="border-b border-gray-900 pl-4 py-3"><a href="my-job.html">My jobs</a></li>
                    <li class="border-b border-gray-900 pl-4 py-3"><a href="applied-jobs.html">Jobs Applied</a></li>
                    <li class="border-b border-gray-900 pl-4 py-3"><a href="save-jobs">saved Jobs</a></li>
                </ul>
            </div>
        </div>

       
        <!-- right side -->
       <div class="lg:col-span-3">
        <div class="bg-gray-800  rounded-md p-4  text-white w-full">
            <h1 class="font-bold text-2xl">Job Details</h1>
            <form action="">
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="grid">
                        <label class="mt-3" for="">Title*</label>
                        <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="job title">
                    </div>
                    <div class="grid">
                        <label class="mt-3" for="">Category*</label>
                        <select class="border-none text-gray-400 bg-gray-900 py-2  mt-1.5 focus:outline-none rounded-md pl-3 " name="category" id="category">
                            <option value="">Select a Category</option>
                            <option value="">Engineering</option>
                            <option value="">Accountant</option>
                            <option value="">Information Technology</option>
                            <option value="">Fashion designing</option>
                        </select>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="grid">
                        <label class="mt-3" for="">Vacancy*</label>
                        <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="number" placeholder="Vacancy">
                    </div>
                    <div class="grid">
                        <label class="mt-3" for="">Job Type*</label>
                        <select class="border-none text-gray-400 bg-gray-900 py-2 w-full mt-1.5 focus:outline-none rounded-md pl-3 " name="category" id="category">
                            <option value="">Job Type</option>
                            <option value="">Full Time</option>
                            <option value="">Part Time</option>
                            <option value="">Remote</option>
                            <option value="">Freelance</option>
                        </select>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="grid">
                        <label class="mt-3" for="">Salary*</label>
                        <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="salary">
                    </div>
                    <div class="grid">
                        <label class="mt-3" for="">Location*</label>
                        <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="Location">
                    </div>
                </div>
                <div class="grid">
                    <label class="mt-3" for="">Description*</label>
                    <textarea cols="30" rows="3" name="" id="" class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" placeholder="Description"></textarea>
                </div>
                <div class="grid">
                    <label class="mt-3" for="">Benefits</label>
                    <textarea cols="30" rows="3" name="" id="" class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" placeholder="Benefits"></textarea>
                </div>
                <div class="grid">
                    <label class="mt-3" for="">Responsibility</label>
                    <textarea cols="30" rows="3" name="" id="" class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" placeholder="Responsibility"></textarea>
                </div>
                <div class="grid">
                    <label class="mt-3" for="">Qualifications</label>
                    <textarea cols="30" rows="3" name="" id="" class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" placeholder="Qualifications"></textarea>
                </div>
                <div class="grid">
                    <label class="mt-3" for="">Keywords*</label>
                    <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="Keywords">
                </div><div class="border-b-2 border-gray-900 mt-4"></div>
                <!-- company detail -->
                <div class="mt-3">
                    <h1 class="font-bold text-2xl">Company Details</h1>
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div class="grid">
                            <label class="mt-3" for="">Name*</label>
                            <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="Company Name">
                        </div>
                        <div class="grid">
                            <label class="mt-3" for="">Location*</label>
                            <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="Location">
                        </div>
                    </div>
                    <div class="grid">
                        <label class="mt-3" for="">Website</label>
                        <input class="focus:outline-none bg-gray-900 mt-1.5 pl-3 py-2 rounded text-sm" type="text" placeholder="Website">
                    </div>
                </div>
                <button class="bg-green-400 text-gray-900 font-semibold mt-5 py-2 px-5 rounded hover:bg-green-500">Save Job</button>
            </form>
        </div>
       </div>
        
    </div>
</section>
@endsection