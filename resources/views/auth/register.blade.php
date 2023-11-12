<x-guest-layout>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Profile') }}
        </h2><br>
   
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name*')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div><br>

        <div>
            <x-input-label for="number" :value="__('Phone Number')" />
            <x-text-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')"  autofocus />
            <x-input-error :messages="$errors->get('number')" class="mt-2" />
        </div><br>

        <div>
            <x-input-label for="address" :value="__('Address*')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"  required autofocus />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div><br>

        <div>
            <x-input-label for="country" :value="__('Country*')" />
            <select id="country" name="country" class="block mt-1 w-full" required>
                <option value="barbados" @if(old('country') === 'barbados') selected @endif>Barbados</option>
                <option value="trinidad" @if(old('country') === 'trinidad') selected @endif>Trinidad</option>
            </select>
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div><br>

        <div>
            <x-input-label for="nationalID" :value="__('National ID')" />
            <input id="nationalID" class="block mt-1 w-full" type="file" name="nationalID" accept="image/*"/>
            <x-input-error :messages="$errors->get('nationalID')" class="mt-2" />
        </div><br>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
