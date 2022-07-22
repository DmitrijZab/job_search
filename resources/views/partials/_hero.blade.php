<section class=" text-center mt-5 ">
    <div class="bg-primary bg-gradient"
         style="background-image: url('./public/images/laravel-logo.png'); height: 200px">

        <div>
            <h1 class="text-white mt-2 p-2 " style="font-size: xx-large">
                Find or post jobs & projects
            </h1>
            <div>
                @auth
                @else
                    <a href="/register">
                        <button class="btn btn-outline-light m-1 shadow-sm" type="button" style="width: 150px"
                        >Sign Up to List
                        </button>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</section>
