@extends('layouts.admin')

@section('content')
<<<<<<< HEAD
    <header class="flex justify-between items-center mb-12">
        <div>
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white">Kelola Event</h1>
            <p class="text-slate-500 dark:text-slate-400 font-regular mt-2">Kelola dan atur semua acara Anda di sini</p>
        </div>
        <button
            class="px-6 py-3 bg-slate-900 hover:bg-slate-800 text-white rounded-xl font-semibold shadow-lg transition-all active:scale-95">
            + Tambah Event
        </button>
    </header>

    <div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
        <div class="px-8 py-6 bg-slate-50 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700 flex gap-4">
            <input type="text" placeholder="Cari nama event..."
                class="flex-1 px-5 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-500 dark:placeholder-slate-400 focus:ring-2 focus:ring-slate-900 dark:focus:ring-slate-500 outline-none transition">
            <select class="px-5 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white outline-none transition">
                <option>Semua Kategori</option>
                <option>Musik</option>
                <option>Workshop</option>
                <option>Olahraga</option>
=======
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Kelola Event</h1>
            <p class="text-slate-500 font-medium">Buat dan atur acara seru Anda di sini.</p>
        </div>
        <button
            class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
            + Tambah Event Baru
        </button>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
            <input type="text" placeholder="Cari nama event..."
                class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition">
            <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white outline-none">
                <option>Semua Kategori</option>
                <option>Musik</option>
                <option>Workshop</option>
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
            </select>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
<<<<<<< HEAD
                <thead class="bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-xs font-bold tracking-wide">
                    <tr>
                        <th class="px-8 py-5 w-16">No</th>
                        <th class="px-8 py-5">Poster</th>
                        <th class="px-8 py-5">Event</th>
                        <th class="px-8 py-5">Harga / Stok</th>
                        <th class="px-8 py-5">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800 transition">
                        <td class="px-8 py-5 font-semibold text-slate-500 dark:text-slate-400">1</td>
                        <td class="px-8 py-5">
                            <img src="{{ asset('assets/concert.png') }}" class="w-14 h-16 rounded-lg object-cover shadow-sm">
                        </td>
                        <td class="px-8 py-5">
                            <p class="font-bold text-slate-900 dark:text-white text-sm">Jazz Night 2024</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Musik • 16 Nov 2024</p>
                        </td>
                        <td class="px-8 py-5">
                            <p class="font-semibold text-slate-900 dark:text-white text-sm">Rp 150.000</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Stok: 42/100</p>
                        </td>
                        <td class="px-8 py-5">
                            <div class="flex gap-2">
                                <button title="Edit"
                                    class="p-2 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-900 dark:hover:bg-slate-600 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
=======
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-4 w-16">No</th>
                        <th class="px-8 py-4">Poster</th>
                        <th class="px-8 py-4">Event</th>
                        <th class="px-8 py-4">Harga / Stok</th>
                        <th class="px-8 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y border-t">
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">1</td>
                        <td class="px-8 py-6">
                            <img src="{{ asset('assets/concert.png') }}" class="w-16 h-20 rounded-xl object-cover shadow-sm">
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-black text-slate-800">Jazz Night 2024</p>
                            <p class="text-xs text-slate-400">Musik • 16 Nov 2024</p>
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-bold text-indigo-600">Rp 150.000</p>
                            <p class="text-xs text-slate-400">Stok: 42/100</p>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex gap-2">
                                <button
                                    class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button>
<<<<<<< HEAD
                                <button title="Hapus"
                                    class="p-2 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-red-600 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
=======
                                <button
                                    class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
<<<<<<< HEAD
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800 transition">
                        <td class="px-8 py-5 font-semibold text-slate-500 dark:text-slate-400">2</td>
                        <td class="px-8 py-5">
                            <img src="{{ asset('assets/workshop.png') }}" class="w-14 h-16 rounded-lg object-cover shadow-sm">
                        </td>
                        <td class="px-8 py-5">
                            <p class="font-bold text-slate-900 dark:text-white text-sm">AI & Future Workshop</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Tech • 26 Oct 2024</p>
                        </td>
                        <td class="px-8 py-5">
                            <p class="font-semibold text-slate-900 dark:text-white text-sm">Rp 50.000</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Stok: 12/50</p>
                        </td>
                        <td class="px-8 py-5">
                            <div class="flex gap-2">
                                <button title="Edit"
                                    class="p-2 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-900 dark:hover:bg-slate-600 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
=======
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">2</td>
                        <td class="px-8 py-6">
                            <img src="{{ asset('assets/workshop.png') }}" class="w-16 h-20 rounded-xl object-cover shadow-sm">
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-black text-slate-800">AI & Future Workshop</p>
                            <p class="text-xs text-slate-400">Tech • 26 Oct 2024</p>
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-bold text-indigo-600">Rp 50.000</p>
                            <p class="text-xs text-slate-400">Stok: 12/50</p>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex gap-2">
                                <button
                                    class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button>
<<<<<<< HEAD
                                <button title="Hapus"
                                    class="p-2 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-red-600 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
=======
                                <button
                                    class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
