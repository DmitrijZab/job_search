@if(session()->has('message'))
<div class="fixed-top p-2">
  <p class="position-absolute end-50">
    {{session('message')}}
  </p>
</div>
@endif
