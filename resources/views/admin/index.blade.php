<?php //page ajouter
    use App\Models\User;
    
    $users = User::all();
    
    ?>

@include('headfoot/header')

<head>
    <title>Admin</title>
</head>

    <h1 >Menu ADMINISTRATEUR</h1><br>

    

<div >

<h2>User</h2><br>
<button class="button" style="color:orange"><a href="/admin/user/modifier"><div><h3>MODIFIER</h3></div></a></button>
<br><br>
<button class="button" style="color:red"><a href="/admin/user/supprimer"><div><h3>SUPPRIMER</h3></div></a></button><br>
</div>
<style>
.button {
  background-color:black;
  border: none;
  color: white;
  padding: 2px 5px;
  text-align: center;
  font-size: 16px;
  margin: 1px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
}
</style>




@include('headfoot/footer')
