@include('partials.header', [$title])

<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-3xl text-gray-800 font-bold text-center">Add New Student</h1>
    </a>
</header>

<main class="bg-gray-800 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
    
        <section class="mt-10">
            <form action="/add/student" method="POST" class="flex flex-col">
                @csrf
                @error('email')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>

            @enderror

            <div class="mb-6 pt-3 rounded bg-white">
                <label for="first_name" class="block text-gray-600 text-sm font-bold mb-2 ml-3">First Name</label>
                <input type="text" name="first_name" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3" autocomplete="off" value={{old('first_name')}}>
                @error('first_name')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-white">
                <label for="last_name" class="block text-gray-600 text-sm font-bold mb-2 ml-3">Last Name</label>
                <input type="text" name="last_name" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3" autocomplete="off" value={{old('last_name')}}>
                @error('last_name')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-white">
                <label for="gender" class="block text-gray-600 text-sm font-bold mb-2 ml-3">Gender</label>
                <select name="gender" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3">
                    <option value="" value={{old('gender') == "" ? 'selected' : ''}}></option>
                    <option value="Male" value={{old('gender') == "Male" ? 'selected' : ''}}>Male</option>
                    <option value="Female" value={{old('gender') == "Female" ? 'selected' : ''}}>Female</option>
                </select>
                @error('gender')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                    
            </div>

            <div class="mb-6 pt-3 rounded bg-white">
                <label for="age" class="block text-gray-600 text-sm font-bold mb-2 ml-3">Age</label>
                <input type="number" name="age" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3" value={{old('age')}}>

                @error('age')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
            </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="email" class="block text-gray-600 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-400 rounded w-full text-gray-800 focus:outline-none border-b-4 border-white px-3" autocomplete="off" value={{old('email')}}>
                        @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 rounded shadow-lg hover:shadow-sm transition duration-200" type="submit">Add New</button>
            </form>
    </section>
</main>


@include('partials.footer')