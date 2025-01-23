<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kursus Dengan Upload File') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-5 shadow-sm sm:rounded-lg">
                <form action="">
                    @csrf
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file" accept=".xlsx" required />
                    <p class="mt-1 text-sm text-gray-500" id="file_input_help">.xlsx (MAX. 1 MB)</p>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mt-3 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
