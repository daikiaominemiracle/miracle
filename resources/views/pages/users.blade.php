@extends('layouts.admin')
@section('content')
    <br>
    <table class="w-full whitespace-no-wrap pt-5">
        <thead>
        <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
        >
            <th class="px-4 py-3">Client</th>
            <th class="px-4 py-3">Email</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Date</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @foreach($users as $user)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                        <div>
                            <p class="font-semibold">{{$user->name}}</p>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">{{$user->email}}</td>
                <td class="px-4 py-3 text-xs">

                  @if($user->is_admin )
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            Admin
                        </span>
                    @elseif($user->is_manager)
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            Manager
                        </span>
                    @else
                        <span class="px-2 py-1 font-semibold leading-tight text-red-900 bg-red-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            Client
                        </span>
                    @endif


                </span>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{$user->created_at}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
