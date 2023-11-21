<x-app-layout>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      
    <h2 class="font-semibold text-xl text-gray-800 ">Payees</h2>
    <ul>
        @foreach($payees as $payee)
            <li>{{ $payee->name }} <br>({{ $payee->email }})</li><br>
            <div>
                <x-dropdown>
                    <x-slot name="trigger">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <form method="POST" action="{{ route('payee.destroy', $payee) }}">
                            @csrf
                            @method('delete')
                            <x-dropdown-link :href="route('payee.destroy', $payee)"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Delete') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @endforeach
    </ul>
    <br><br>
    <h2 class="font-semibold text-xl text-gray-800 ">Add a Payee</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <form method="POST" action="{{ route('payees.store') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4"> 
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="name" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <!-- Account Number -->
            <div class="mt-4"> 
                <x-input-label for="payee_accountNumber" :value="__('Payee Account Number')" />
                <x-text-input id="payee_accountNumber" class="block mt-1 w-full" type="text" name="payee_accountNumber" :value="old('payee_accountNumber')" required  />
                <x-input-error :messages="$errors->get('payee_accountNumber')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Add') }}
                </x-primary-button>
            </div>
        </form>
    </div>


</x-app-layout>
