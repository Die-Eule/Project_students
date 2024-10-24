@extends('layouts.main')
@section('content')
<div class='container md:mx-auto'>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @method('put')
    @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Имя</label>
                <input type="text" name="fname" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$student->fname}}" required />
            </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Фамилия</label>
            <input type="text" name="lname" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$student->lname}}" required />
        </div>
        <div>
            <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Возраст</label>
            <input type="number" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$student->age}}" required />
        </div>
        <div>
            <label for="group" class="block mb-2 text-sm font-medium text-gray-900">Группа</label>
            <select name="group_id" id="group" class="block apperance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-gray-900">
                @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900">I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a>.</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Обновить</button>
</form>
    <p>{{$student->lname}}</p>
    <p>{{$student->fname}}</p>
    <p>{{$student->age}}</p>
</div>
@endsection()