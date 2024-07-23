@extends('layout')

@section('content')
           <x-card class="p-10 max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class=" font-bold uppercase mb-1">
                            Create
                        </h2>
                        <p class="mb-4">Post an Advertisements</p>
                    </header>

                    <form method="POST" action="/listings" enctype="multipart/form-data">
						<!-- prevents cross side scripting attacks -->
						@csrf
                        <div class="mb-7">
                            <label
                                for="company"
                                class="inline-block text-lg mb-2"
                                >Advertisement Name</label>
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="company" value="{{old('company')}}"/>
                                
                                @error('company')
									<p class="text-red-400 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-7">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Title</label
                            >
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="title"
                                placeholder="Example: Audi 2020" value="{{old('title')}}"/>
                            @error('title')
									<p class="text-red-400 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-7">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >Location</label
                            >
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="location"
                                placeholder="Example: Manchester, London, etc" value="{{old('location')}}"/>
                                @error('location')
									<p class="text-red-400 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        

                        <div class="mb-7">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: brand, year, colour, etc" value="{{old('tags')}}"/>
                                @error('tags')
									<p class="text-red-400 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

					
                        
					
                        <div class="mb-7">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Description
                            </label>
                            <textarea
                                class="border border-black rounded p-2 w-full"
                                name="description"
                                rows="10"
                                placeholder="Include price, year, milleage, etc"
                            value="{{old('description')}}"></textarea>
                            @error('description')
									<p class="text-red-400 text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-7">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Create Add
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
             </x-card>   
@endsection

