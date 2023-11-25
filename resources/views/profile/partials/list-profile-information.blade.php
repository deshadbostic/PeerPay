<section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2><br>
</header>
        <p class="text-md font-medium text-gray-900">
            {{ __('Name: ' )}} {{ auth()->user()->name}}
</p>
        <p class="text-md font-medium text-gray-900">
            {{ __('Email: ' )}} {{ auth()->user()->email}}
</p> 

<p class="text-md font-medium text-gray-900">
            {{ __('Number: ' )}} {{ auth()->user()->phone}}
</p> 
<p class="text-md font-medium text-gray-900">
            {{ __('Address: ' )}} {{ auth()->user()->address}}
</p> 
<p class="text-md font-medium text-gray-900">
    {{ __('Country: ') }} {{ ucfirst(auth()->user()->country) }}
</p>

    
    </section>