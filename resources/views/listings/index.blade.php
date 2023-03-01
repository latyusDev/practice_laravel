<x-layout>
    @include('partials._hero')
    @include('partials._search')
    @if (count($Listings) == 0)
    <p>no listing</p>
    @endif
    
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
     
    @foreach($Listings as $listing) 
    
    <x-listing_card :listing="$listing"/>
    
   @endforeach
</div>   

<div class="mt-6 p-4">
    {{$Listings->links()}}
</div>

</x-layout>
