<x-layout>
  @if (!Auth::check())
    @include('partials._hero')
  @endif

  @include('partials._search')

      <div class=" p-3 m-3 ">
        <h1 class="text-center">Find Jobs & Projects</h1>
        @unless(count($listings) == 0)

        @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach

        @else
        <p>No listings found</p>
        @endunless

      </div>
      <div class="ms-5 ">
          {{$listings->links('vendor.pagination.bootstrap-4')}}
      </div>

</x-layout>
