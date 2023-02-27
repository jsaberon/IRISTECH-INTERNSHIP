@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>
<x-messages />

<header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class="text-4xl text-gray-800 font-bold text-center py-10">Student List</h1>
    </a>
</header>

<section class="mt-2">
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-600">
                <tr>
                    <th scope="col" class="py-3 px-6">
                       First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-gray-200 border-b-2 border-white text-gray-600">
                        <td class="py-4 px-6">{{ $student->first_name }}</td>
                        <td class="py-4 px-6">{{ $student->last_name }}</td>
                        <td class="py-4 px-6">{{ $student->email }}</td>
                        <td class="py-4 px-6">{{ $student->age }}</td>
                        <td class="py-4 px-6">
                            <a href="/students/{{$student->id}}" class="bg-indigo-600 text-white px-4 py-1 rounded">view</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="mx-auto max-w-lg pt-6 p-4">
            {{ $students->links() }}
    </div>
</div>
</section>
    
@include('partials.footer')
