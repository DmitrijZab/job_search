<x-layout>
  <a href="/" >
      <button class="btn btn-outline-dark m-1 ms-4 shadow-sm" type="button" style="width: 150px"
      >Back</button>
  </a>
  <div class="m-1">
    <x-card class="p-1">
      <div class="flex flex-col items-center justify-center text-center">
        <img class=" m-1" style="width: 100px"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="logo" />

        <h3 class="text-2xl mb-2">
          {{$listing->title}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

        <x-listing-tags :tagsCsv="$listing->tags" />

        <div class="text-lg my-4">
           {{$listing->location}}
        </div>
        <div class="border m-2 "></div>
        <div>
          <h3 class="text-3xl font-bold mb-4">Job Description</h3>
          <div class="text-lg  pt-2 pb-5">
            {{$listing->description}}


          </div>
            <div >
                <a href="mailto:{{$listing->email}}" class="">
                    <button class="btn btn-outline-primary m-1 shadow-sm" type="button" style="width: 200px"
                    >Contact Employer</button>
                </a>

                <a href="{{$listing->website}}" target="_blank" class="">
                    <button class="btn btn-outline-primary m-1 shadow-sm" type="button" style="width: 200px"
                    >Visit Website</button>
                </a>
            </div>
        </div>
      </div>
    </x-card>

{{--     <x-card class="m-2 p-2 flex ">--}}
{{--         <div class="m-1 p-1">--}}
{{--             <a href="/listings/{{$listing->id}}/edit">--}}
{{--                 <button class="btn btn-outline-primary m-1 shadow-sm" style="width: 150px"--}}
{{--                 >Edit</button>--}}
{{--                 <i class="fa-solid fa-pencil"></i>--}}
{{--             </a>--}}

{{--             <form method="POST" action="/listings/{{$listing->id}}">--}}
{{--                 @csrf--}}
{{--                 @method('DELETE')--}}
{{--                 <button class="btn btn-outline-danger m-1 shadow-sm" style="width: 150px"--}}
{{--                 > Delete</button>--}}
{{--             </form>--}}
{{--         </div>--}}

{{--    </x-card>--}}
  </div>
</x-layout>
