@extends('layout')

@section('content')
@include('partials._search')
<a href="/" class="inline-block text-black"><h5>Back</h5></a>
            <div class="mx-4">
                <x-card>
                    <div class="flex flex-col items-center justify-center text-center">
						<!-- if there is no image inserted by the user then the no-image.png will be added, option to add image not implemented 
						code checks if there is an image in storage uploaded by the user to upload for the advertisement-->
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{$listing->logo ? asset ('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                            alt=""/>
							
							<!-- get the specific data of the listing items using $listing -> variablename -->
                        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                        
                        <!-- create the tags, read them as csv files from the database -->
                        <x-listing-tags :tagsCsv="$listing->tags" />
                        
                        
                        <div class="text-lg my-4">
                            {{$listing->location}}
                        </div>
                        <div class="border border-black w-full mb-7"></div>
                        <div>
                            <h1 class="font-bold mb-5">Description</h1>
                            <p>{{$listing->description}}</p>
                            
                        </div>
                    </div>
                </x-card>
                
                <!--open an id webpage to edit a specific listing item -->
                <x-card class="mt-4 pt-2 flex space-x-6">
					<a href="/listings/{{$listing->id}}/edit"> Edit |
					</a>
					<!-- send a request in order to delete -->
					<form method="POST" action="/listings/{{$listing->id}}">
					@csrf
					@method('DELETE')
					<button> | Delete</button>
					
					</form>
				</x-card>
            </div>

@endsection
