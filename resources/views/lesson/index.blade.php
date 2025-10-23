@extends('layout.app3')
@section('title')
    lessons
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
{{--                <a href="{{route('courses.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add course +</a>--}}
                <h2 class="text-xl">lessons</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        @auth('students')
                            <td class="text-center">choose lesson</td>
                        @endauth
                        <td class="text-center">course</td>
                        <td class="text-center">capacity</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('student.lessons.store',compact('lesson'))}}" method="post">
                                    @csrf
                                    <button type="submit"
                                            class="text-green-700 cursor-pointer">choose
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">{{$lesson->course->title}}</td>
                            <td class="text-center">{{$lesson->capacity}}</td>
                            <td class="text-center">{{$lesson->description}}</td>
                            <td class="text-center">{{$lesson->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$lessons->links()}}</div>
        </div>
@endsection
