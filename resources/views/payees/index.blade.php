<x-app-layout>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      
    <h2 class="font-semibold text-xl text-gray-800 ">Payees</h2>
    <ul>
        @foreach($payees as $payee)
            <li>{{ $payee->name }} <br>({{ $payee->email }})</li><br>
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
