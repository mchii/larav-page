@extends('layouts.frontend')

@section('content')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            

           
         
        
            
           
            <div class="lg:grid lg:grid-cols-3 flex">
                @foreach ($blogs as $blog)
                {{-- <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">  
                    @if ($blog->id== 2)
                        
        
                        <div class="py-6 px-5 lg:flex">
                            
                            <div class="flex-1 lg:mr-8">
                                <img src="./assets/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>
        
                            <div class="flex-1 flex flex-col justify-between">
                                <header class="mt-8 lg:mt-0">
                                    <div class="space-x-2">
                                        <a href="#"
                                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Techniques</a>
        
                                        <a href="#"
                                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Updates</a>
                                    </div>
        
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            {{$blog->title}}
                                        </h1>
        
                                        <span class="mt-2 block text-gray-400 text-xs">
                                                Published <time>{{$blog->date}}</time>
                                            </span>
                                    </div>
                                </header>
        
                                <div class="text-sm mt-2">
                                    <p>
                                    {{$blog->excerpt}}
                                    </p>
        
                                    <p class="mt-4">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
        
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./assets/images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
        
                                    <div class="hidden lg:block">
                                        <a href="#"
                                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >Read More</a>
                                    </div>
                                </footer>
                            </div>
                            
                        </div>
                       
                    @endif
                    </article>  --}}
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl ">
                    
                    <div class="py-7 px-6">
                       
                        <div>
                            <img src="./assets/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Techniques</a>
                                    <a href="#"
                                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Updates</a>
                                </div>
                                
                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        {{$blog->title}}
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$blog->date}}</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    {{$blog->excerpt}}
                                </p>

                                <p class="mt-4">
                                    {{$blog->description}}
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./assets/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >Read More</a>
                                </div>
                            </footer>
                        </div>
                       
                    </div>
                    
                </article>
                @endforeach
            </div>
           
           
        </main>
    @endsection
   