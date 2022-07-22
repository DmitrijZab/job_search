<x-layout>
    <x-card>
        <header class="text-center">
            <h2 class=" mb-1">Login</h2>
            <p class="mb-4">Log into your account to post</p>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf

            <div class="col-md-6 mb-3 m-auto">
                <label for="email" class="col-md-4 col-form-label text-sm-start">{{ __('Name') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{old('email')}}" required autocomplete="email" autofocus/>

                @error('email')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 mb-3 m-auto">
                <label for="password" class="col-md-4 col-form-label text-sm-start">
                    Password
                </label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                       required autocomplete="current-password"
                       value="{{old('password')}}"/>

                @error('password')
                <p class="invalid-feedback" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 mb-3 m-auto position-relative">
                <a href="/register" class="">
                    <button type="button" class="btn btn-outline-primary shadow-sm" style="width: 150px">
                        Register
                    </button>
                </a>
                <button type="submit" class="btn btn-outline-primary position-absolute end-0 shadow-sm"
                        style="width: 150px">
                    Sign In
                </button>
            </div>

            <div class="col-md-6 mb-3 m-auto">
                <p>
                    Don't have an account?
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
