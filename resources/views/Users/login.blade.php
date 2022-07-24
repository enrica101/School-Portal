<x-layout>
    <div class="container">
        <div class="login">
            <h1>Log into your Account</h1>
            <form method="POST" action="/users/authenticate" class="default login">
                @csrf
                
                <label for="email">Email Address*</label>
                <input type="email" name="email" id="email" value='{{old('email')}}'>
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror

                <label for="password">Password*</label>
                <input type="password" name="password" id="password" value='{{old('password')}}'>
                    @error('password')
                    <small>{{$message}}</small>
                    @enderror
                <input type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </div>
    </div>
</x-layout>