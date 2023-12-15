<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflowhidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray100">
                <x-primary-button tag="a" href="{{route('book.create')}}">Tambah Data Buku</x-primary-button>
                    <br /><br />
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tahun</th>
                                <th>Penerbit</th>
                                <th>Kota</th>
                                <th>Cover</th>
                                <th>quantity</th>
                                <th>kode Rak</th>
                                <th>Aksi</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $num++ }} </td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->city }}</td>
                            <td>
                                <img src="{{ asset('storage/cover_buku/'.$book->cover) }}" width="100px" />
                            </td>
                            <td>{{ $book->quantity }}</td>
                            <td>{{ $book->bookshelf->code }}-{{ $book->bookshelf->name }}</td>
                            <td>
                                <x-primary-button tag="a" href="{{route('book.edit', $book->id)}}">Edit</x-primary-button>
                            </td>
                            
                        </tr>
                        @endforeach 
                        <!-- --}} -->
                    </x-table>

                  
                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>