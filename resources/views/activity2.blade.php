<html>
    <head>
        @vite(['resources/sass/app.scss','resources/js/app.js'])
    </head>
    <body class="container border border-black pd-2"> 
        <!-- Left Container / Login -->
    <div class ="row p-4 ">
        <div class = "container border shadow border-black p-2 col-lg-6 col-md-6 col-sm-6 bg-dark-subtle">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Email:</label>
                </div>
                <div class="col pd-6">
                    <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password:</label>
                </div>
                <div class="col pd-6">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class ="container">
                <div class="mx-auto" style="width: 300px;">
                    <button class="btn btn-primary" type="submit">Login</button>
                    <a href="">Forgot Password?</a>
                </div>
            </div>
        </div>
        <!--Right Container / Text  -->
        <div class = "container col-lg-6 col-md-6 col-sm-6 ">
            <h1><center>Pricing</center></h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusantium, maxime totam possimus culpa cum quam excepturi quae minus similique provident natus velit saepe rem obcaecati quos nostrum amet iusto.
        </div>
        <div class = "container col-lg-6 col-md-6 col-sm-6">
        </div>
        <div class = "container col-lg-6 col-md-6 col-sm-6">
        <table class="table">
        <thead>
            <tr>
            <th scope="col"><img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;"></th>
            <th scope="col"><img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;"></th>
            <th scope="col"><img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="col"><img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;"></th>
            <th scope="col"><img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;"></th>
            <th scope="col"><img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;"></th>
            </tr>
        </tbody>
        </table>
        <h1><center>Compare Plans</center></h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Free</th>
      <th scope="col">Pro</th>
      <th scope="col">Enterprise</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Public</th>
      <td>✓</td>
      <td>✓</td>
      <td>✓</td>
    </tr>
    <tr>
      <th scope="row">Private</th>
      <td>✓</td>
      <td>✓</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Permissions</th>
      <td ></td>
      <td>✓</td>
      <td>✓</td>
    </tr>
  </tbody>
</table>   
        </div>
    </div> <!-- Row End -->
    </body>

</html>