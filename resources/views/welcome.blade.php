@extends('layouts.app')

@section('content')
    <div style="background-image: url('/storage/home.jpg');" class="-mx-10 -mt-5 bg-cover flex flex-col justify-center min-h-screen py-12 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="w-1/4">
                <img src="favicon.png" alt="" class="">
            </div>
            <div class="flex flex-col justify-around">
                <div class="space-y-6">

                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        welcome to LaraOverflow
                    </h1>

                    <ul class="list-reset flex space-x-5 text-xl text-gray-700">
                        <li>
                            <a href="{{route('questions.index')}}" class="font-medium hover:border-b-4 hover:border-gray-500">Questions</a>
                        </li>
                        <li>
                            <a href="{{route('teams.index')}}" class="font-medium hover:border-b-4 hover:border-gray-500">Teams</a>
                        </li>
                        <li>
                            <a href="{{route('questions.create')}}" class="font-medium hover:border-b-4 hover:border-gray-500">Ask</a>
                        </li>
                        <li>
                            <a href="" class="font-medium hover:border-b-4 hover:border-gray-500">About</a>
                        </li>
                        <li>
                            <a href="https://github.com/ezra02/laraoverflow" class="font-medium hover:border-b-4 hover:border-gray-500">Star</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="lg:flex wrap justify-between space-x-5 text-2xl text-gray-700">
            <div class="bg-gray-200 py-5 px-5 flex flex-col space-y-2 items-center rounded-xl shadow-primary shadow-2xl">
                <h1 class="text-4xl font-bold my-2 text-primary">{{$totalTailwindQuestions}}|{{$totalTailwindAnswers}}</h1>
                <p>Tailwindcss Questions and Answers</p>
            </div>
            <div class="bg-gray-200 py-10 px-5 flex flex-col space-y-2 items-center rounded-xl shadow-primary shadow-2xl">
                <h1 class="text-4xl font-bold my-2 text-primary">{{$totalAlpineJsQuestions}}|{{$totalAlpineJsAnswers}}</h1>
                <p>AlpineJs Questions and Answers</p>
            </div>
            <div class="bg-gray-200 py-10 px-5 flex flex-col space-y-2 items-center rounded-xl shadow-primary shadow-2xl">
                <h1 class="text-4xl font-bold my-2 text-primary">{{$totalLaravelQuestions}}|{{$totalLaravelAnswers}}</h1>
                <p>Laravel Questions and Answers</p>
            </div>
            <div class="bg-gray-200 py-10 px-5 flex flex-col space-y-2 items-center rounded-xl shadow-primary shadow-2xl">
                <h1 class="text-4xl font-bold my-2 text-primary">{{$totalLivewireQuestions}}|{{$totalLivewireAnswers}}</h1>
                <p>Livewire Questions and Answers</p>
            </div>
        </div>
    </div>
@endsection
