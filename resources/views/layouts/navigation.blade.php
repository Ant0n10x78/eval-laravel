
@include('headfoot/header')
                    <x-slot name="content">
                        <!-- Authentication -->
                        <?php if(auth()->user()->value('email') == 'admin@admin.com'){
                        echo "<div align='center'><a href='/admin'>Menu Admin</a></div>" ;}
                        ?>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

    <h1 align="center">You're logged in!</h1>
    <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">Nom: {{ Auth::user()->name }} {{ Auth::user()->afterName}}</div>
                    <div class="font-medium text-sm text-gray-500">Date de naissance: {{ Auth::user()->birthDate}}</div>
                    <div class="font-medium text-sm text-gray-500">E-mail: {{ Auth::user()->email }}</div>

                </div>
            </div>
            


            <div class="mt-3 space-y-1">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

  <!-- Authentication -->
 <form method="POST" action="{{ route('logout') }}">
                    @csrf

               
<div align=center>
<button class="button" ><b>{{ __('Logout') }}</b></button>
</div> </form> 
<style>

.button {
  background-color:red;
  border-radius: 50px;
  color: gray;
  padding: 10px 22px;
  text-align: center;
  font-size: 17px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.5s;
  display: inline-block;
  text-decoration: none;

}

.button:hover {opacity: 2}
</style>
   
@include('headfoot/footer')

