<div id="delete_modal" class="modal hidden fixed inset-0 z-50 overflow-auto flex items-center justify-center">
    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75 z-10"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-20 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <div class="flex justify-between items-center pb-3">
                <button class="modal-close" onclick="closeModal()">
                    &times;
                </button>
            </div>

            <div class="my-5">
                <form id="delete_form" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="mb-4">
                        <h2 class="text-xl ">Are you sure you want to delete <span id="store_name" class="font-bold"></span>?</h2>
                    </div>

                    <div class="flex justify-center mt-6">
                        <button type="button" onclick="closeModal()" class="modal-close bg-red-500 hover:bg-red-700 text-white mx-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Cancel
                        </button>
                        <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white mx-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Confirm
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>