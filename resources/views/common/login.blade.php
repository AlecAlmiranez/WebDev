<!DOCTYPE html>
<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class = "alert alert-danger" role = "alert">
            {{$error}}
        </div>
        @endforeach
    @endif
    <form action ="{{route('login.submit')}}" method="POST">
        @csrf
    <div class = "container border shadow border-black p-2 col-lg-6 col-md-6 col-sm-6 bg-dark-subtle position-absolute top-50 start-50 translate-middle">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label" >Email:</label>
            </div>
            <div class="col pd-6">
                <input type="email" id="email" class="form-control" aria-describedby="passwordHelpInline" name="email">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password:</label>
            </div>
            <div class="col pd-6">
                <input name ="password" type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
        </div>
        <div class ="container">
            <hr>
            <div class="mx-auto p-1" style="width: 300px;">
                
                <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
