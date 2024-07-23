@extends('layout')

@section('content')

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


<h4>Welcome to Trading 123, where you can buy or borrow the most luxurious cars for the most affordable prices.</h4>
<p>All inclusive, we ensure we meet your expectations! </p>

<!--If there is no items in the database then output following message -->
@if(count($listings) == 0)
<p>no listings found</p>
@endif

<!-- Loop to go through every item in the database -->
@foreach($listings as $listing)
	<x-listing-card :listing="$listing"/>
@endforeach


</div>
@endsection
