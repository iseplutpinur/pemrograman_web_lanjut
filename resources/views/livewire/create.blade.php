<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div
      class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
      role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="">
            <div class="mb-4">
              <label for="emp_id" class="block text-gray-700 text-sm font-bold mb-2">Employee ID</label>
              <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="emp_id" placeholder="Enter Employee ID" wire:model="emp_id">
              @error('emp_id') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
              <label for="emp_name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
              <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="emp_name" placeholder="Enter Name" wire:model="emp_name">
              @error('emp_name') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
              <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
              <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="position" placeholder="Enter Position" wire:model="position">
              @error('position') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
              <label for="emp_email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
              <input type="email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="emp_email" placeholder="Enter Email" wire:model="emp_email">
              @error('emp_email') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
              <label for="emp_phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
              <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="emp_phone" placeholder="Enter Phone Number" wire:model="emp_phone">
              @error('emp_phone') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
              <label for="emp_address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
              <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="emp_address" wire:model="emp_address" placeholder="Enter Address"></textarea>
              @error('emp_address') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
            <button wire:click.prevent="store()" type="button"
              class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Store
            </button>
          </span>
          <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            <button wire:click="closeModalPopover()" type="button"
              class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Close
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>