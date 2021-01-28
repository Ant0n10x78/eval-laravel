<?php 
     use App\Models\User;
    
     $users = User::all();
?>
<h1>Supprimer user</h1>

@foreach($users as $user)
<form method="POST">
    @csrf
    <p>Prenom : {{$user->name}}</p>
    <p>Email : {{$user->email}}</p>
    <!-- Si on veut le mdp <p>Password : {{$user->password}}</p>-->
    <button type="submit">SUPPRIMER</button>
</form>
@endforeach