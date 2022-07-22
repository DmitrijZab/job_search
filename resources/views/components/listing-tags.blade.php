@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)

        <a href="/?tag={{$tag}}" class="rounded-3 p-1 ps-2 pe-2 text-white bg-dark bg-gradient shadow-sm"
           style="text-decoration: none">{{$tag}}</a>

    @endforeach
</ul>
