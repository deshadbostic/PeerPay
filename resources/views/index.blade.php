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
            {{ __('Transfer Funds to a Payee') }}
        </h2>
    </x-slot>


<table class="table table-hover">

    <thead>

      <th><center>Name</center></th>

      <th><center>Email</center></th>

      <th><center>Select</center></th>

    </thead>

    <tbody>

@foreach($payees as $payee)

 @if(auth()->user()->id == $payee->user_id )


        <tr>

        <td><center>{{$users->find($payee->payee_id)->name}}</center> </td>

        <td><center>{{$users->find($payee->payee_id)->email}}</center> </td>

          <td>
          <center> <a href="{{ url('payees/'.$payee->payee_id) }}" class="btn btn-primary" >Select</center></a>
          </td>

        </tr>
        


@endif

@endforeach


</tbody>
</table>






</x-app-layout>

</body>
</html>