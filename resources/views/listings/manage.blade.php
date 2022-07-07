<x-layout>
  <x-card class="p-2 " >
    <header>
      <h2 >Manage</h2>
    </header>

    <table >
      <tbody>
        @unless($listings->isEmpty())
        @foreach($listings as $listing)
        <tr class="border rounded-3 shadow ">
          <td class="p-3 ps-4">
            <a href="/listings/{{$listing->id}}" style="text-decoration: none"><h3>{{$listing->title}}</h3></a>
          </td>
          <td class="p-3">
            <a href="/listings/{{$listing->id}}/edit" >
                <button type="button" class="btn btn-outline-primary m-1 ms-3 shadow-sm" style="width: 150px">
                    Edit
                </button>
            </a>
          </td>
          <td class="p-3">
            <form method="POST" action="/listings/{{$listing->id}}">
              @csrf
              @method('DELETE')
              <button class="btn btn-outline-danger m-1 ms-3 shadow-sm" style="width: 150px">
                  Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border rounded shadow-sm">
          <td >
            <p class="text-center">No Listings Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
    </table>
  </x-card>
</x-layout>
