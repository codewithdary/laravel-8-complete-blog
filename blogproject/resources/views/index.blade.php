@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-thin pb-14">
                    Do you want to become a backend developer?
                </h1>
                <a 
                    href="/blog"     
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-25 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="pb-8">
            <img
                src="https://www-cdn.tigerspike.com/wp-content/uploads/2020/04/RC_Main_mobile-uai-842x473.jpg"
                alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to adapt to remote collaboration?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                We thought it would be good to share guidance, originally intended for our own teams, to a wider audience.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                We’ve shared training material, checklists and a video for anyone to download, adapt and use.
            </p>

            <a 
                href="" 
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>
    
    <div class="text-center pt-15 pb-15">
        <span class="uppercase text-xs text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold pt-10 pb-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Are you interested in our new posts regarding web development? Watch them right here!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-25 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    PHP is a dynamically typed language. This means there are no hard rules on how to build features, and you'll have more flexibility solving problems using different methods.
                </h3>

                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>

        <div>
            <img
                src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_1280.jpg"
                alt="Image blog post"
                class="w-full shadow-lg">
        </div>

        <div>
            <img
                src="https://cdn.pixabay.com/photo/2016/11/19/15/32/business-1839876_1280.jpg"
                alt="Image blog post"
                class="w-full shadow-lg">
        </div>

        <div class="flex bg-gray-500 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                Laravel
            </span>

                <h3 class="text-xl font-bold py-10">
                    Laravel is an open-source PHP framework designed to make developing web apps easier and faster through built-in features.
                </h3>

                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
    </div>
@endsection
