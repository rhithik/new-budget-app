@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="lg:w-5/12 w-8/12 p-6 bg-white rounded-lg mt-6">
            @if(session('status'))
                <div class="p-4 mb-6 text-center text-white bg-red-500 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email address" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror value="{{ old('email') }}"">

                    @error('email')
                        <div class="mt-2 text-sm text-red-500">
                            {{$message}}
                         </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">

                    @error('password')
                        <div class="mt-2 text-sm text-red-500">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>

                <div>
                    <button type="submit" class="w-full px-4 py-3 mt-4 font-medium text-white bg-blue-500 rounded">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection()