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
                                    class="w-40 text-sm py-0.5 font-mono leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 1
                                </div>
                            </div>

                            <form method="POST" action="{{ route('reservations.store.step.one') }}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="first_name" name="first_name"
                                            value="{{ $reservation->first_name ?? '' }}"
                                            class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('first_name') border-red-500 @enderror" />
                                    </div>
                                    @error('first_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="last_name" name="last_name"
                                            value="{{ $reservation->last_name ?? '' }}"
                                            class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('last_name') border-red-500 @enderror" />
                                    </div>
                                    @error('last_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700"> Email
                                    </label>
                                    <div class="mt-1">
                                        <input type="email" id="email" name="email" value="{{ $reservation->email ?? '' }}"
                                            class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />
                                    </div>
                                    @error('email')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="tel_number" class="block text-sm font-medium text-gray-700"> Phone
                                    </label>
                                    <div class="mt-1">
                                        <input type="number" id="tel_number" name="tel_number"
                                            value="{{ $reservation->tel_number ?? '' }}"
                                            class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('tel_number') border-red-500 @enderror" />
                                    </div>
                                    @error('tel_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="res_date" class="block text-sm font-medium text-gray-700"> Phone
                                    </label>
                                    <div class="mt-1">
                                        <input type="datetime-local" id="res_date" name="res_date" min="{{ $min_date->format('m-d-Y\TH:i:s') }}" max="{{ $max_date->format('m-d-Y\TH:i:s') }}"
                                            value="{{ $reservation->res_date ?? '' }}"
                                            class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('res_date') border-red-500 @enderror" />
                                    </div>
                                    @error('res_date')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest
                                        number
                                    </label>
                                    <div class="mt-1">
                                        <div class="mt-1">
                                            <input type="number" id="guest_number" name="guest_number"
                                                value="{{ $reservation->guest_number  ?? '' }}"
                                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('guest_number') border-red-500 @enderror" />
                                        </div>
                                        @error('guest_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <button
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
