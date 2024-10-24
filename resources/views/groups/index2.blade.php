@extends('layouts.main')
@section('content')
<div class='container md:mx-auto'>
    <h2 class="text-2xl">Список групп</h2>
    @foreach($groups as $group)
    <p class="text-lg">{{ $group->title }}</p>
        <div class="pl-10 pb-10">
            <div class="grid grid-cols-4 gap-4 divide-y">
                <p class="font-bold">Фото</p>
                <p class="font-bold">Фамилия</p>
                <p class="font-bold">Имя</p>
                <p class="font-bold">Возраст</p>
                @foreach($group->adultStudents as $student)
                        <img class="size-20" src="{{ $student->path_img }}" alt="{{ $student->lname }}">
                        <p>
                            <a href="{{ route('students.show', $student->id) }}">
                                {{ $student->lname }}
                            </a>
                        </p>
                        <p>{{ $student->fname }}</p>
                        <P>{{ $student->age }}</P>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection