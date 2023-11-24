<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a Payee') }}
        </h2>
    </x-slot>

    <h2 style="padding-top:50px;padding-bottom:25px;" class="font-semibold text-xl text-gray-800 leading-tight">
          <center> Add a Payee Account Number</center>
        </h2>
 

        <div class="container">
  <div class="row align-items-start">
  <div class="col" style="padding:5px;">
    </div>
  <div class="col" style="padding:5px;">

  @if(session('message'))

<div class="alert alert-success">{{ session('message')}}</div>

@endif
    
        <form style="background-color:white;padding:30px;border-radius:20px;box-shadow:5px 5px 10px 2px #aaaaaa;" action="accno">
        @csrf
        <div class="form-group" method="POST">
        <label for="acc">Payee Account No:</label>
        <input type="text" name="acc" class="form-control" required>
        </div>
        <button style="margin-top:30px" type="submit" class="">Submit</button>
        </form>
        
    </div>
    <div class="col" style="padding:5px;">
    </div>

  </div>



 


</x-app-layout>

</body>
</html>