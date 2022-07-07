<x-layout>
  <x-card >
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create</h2>
      <p class="mb-3">Post to find a developer</p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf
      <div class="col-md-6 m-auto m-3">
        <label for="company" class=" col-form-label text-start">Company Name</label>
        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
          value="{{old('company')}}" />

        @error('company')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="title" class="col-4 col-form-label text-start">Job Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
          placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />

        @error('title')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="location" class="col-4 col-form-label text-start">Job Location</label>
        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location"
          placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />

        @error('location')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="email" class="col-4 col-form-label text-start">
          Contact Email
        </label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" />

        @error('email')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="website" class="col-4 col-form-label text-start">
          Website/Application URL
        </label>
        <input type="text" class="form-control @error('website') is-invalid @enderror" name="website"
          value="{{old('website')}}" />

        @error('website')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="tags" class="col-4 col-form-label text-start">
          Tags (Comma Separated)
        </label>
        <input type="text" class="form-control @error('tags') is-invalid @enderror" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

        @error('tags')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="logo" class="col-4 col-form-label text-start">
          Company Logo
        </label>
        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" />

        @error('logo')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3">
        <label for="description" class="col-4 col-form-label text-start">
          Job Description
        </label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

        @error('description')
            <p class="invalid-feedback" role="alert">{{$message}}</p>
        @enderror
      </div>

      <div class="col-md-6 m-auto m-3 mt-3">
        <button type="submit" class="btn btn-outline-primary m-1" style="width: 100px">
          Create
        </button>

        <a href="/" class="">
            <button class="btn btn-outline-primary m-1" style="width: 100px">
                Back
            </button>
        </a>
      </div>
    </form>
  </x-card>
</x-layout>
