@extends('layout.main-master')
<!DOCTYPE html>
<html>

<body>
    @section('content')
        <div class="container bg-light my-5 border p-4">
            {{-- START Document Submission Form --}}
            <form>
                {{-- Title Box --}}
                <div class="mb-3 fs-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                {{-- Description Box --}}
                <div class="mb-3 fs-3">
                    <label for="descriptionbox" class="form-label">Description</label>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                {{-- Select Menu --}}
                <div class ="mb-3 fs-3">
                    <label for="selectcategory" class = "form-label">Category</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Search</button>
            </form>
            {{-- END Document Submission Form --}}
            <br>
            {{-- START Document Display Table --}}
            <div class="mb-3 fs-3">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Document #</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Title1</td>
                            <td>Description1</td>
                            <td>Category1</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Title2</td>
                            <td>Description2</td>
                            <td>Category2</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Title3</td>
                            <td>Description3</td>
                            <td>Category3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- END Document Display Table --}}
        </div>
    @endsection
</body>

</html>

{{-- User should be able enter Title,
Description and Category.
The Category is already predefined. User is
not allowed to input any category.


  User should be able to see the saved
Title,
Description and Category. --}}
