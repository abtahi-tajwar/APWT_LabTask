<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body style="background-color: rgb(216, 219, 221);">

    <div class="container rounded-3 bg-light mt-5 p-4 shadow " style="width: 500px">

        <h1 class=" text-secondary text-center fw-bold mb-5 ">Register</h1>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <!-- Full Name section -->
            <div class="mx-5 my- ">
                <label for="fullname" class="form-label fw-bold ">Full Name:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-signature"></i></span>
                    <input type="text" class="form-control rounded-end " name="fullname" id="fullname" placeholder="Type your fullname ">
                </div>
            </div>
            @error('fullname')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- Username section -->
            <div class="mx-5 my- ">
                <label for="username" class="form-label fw-bold ">Username:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-user "></i></span>
                    <input type="text" class="form-control rounded-end " name="username" id="username" placeholder="Type your Username ">
                </div>
            </div>
            @error('username')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- Email section -->
            <div class="mx-5 my-4 ">
                <label for="email" class="form-label fw-bold ">Email:</label>
                <div class="input-group">
                    <span class="input-group-text"> <i class="fas fa-envelope-open-text"></i></span>
                    <input type="text" class="form-control rounded-end " name="email" id="email" placeholder="Type your Email ">
                    <div class="valid-feedback ">
                        Looks good!
                    </div>
                </div>
            </div>
            @error('email')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- Password section -->
            <div class="mx-5 my-4">
                <label for="password" class="form-label fw-bold ">Password:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-key "></i></span>
                    <input type="password" class="form-control rounded-end " name="password" id="password" placeholder="Type your Password ">
                </div>
            </div>
            @error('password')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- Confirm Password section -->
            <div class="mx-5 my-4">
                <label for="password_confirmation" class="form-label fw-bold ">Password:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-key "></i></span>
                    <input type="password" class="form-control rounded-end " name="password_confirmation" id="password_confirmation" placeholder="Type your Password Again">
                </div>
            </div>
            @error('password_confirmation')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- City section -->
            <div class="mx-5 my-4">
                <label for="city" class="form-label fw-bold ">City:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-city"></i></span>
                    <input type="text" class="form-control rounded-end " name="city" id="city" placeholder="Type your city ">
                </div>
            </div>
            @error('city')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- Coutnry section -->
            <div class="mx-5 my-4">
                <label for="country" class="form-label fw-bold ">country:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-flag"></i></span>
                    <input type="text" class="form-control rounded-end " name="country" id="country" placeholder="Type your country ">
                </div>
            </div>
            @error('country')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            <!-- phone section -->
            <div class="mx-5 my-4">
                <label for="phone" class="form-label fw-bold ">phone:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-phone"></i></span>
                    <input type="number" class="form-control rounded-end " name="phone" id="phone" placeholder="Type your phone ">
                </div>
            </div>
            @error('phone')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <!-- company_name section -->
            <div class="mx-5 my-4">
                <label for="company_name" class="form-label fw-bold ">company_name:</label>
                <div class="input-group ">
                    <span class="input-group-text "> <i class="fas fa-building"></i></span>
                    <input type="text" class="form-control rounded-end " name="company_name" id="company_name" placeholder="Type your company_name ">
                </div>
            </div>
            @error('company_name')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
            @enderror
            @if(session()->has('error'))   
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif

            <div class="text-end mx-5 my-3 ">
                <a class="link-danger " href="forget-pass ">Forgot Password?</a>
            </div>
            <!-- Login -->
            <div class="d-flex justify-content-center my-2 ">
                <button type="submit " class="btn btn-lg btn-primary px-sm-4 ">Register</button>
            </div>

            <div class="text-start mx-5 my-3 ">
                <a class="link-info " href="/registration">Not registered yet?</a>
            </div>
            <!-- Login with Oauth 2 -->
            <div class="text-center mx-5 my-3 ">
                <h6 class="text-muted ">Or, Loging using</h5>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#"><img class="mx-4 my-3" src="https://img.icons8.com/fluent/50/000000/google-logo.png" /></a>
                <a href="#"><img class="mx-4 my-3" src="https://img.icons8.com/color/50/000000/facebook-new.png" /></a>

            </div>
        </form>


    </div>





























    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js " integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js " integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT " crossorigin="anonymous "></script>


</body>

</html>
