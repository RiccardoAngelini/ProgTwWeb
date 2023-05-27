@extends('layouts.admin')
@section('content')

<div class="crud-staff-header">
     <h1> LISTA MEMBRI STAFF </h1>
    </div>

    <div class="crud-staff-create">  <a class="creat" href="{{route('admin.newStaff')}}">Aggiungi un membro</a> </div>
    <div class="crud-staff-body">
    <table>
    @if (session('status'))
    <div class="alert alert-success" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
     {{ session('status') }}
    </div>
 @endif
@if (session('error'))
   <div class="alert alert-success" role="alert" style="display:flex; justify-content:center;margin-left:260px;">
     {{ session('error') }}
   </div>
@endif



    <thead>
        <tr>
            <th>Staff_id</th>
            <th>Nome</th> 
            <th>Cognome</th>
            <th>Genere</th>  
            <th>Età</th>
            <th>Telefono</th>    
            <th>Email</th>  
            <th style="width: 40px">Modifica</th>
            <th style="width: 40px">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($staffs as $staff)
        <tr> 
            <td>{{$staff->id}}</td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->surname}}</td>
            <td>{{$staff->gender}}</td>
            <td>{{$staff->age}}</td>
            <td>{{$staff->phone}}</td>
            <td>{{$staff->email}}</td>
             <td><a class="btn1" href="{{route('admin.modStaff', [$staff->id])}}">Modifica</a></td> 
             <form action="{{route('admin.deleteStaff')}}" method="post">
               <td> <button class="btn3" name="staff_ids[]" value="{{ $staff->id }}" type="submit">Cancella</button> </td> 
                @csrf
                @method('delete')
             </form>
                    </tr>  
        @endforeach 
    </tbody>
</div>
    </div>
</table>
    @endsection
<style>

.crud-staff-header{
 padding-top: 100px; 
 padding-bottom: 10px;
text-align: center;

}
.crud-staff-create{
    margin-left: 17%; 
    font-size:20px; 
    margin-top:50px; 
    text-decoration:none;
    padding-top: 30px;
    padding-right: 30px;
    text-align: right;

}

.crud-staff-body{
    text-align: right;
    margin-left: 30px;
    padding-left: 50px; 
}

</style>