<x-layout>
    <div class="container">
        <div class="login">
            <h1>Register for an Account</h1>
            <form method="POST" action="/users" class="default login">
                @csrf
                <label for="name">Name*</label>
                <input type="text" name="name" id="name" value='{{old('name')}}'>
                    @error('name')
                        <small>{{$message}}</small>
                    @enderror
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
                
                <label for="password_confirmation">Confirm Password*</label>
                <input type="password" name="password_confirmation" value='{{old('password_confirmation')}}'>
                    @error('password_confirmation')
                    <small>This has to match your password inputted above.</small>
                    @enderror
                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>
</x-layout>