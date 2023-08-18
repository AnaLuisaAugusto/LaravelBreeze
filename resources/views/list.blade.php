<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
              <!-- table -->
              <div class="overflow-x-auto overflow-y-hidden rounded-lg border border-gray-200 shadow-md m-5">
                  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nome</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Endereço</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Bairro</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CEP</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cidade</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Estado</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @foreach($clientes as $cliente)
                            <tr>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->nome}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->endereco}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->bairro}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->cep}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->cidade}} </td>
                            <td class="border px-4 py-2" id="client-data-state"> {{$cliente->estado}} </td>
                            

                            <td class="border-0 px-4 py-2" id="client-data">
                                <a href="{{url("/edit/$cliente->id")}}"> <ion-icon name="create-outline" id="client-op-icon-edit"></ion-icon> </a>
                            </td>
                            <td class="border-0 px-4 py-2" id="client-data">
                                <a href="{{url("/excluir/$cliente->id")}}"> <ion-icon name="trash-bin-outline" id="client-op-icon-trash"></ion-icon> </a>
                            </td>
                            
                    
                        <!-- imgs -->
                        <td class="px-6 py-4">
                          <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'Delete' }" href="{{url("/excluir/$cliente->id")}}">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                                x-tooltip="tooltip"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                />
                              </svg>
                            </a>
                            <a x-data="{ tooltip: 'Edite' }" href="{{url("/editar/$cliente->id")}}">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                                x-tooltip="tooltip"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                />
                              </svg>
                            </a>
                          </div>
                        </td>
                        
                        </tr>
                            @endforeach
                   
                    </tbody>
                  </table>
                </div>
                <!-- fim table -->

                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
