<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Add
                    New
                </a>
            </div>
            <div class="flex flex-col">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-200 dark:text-gray-500">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Guest
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Location
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tables as $table)
                            <tr class="bg-white border-b dark:bg-gray-600 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">
                                    {{ $table->name }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">
                                    {{ $table->guest_number }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">
                                    {{ $table->status }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">
                                    {{ $table->location }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.tables.edit',$table->id) }}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                            Edit
                                        </a>
                                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" method="POST"
                                            action="{{ route( 'admin.tables.destroy', $table->id ) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
