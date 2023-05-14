@extends('layouts.admin')

@section('content')
    <br>
    <br>
    <div>
        <form action="{{ route('admin.categories.update' , ['id' => request()->route('id')]) }}" method="POST">
            @csrf
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"  for="name">
                    Category name
                </label>
                <input name="name" value="{{$category->name}}" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Ботаника">
                <div class="flex flex-wrap">
                    <button type="submit" class="btn btn-add mt-4">Edit category</button>
                    <a href="{{ URL::previous() }}" class="btn btn-cancel mt-4 ml-3">Cancel</a>
                </div>
            </div>

        </form>
    </div>
@endsection
