<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.pixabay.com/photo/2023/11/21/10/12/tea-8402876_1280.png">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-100 text-sm py-0.5 font-mono leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 2
                                </div>
                            </div>

                            <form method="POST" action="{{ route('reservations.store.step.two') }}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="table_id" class="block text-sm font-medium text-gray-700"> Table
                                    </label>
                                    <div class="mt-1">
                                        <select name="table_id" id="table_id"
                                            class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            @foreach ($tables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-6 flex justify-between">
                                    <a href="{{ route('reservations.step.one') }}"
                                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"
                                    >Previous</a>
                                    <button
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
