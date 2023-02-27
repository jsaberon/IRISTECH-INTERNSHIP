@include('partials.header')

<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4x1 text-gray-800 font-bold text-center">{{ $title }}</h1>
    </a>
</header>

<main class="bg-gray-800 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
    <section>
        <h3 class="font-bold text-white text-2x1 text-center">Welcome to Students System</h3>
        <p class="text-white pt-2">Sign up a new account <a href="/register" class="text-indigo-400 font-bold">here</a></p>
    </section>
        <section class="mt-10">
            <form action="/login/process" method="POST" class="flex flex-col">
                @csrf
                @error('email')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
            @enderror
                <div class="mb-6 pt-3 rounded bg-white">
                    <label form="email" class="block text-gray-600 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3">
                    
                </div>

                <div class="mb-6 pt-3 rounded bg-white">
                    <label form="password" class="block text-gray-600 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3">
                    
                </div>

                <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 rounded shadow-lg hover:shadow-sm transition duration-200" type="submit">Login</button>
               

            </form>
        
    </section>
</main>


    @include('partials.footer')