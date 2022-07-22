<x-layout>
    <x-card class="p-2 mt-2">
        <header class="text-center">
            <h2 class="text-2xl font-bold mb-1">Edit</h2>
            <p class="mb-4">Edit: {{$listing->title}}</p>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6 m-auto m-3">
                <label for="company" class=" col-form-label text-start">Company Name</label>
                <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                       value="{{$listing->company}}"/>

                @error('company')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="title" class=" col-form-label text-start">Job Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                       placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}"/>

                @error('title')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="location" class=" col-form-label text-start">Job Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location"
                       placeholder="Example: Remote, Boston MA, etc" value="{{$listing->location}}"/>

                @error('location')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="email" class=" col-form-label text-start">
                    Contact Email
                </label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{$listing->email}}"/>

                @error('email')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="website" class=" col-form-label text-start">
                    Website/Application URL
                </label>
                <input type="text" class="form-control @error('website') is-invalid @enderror" name="website"
                       value="{{$listing->website}}"/>

                @error('website')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="tags" class=" col-form-label text-start">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="form-control @error('tags') is-invalid @enderror" name="tags"
                       placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}"/>

                @error('tags')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="logo" class=" col-form-label text-start">
                    Company Logo
                </label>
                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"/>

                <img class="m-3" style=" width: 100px"
                     src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                     alt=""/>

                @error('logo')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3">
                <label for="description" class=" col-form-label text-start">
                    Job Description
                </label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="10"
                          placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>

                @error('description')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 m-auto m-3 ">
                <button type="submit" class="btn btn-outline-primary m-1 shadow-sm" style="width: 150px">
                    Update
                </button>

                <a href="/" class="">
                    <button type="button" class="btn btn-outline-primary m-1 shadow-sm" style="width: 150px">
                        Back
                    </button>
                </a>
            </div>
        </form>
    </x-card>
</x-layout>
