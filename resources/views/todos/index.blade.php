<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Todo List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            {{-- Form tambah todo --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <form action="/todos" method="POST" class="flex gap-3">
                    @csrf
                    <input
                        type="text"
                        name="title"
                        placeholder="Tambah todo baru..."
                        required
                        class="flex-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        Tambah
                    </button>
                </form>
            </div>

            {{-- List todo --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg divide-y">
                @forelse($todos as $todo)
                <div class="p-4 flex items-center justify-between">
                    <span class="{{ $todo->is_done ? 'line-through text-gray-400' : 'text-gray-800' }}">
                        {{ $todo->title }}
                    </span>
                    <div class="flex gap-2">
                        <form action="/todos/{{ $todo->id }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="{{ $todo->is_done ? 'bg-gray-400' : 'bg-green-500' }} text-white px-3 py-1 rounded-lg text-sm hover:opacity-80">
                                {{ $todo->is_done ? 'Batal' : 'Selesai' }}
                            </button>
                        </form>
                        <form action="/todos/{{ $todo->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="p-6 text-center text-gray-400">
                    Belum ada todo. Tambah sekarang!
                </div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>