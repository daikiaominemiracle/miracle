@extends('layouts.admin')

@section('content')
    <br>
    <br>
    <div>
        <form action="{{route('admin.books.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Book name
                </label>
                <input name="name" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-2" for="name">
                    Author
                </label>
                <input name="author" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-2" for="name">
                    Description
                </label>
                <textarea name="description" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"></textarea>

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-2" for="name">
                    Select category
                </label>
                <select required name="category_id" id="category_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-2" for="name">
                    Image
                </label>
                <input name="image" accept="image/jpeg,image/gif,image/png,image/x-eps" type="file" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @error('image')
                <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-2" for="name">
                    Quantity
                </label>
                <input name="quantity" type="number" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-2" for="name">
                    Price
                </label>
                <input name="price" type="number" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">


                <div class="flex flex-wrap">
                    <button  type="submit"  class="btn btn-add mt-4">Add book</button>
                    <a href="{{ URL::previous() }}" class="btn btn-cancel mt-4 ml-3">Cancel</a>
                </div>
            </div>

        </form>
    </div>
@endsection
