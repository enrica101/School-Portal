<x-layout>
    <div class="container">
    
        <div class="default" id="home">
            @auth
            <h1>Welcome {{auth()->user()->name}}! <h3>This is the Admin Portal</h3></h1><br>

            @else 
            <h1>Welcome to the Admin Portal</h1>
            @endauth
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button class="btn btn-program"><a href="/"> Get Started</a></button>
            
        </div>
    </div>
</x-layout>