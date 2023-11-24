<?php
use App\Models\User
?>

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
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <table class="table table-hover">

    <thead>


      <th><center>Your Balance:</center></th>


    </thead>

    <tbody>

        <tr>
 

          <td class="text-success"><center>${{auth()->user()->account}}</center></td>

          
        </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="container">
  <div class="row align-items-start">
  <div class="col" style="padding:10px;">
    </div>
  <div class="col" style="padding:10px;">
    </div>
    <div class="col" style="padding:15px;">
    <center> <a href="{{ url('addpayee') }}" style="padding:10px 50px 10px 50px;" class="btn btn-primary" >Add a Payee</center></a>
    </div>
    <div class="col" style="padding:15px;">
    <center> <a href="{{ url('payees/') }}" style="padding:10px 50px 10px 50px;" class="btn btn-primary" >Make a Transfer</center></a>
    </div>
    <div class="col" style="padding:10px;">
    </div>
    <div class="col" style="padding:10px;">
    </div>
  </div>

  <div class="container">
  <div class="row align-items-start">
    <div class="col" style="padding:20px;">
    <center> <a href="{{ url('history/') }}" style="text-align:right;padding:10px 60px 10px 60px;" class="btn btn-primary" >View History</center></a>
    </div>
  </div>



</x-app-layout>

</body>
</html>