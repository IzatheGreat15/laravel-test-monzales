<div id="form_modal" class="modal hidden fixed inset-0 z-50 overflow-auto flex items-center justify-center">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75 z-10"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-20 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold"><span id="mode"></span> Store</p>
                <button class="modal-close" onclick="closeModal()">
                    &times;
                </button>
            </div>

            <div class="my-5">
                <form id="store_form" method="POST">
                    @csrf
                    {{-- form will be used for both store and update functions --}}
                    <input type="hidden" name="_method" id="method_input" value="POST">

                    {{-- Store Title --}}
                    <div class="mb-4">
                        <label for="store_title" class="block text-gray-700 text-sm font-bold mb-2">Store Title</label>
                        <input type="text" name="store_title" id="store_title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    {{-- Store Description --}}
                    <div class="mb-4">
                        <label for="store_description" class="block text-gray-700 text-sm font-bold mb-2">Store Description</label>
                        <textarea name="store_description" id="store_description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>

                    {{-- Buttons --}}
                    <div class="flex justify-center mt-6">
                        <button type="button" onclick="closeModal()" class="modal-close bg-red-500 hover:bg-red-700 text-white mx-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Cancel
                        </button>
                        <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white mx-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>