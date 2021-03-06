<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales Input') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 m-2">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('sales.store') }}" class="needs-validation" novalidate="" id="sku-input-form">
                        @csrf
                        <div class="row">
                            <div class="w-1/3 mb-3">
                                <div class="my-1">
                                    <label for="quantity" class="w-1/2 col-form-label">
                                        {{ __('Quantity') }}
                                    </label>
                                    <div class="w-1/2 px-0">
                                        <input type="number" max="100000" min="1" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" />
                                    </div>
                                </div>
                                <div class="my-1">
                                    <label for="product" class="w-1/2 col-form-label">
                                        {{ __('Product') }}
                                    </label>
                                    <div class="w-1/2 px-0">
                                        <select class="form-control" id="product_id" name="product_id">
                                            @foreach($products as $product_id => $product_name)
                                                <option value="{{ $product_id }}" {{ old('product_id') == $product_id ? 'selected' : '' }}>{{ $product_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="w-1/2">
                                        <x-button class="text-sm leading-4 font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Save') }}
                                        </x-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
