
@include('partials.header', [$title])

<header class=max-w-lg mx-auto>
    <a href="#"></a>
        <h1 class="text-4xl font-bold text-gray-800 text-center" >Edit 
            {{$students->first_name}} {{$students->last_name}}</h1>
</header>
<main class="bg-gray-800 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
<section class="mt-10">
    <form action="/student/{{$students->id}}"  class="flex flex-col" method="POST">
      @method('PUT')  
      @csrf
        <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="first_name" class="block text-gray-700
             text-sm font-bold mb-2 ml-3">First Name</label>
            <input type="text" name="first_name" class="bg-gray-200 rounded
             w-full text-gray-700 focus:outline-none
              border-b-4 border-gray-400 px-3" autocomplete="0" 
              value={{$students->first_name}}>
              @error('first_name')
              <p class="text-red-500 text-xs p-1">
                    {{$message}}
              </p>
              @enderror
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="last_name" class="block text-gray-700
             text-sm font-bold mb-2 ml-3">Last Name</label>
            <input type="text" name="last_name" class="bg-gray-200 rounded
             w-full text-gray-700 focus:outline-none
              border-b-4 border-gray-400 px-3" autocomplete="0" value={{$students->last_name}}>
              @error('last_name')
              <p class="text-red-500 text-xs p-1">
                    {{$message}}
              </p>
              @enderror
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="gender" class="block text-gray-700
             text-sm font-bold mb-2 ml-3">Gender</label>
            <select name="gender" class="bg-gray-200 rounded
             w-full text-gray-700 focus:outline-none
              border-b-4 border-gray-400 px-3" >
              <option value="" {{$students->gender==""?'selected':''}}></option>
                <option value="Male" {{$students->gender=="Male"?'selected':''}}>Male</option>
                <option value="Female" {{$students->gender=="Female"?'selected':''}}>Female</option>
            </select>
            @error('gender')
              <p class="text-red-500 text-xs p-1">
                    {{$message}}
              </p>
              @enderror
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="age" class="block text-gray-700
             text-sm font-bold mb-2 ml-3">Age</label>
            <input type="number" name="age" class="bg-gray-200 rounded
             w-full text-gray-700 focus:outline-none
              border-b-4 border-gray-400 px-3" value={{$students->age}}>
              @error('age')
              <p class="text-red-500 text-xs p-1" >
                    {{$message}}
              </p>
              @enderror
        </div>
        <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="email" class="block text-gray-700
             text-sm font-bold mb-2 ml-3">Email</label>
            <input type="email" name="email" class="bg-gray-200 rounded
             w-full text-gray-700 focus:outline-none
              border-b-4 border-gray-400 px-3" autocomplete="0" value={{$students->email}}>
              @error('email')
              <p class="text-red-500 text-xs p-1">
                    {{$message}}
              </p>
              @enderror
        </div>
        <button type="submit" class="bg-indigo-600 hover:bg-blue-700
         text-white font-bold py-2 rounded shadow-lg
          hover:shadow-xl transition duration-200"
          >Update</button>  
          
    </form>
    <form action="/student/{{$students->id}}" method="POST">
      @method('delete')
      @csrf
      <button type="submit" class="w-full mt-2 bg-red-600 hover:bg-green-700
         text-white font-bold py-2 rounded shadow-lg
          hover:shadow-xl transition duration-200"
          >Delete</button>
    </form>
    
</section>
</main>



@include('partials.footer')