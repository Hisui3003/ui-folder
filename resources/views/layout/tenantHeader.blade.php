<header class="py-1 shadow-sm bg-white">
    <div class="px-10 flex items-center justify-between">
        {{-- logo --}}
        <a href="#">
            <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
            {{-- <h1 class="text-gray-700 hover:text-red-500 transision">FindFlat</h1> --}}
        </a>


        {{-- search area --}}
        <div class="w-full max-w-xl relative flex ml-24 hover:shadow-2xl hover:scale-105 transition">
            <span class="absolute left-4 top-3 text-lg text-gray-400">
                <i class="fas fa-search"></i>
            </span>
            <input type="text" class="w-full border border-primary pl-12 py-3 pr-3 rounded-l-md focus:outline-none" placeholder="Search">
            <button class="bg-red-500 border border-red-500 text-white px-8 rounded-r-md hover:bg-red-600 hover:text-white hover:font-bold transition">Search</button>
        </div>


        {{-- yung icons --}}
        <div class="flex items-center space-x-4 ml-16">


            {{-- listing a property button --}}
            <a href="paymentform" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-2xl">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>
                <div class="text-sx leading-3">Payment Form</div>
            </a>


            {{-- account button --}}
            <a href="profile" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-2xl">
                    <i class="fas fa-user"></i>
                </div>
                <div class="text-sx leading-3">Account</div>
            </a>
        </div>
        @auth
        <!-- Show links for authenticated users -->
        <a href="{{ route('logout') }}" class="text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            <div class="text-sx leading-3">Log Out</div>
        </a>
    @else
        <!-- Show links for guests (unauthenticated users) -->
        <a href="{{ route('login') }}" class="text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            <div class="text-sx leading-3">Log In</div>
        </a>
    </div>
    @endauth
</header>
