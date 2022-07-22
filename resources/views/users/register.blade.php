<x-layout>
    <x-card>
        <header class="text-center">
            <h2 class="mb-1">Register</h2>
            <p class="mb-4">Create an account to post gigs</p>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="col-md-6 mb-3 m-auto">
                <label for="name" class="col-md-4 col-form-label text-sm-start"> {{ __('Name') }} </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{old('name')}}" required autocomplete="name" autofocus/>

                @error('name')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 mb-3 m-auto">
                <label for="email" class="col-md-4 col-form-label text-sm-start">{{ __('Email Address') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{old('email')}}" required autocomplete="email"/>

                @error('email')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 mb-3 m-auto">
                <label for="password" class="col-md-4 col-form-label text-sm-start">
                    {{ __('Password') }}
                </label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                       required autocomplete="new-password"
                       value="{{old('password')}}"/>

                @error('password')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 mb-3 m-auto">
                <label for="password2" class="col-md-4 col-form-label text-sm-start">
                    {{ __('Confirm Password') }}
                </label>
                <input type="password" class="form-control" name="password_confirmation" required
                       autocomplete="new-password"
                       value="{{old('password_confirmation')}}"/>

                @error('password_confirmation')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 mb-3 m-auto position-relative">
                <a href="/login" class="">
                    <button type="button" class="btn btn-outline-primary ">
                        Login
                    </button>
                </a>

                <button type="submit" class="btn btn-outline-primary position-absolute end-0">
                    Sign Up
                </button>
            </div>

            <div class="col-md-6 mb-3 m-auto">
                Already have an account?
            </div>
        </form>
    </x-card>
</x-layout>
