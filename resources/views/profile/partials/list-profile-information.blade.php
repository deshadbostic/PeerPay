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
    
    </section>