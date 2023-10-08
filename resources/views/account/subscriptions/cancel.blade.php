<x-account-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form action="{{ route('account.subscriptions.cancel') }}" method="POST">
                @csrf
                <x-primary-button class="ml-3">
                    {{ __('Cancel') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-account-layout>
