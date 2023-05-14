@extends('layouts.admin')
@section('content')
    <br>
    <a href="{{route('admin.books.create')}}" class="btn btn-add">Add book</a>
    <br>
    <table class="w-full whitespace-no-wrap pt-5">
        <thead>
        <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
        >
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Author</th>
            <th class="px-4 py-3">Category</th>
            <th class="px-4 py-3">Quantity</th>
            <th class="px-4 py-3">Price</th>
            <th class="px-4 py-3">Actions</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @foreach($books as $book)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                        <div>
                            <p class="font-semibold">{{$book->name}}</p>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">{{$book->author}}</td>
                <td class="px-4 py-3 text-sm">{{$book->category_name}}</td>
                <td class="px-4 py-3 text-sm">{{$book->quantity}}</td>
                <td class="px-4 py-3 text-sm">{{$book->price}}</td>
                <td class="px-4 py-3 text-sm">
                    <a href="{{route('admin.books.edit', $book->id)}}" class="table_btn">Details</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
