@extends('layouts.app')

@section('content')
    <x-navbar />
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-4">
        <button id="showModalButton" onclick="openFormModal(0, -1)" class="bg-slate-900 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            + Add Store
        </button>
        

        <div class="overflow-x-visible mt-8 box-border">
            <div class="min-w-screen w-full h-full">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-2" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-2" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">>{{ session('error') }}</span>
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-2" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ $error }}</span>
                    </div>
                @endforeach

                
                <div class="bg-white shadow-md overflow-y-auto h-full">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Title</th>
                                <th scope="col" class="px-5 py-3 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-5 py-3 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date Added</th>
                                <th scope="col" class="px-5 py-3 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- if stores is more than one --}}
                            @foreach ($stores as $store)
                                <tr class="cursor-pointer">
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm title-cell">{{ $store->title }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm description-cell text-ellipsis">{{ Str::limit($store->description, 50, '...') }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $store->created_at }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <button class="text-blue-500 hover:text-blue-700 mr-3" onclick="window.location='{{ route('show', $store->id) }}';">View</button>
                                        <button class="text-green-500 hover:text-green-700 mr-3" onclick="openFormModal(1, {{ $loop->iteration }}, {{ $store->id }}, '{{ $store->description }}');">Edit</button>
                                        <button class="text-red-500 hover:text-red-700" onclick="openDeleteModal({{ $loop->iteration }}, {{ $store->id }});">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- if there are no stores --}}
                            @if ($stores->isEmpty())
                                <tr>
                                    <td colspan="4" class="px-5 py-5 bg-white text-sm text-center">
                                        No stores available.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="w-full flex justify-center items-center mt-4">
                    {{ $stores->links('components.pagination') }}
                </div>
            </div>
        </div>  

        <x-form-modal/>
        <x-delete-modal/>
    </section>

    <script>
        function openFormModal(mode, row, storeId, storeDescription){
            const modal = document.getElementById('form_modal');
            modal.style.display = 'flex';

            row--;

            const title = document.getElementById('mode');

            const storeForm = document.getElementById('store_form');
            const titleInput = document.getElementById('store_title');
            const descriptionInput = document.getElementById('store_description');
            const methodInput = document.getElementById('method_input');

            if(mode === 0){
                // for creating a store
                title.innerHTML = "Add";
                methodInput.value = "POST";
                storeForm.action = "{{ route('store') }}";
            }else if(mode === 1){
                // for updating a store
                title.innerHTML = "Edit";
                methodInput.value = "PATCH";
                storeForm.action = "{{ route('update', ['id' => ':id']) }}".replace(':id', storeId);

                const tableRows = document.querySelectorAll('tbody tr');
                // populate input fields
                if(tableRows.length > 0){
                    const rowIndx = tableRows[row];

                    const title = rowIndx.querySelector('.title-cell').innerHTML;
                    const description = storeDescription;
                    
                    titleInput.value = title;
                    descriptionInput.value = description;
                    idInput.value = id;
                }
            }
            
        }

        function openDeleteModal(e, row, storeId){
            const modal = document.getElementById('delete_modal');
            modal.style.display = 'flex';

            row--;

            const storeForm = document.getElementById('delete_form');
            storeForm.action = "{{ route('delete', '') }}/" + storeId;

            const tableRows = document.querySelectorAll('tbody tr');
            if(tableRows.length > 0){
                const rowIndx = tableRows[row];
                const title = rowIndx.querySelector('.title-cell').innerHTML;
                
                const titleSpan = document.getElementById('store_name');

                titleSpan.innerHTML = title;
            }
        }

        function closeModal() {
            const modals = document.getElementsByClassName('modal');
            for (const modal of modals) {
                modal.style.display = 'none';
            }
        }
    </script>
    
@endsection
