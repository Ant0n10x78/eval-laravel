<?php 
     use App\Models\User;
    
     $users = User::all();
?>
<h1>MODIFIER User</h1>

@foreach($users as $user)
<form method="POST">
    @csrf
    <p>Nom : </p>
    <input type="text" value="{{$user->name}}"/>

    <p>Email :</p>
    <input type="text" value="{{$user->email}}"/>
    <button type="submit">MODIFIER</button>
</form>
@endforeach