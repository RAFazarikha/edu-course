<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-5 shadow-sm sm:rounded-lg">
                <form action="{{ route('edit-siswa.simpan', $data->id) }}"  method="POST" class="mx-auto">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="student_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Siswa</label>
                        <input type="text" name="student_name" id="student_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Siswa" value="{{ $data->student_name }}" required />
                    </div>
                    <div class="mb-6">
                        <label for="course_id" class="block mb-2 text-sm font-medium text-gray-900">Nama Kursus</label>
                        <select id="course_id" name="course_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>Nama Kursus</option>
                            @foreach($course as $kursus)
                                @if($kursus['status'] == 0)
                                    @if($kursus['id'] == $data->course_id)
                                        <option value="{{ $kursus['id'] }}" selected>{{ $kursus['name'] }}</option>
                                    @else
                                        <option value="{{ $kursus['id'] }}">{{ $kursus['name'] }}</option>
                                        <input type="hidden" name="student_count" value="{{ $kursus['student_count'] }}" />
                                    @endif
                                @else
                                    <option value="{{ $kursus['id'] }}" disabled>{{ $kursus['name'] }} (Tidak Aktif)</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Daftar</label>
                        <input type="date" name="date" id="date" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 disabled-input" value="{{ $data->enrollment_date }}" required disabled />
                        <input type="hidden" name="enrollment_date" value="{{ $data->enrollment_date }}" />
                    </div>
                    <div class="mb-6">
                        <label for="payment_status" class="block mb-2 text-sm font-medium text-gray-900">Status Pembayaran</label>
                        <select id="payment_status" name="payment_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @if($data->payment_status == 'Lunas')
                                <option>Status Pembayaran</option>
                                <option value="Lunas" selected>Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            @else
                                <option>Status Pembayaran</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas" selected>Belum Lunas</option>
                            @endif
                        </select>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
