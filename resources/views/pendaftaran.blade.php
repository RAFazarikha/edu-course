<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pendafaran Kursus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Siswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kursus
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $siswa)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $siswa['student_name'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $siswa->course->name ?? 'Tidak Terdaftar' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $siswa['enrollment_date'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $siswa['payment_status'] }}
                            </td>
                            <td class="px-6 py-4 text-right flex items-center space-x-2">
                                <form action="{{ url('hapus-siswa/' . $siswa['id']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-blue-600 hover:underline">Hapus</button>
                                </form>
                                <p> | </p>
                                <a href="edit-siswa/{{ $siswa['id'] }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="max-w-7xl mx-auto my-2 sm:px-6 lg:px-8 flex justify-end items-center space-x-4">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">
                    <a href="tambah-siswa">Pendaftaran Siswa</a>
                </button>
            </div> 
        </div>
    </div>
</x-app-layout>
