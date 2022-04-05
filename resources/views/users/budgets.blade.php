@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 mt-6 rounded-lg text-center">
            <span class="font-bold">{{ auth()->user()->name }}</span> has not created any budgets yet. <br>
            <a href="{{ route('budgetForm') }}" class="underline">Create one now.</a>
        </div>
    </div>
@endsection()