@props(['listing'])

<x-card>
  <div class="flex-column ">
    <img class="m-2" style="width: 100px"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="logo" />
    <div>
      <h3 class="text-2xl">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <div class="text-xl font-bold m-2">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg m-2">
         {{$listing->location}}
      </div>
    </div>
  </div>
</x-card>
