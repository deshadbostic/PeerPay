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
          <center> Please Select an Payee Adding Option.</center>
        </h2>

<table style="margin-top:20px;" class="table table-hover">

    <thead>

    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
      <th>Add Payee using Email.</th>

      <th> <a href="{{ url('addemail') }}" class="btn btn-primary" >Select</a></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </thead>

    <thead>


    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
      <th>Add Payee using Account number.</th>

      <th> <a href="{{ url('addaccount') }}" class="btn btn-primary" >Select</a></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>


    </thead>

</table>

 




</x-app-layout>

</body>
</html>