<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-9">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center items-center min-h-screen">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-md" style="width: 70%;">
                    <div class="p-8 text-gray-900">
        
                        <!--Form Cadastro-->                          
                        <form class="w-full max-w lg" action="{{url('/store')}}" method="POST">
                            @csrf
                            <h3 class="font-semibold text-xl text-gray-800">
                                {{ __('Formulário') }}
                            </h3>
                            <hr>
                            <div class="border-b border-gray-900/10 pb-12">
                                <p class="mt-1 text-sm leading-6 text-gray-600">Preencha os campos abaixo com os seus dados:</p>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                                        <div class="mt-2">
                                            <input type="text" name="nome" id="name" autocomplete="given-name" class="text center block w-full py-1.5 p-2 border border-gray-300 rounded-md shadow-md focus:border-green-500">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Endereço</label>
                                        <div class="mt-2">
                                            <input type="text" name="endereco" id="address" autocomplete="street-address" class="block w-full py-1.5 p-2 border border-gray-300 rounded-md shadow-md focus:border-green-500">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2 sm:col-start-1">
                                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Bairro</label>
                                        <div class="mt-2">
                                            <input type="text" name="bairro" id="bairro" autocomplete="address-level2" class="block w-full py-1.5 p-2 border border-gray-300 rounded-md shadow-md focus:border-green-500">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">CEP</label>
                                        <div class="mt-2">
                                            <input type="text" name="cep" id="postal-code" class="block w-full py-1.5 p-2 border border-gray-300 rounded-md shadow-md focus:border-green-500">
                                        </div>
                                    </div>
                                
                                    <div class="sm:col-span-2 sm:col-start-1">
                                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Cidade</label>
                                        <div class="mt-2">
                                            <input type="text" name="cidade" id="city" class="block w-full py-1.5 p-2 shadow-md-green border border-gray-300 rounded-md shadow-md focus:border-green-500">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2"> 
                                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                        <div class="mt-2">
                                        <select id="state" name="estado" class="block w-full py-1.5 p-2 border border-gray-300 rounded-md shadow-md focus:border-green-500">
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option value="MG">MG</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        <button id="btn-cadastrar" type="submit" class="bg-green-500 hover:bg-green-400 text-white font-bold py-1.5 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">Cadastrar</button>         
                        </form>   
                        <!-- Fim do form -->      
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

