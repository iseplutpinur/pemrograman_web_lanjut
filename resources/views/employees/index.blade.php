<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Employees') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <a href="{{ route('employees.create') }}">
            <x-button class="mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              {{ __('Add Employee') }}
            </x-button>
          </a>

          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Emp. Id
                        </th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Name
                        </th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Position
                        </th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Email
                        </th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Phone
                        </th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Address
                        </th>
                        <th colspan="2">

                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($employees as $employee )

                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $employee->emp_id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $employee->emp_name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $employee->position }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $employee->emp_email }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $employee->emp_phone }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $employee->emp_address }}
                        </td>
                        <td>
                          <a href="{{ route('employees.show', $employee->id) }}">
                            <x-button>
                              {{ __('Show') }}
                            </x-button>
                          </a>
                          <a href="{{ route('employees.edit', $employee->id) }}">
                            <x-button
                              class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 mx-2 rounded inline-block">
                              {{ __('Edit') }}
                            </x-button>
                          </a>

                          <form class="inline-block" method="POST" action="{{ url('employees', $employee->id ) }}">
                            @csrf
                            @method('DELETE')

                            <x-button
                              class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded inline-block"
                              onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              {{ __('Delete') }}
                            </x-button>
                          </form>

                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>