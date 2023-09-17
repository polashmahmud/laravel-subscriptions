<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Checkout') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="">
                        <div>
                            <x-input-label for="name" :value="__('Name of card')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="card" :value="__('Card details')" />
                            <div id="card-element"></div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                Pay
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        const strip = Stripe('{{ config('cashier.key') }}')
        const elements = strip.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');
    </script>
</x-app-layout>
