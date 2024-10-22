@include('partials.header')

<form method="POST" action="/customers/store" enctype="multipart/form-data" style="border:1px solid #ccc">
    @csrf
    <div class="container">
        <h1 style="color: #41597a;  font-family:Playfair Display">Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Your Name" id="name" name="name" required>
        @if ($errors->has('name'))
            <span class="text-danger">
                {{ $errors->first('name') }}</span>
        @endif

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" id="email" name="email" required>


        <label for="phone"><b>Phone Number</b></label>
        <input type="tel" id="phone" placeholder="Enter Your Phone Number" id="phone" name="phone"
            required />


        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Your Address" id="address" name="address" required>

        <label for="gender"><b>Gender</b></label>
        <input type="radio" name="gender" id="gender" value="Male"><label> Male</label>
        <input type="radio" name="gender" id="gender" value="Female"><label> Female</label><br>


        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required>

        <label for="password"><b>Repeat Password</b></label>
        <input type="password" name="password_confirmation" required>



        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signupbtn" >Sign Up</a>
            <button type="button" class="cancelbtn">Cancel</button>

        </div>
    </div>
</form>

@include('partials.footer')
