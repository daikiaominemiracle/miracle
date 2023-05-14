@extends('layouts.admin')

@section('content')
    <br>
    <a href="{{route('admin.categories.create')}}" class="btn btn-add">Add category</a>
    <br>

    <table class="w-full whitespace-no-wrap pt-5">
        <thead>
        <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
        >
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Actions</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @foreach($categories as $category)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    <p class="font-semibold">{{$category->name}}</p>
                </td>
                <td class="px-4 py-3">
                    <a href="{{route('admin.categories.edit', $category->id)}}" class="table_btn">Details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
