@extends('layout.main-master')
<!DOCTYPE html>
<html>

<body>
    @section('content')
        <div class="container bg-light my-5 border p-4">
            {{-- START Document Submission Form --}}
            <form method="POST" id ="createBlogForm" data-action="{{ route('blog.create') }}">
                @csrf
                {{-- Title Box --}}
                <div class="mb-3 fs-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                {{-- Description Box --}}
                <div class="mb-3 fs-3">
                    <label for="descriptionbox" class="form-label">Description</label>
                    <textarea class="form-control" aria-label="With textarea" name="description" id="description"></textarea>
                </div>

                {{-- Select Menu --}}
                <div class ="mb-3 fs-3">
                    <label for="selectcategory" class = "form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name ="category" id= "category">
                        <option selected>Select Category</option>
                        @foreach ($categories as $category)
                            <option value=" {{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>
            {{-- END Document Submission Form --}}
            <br>
            {{-- START Document Display Table --}}

            <div class="mb-3 fs-3">
                <table class="table table-hover table-striped" name="table" id="table">
                    <thead>
                        <tr>
                            <th scope="col">Document #</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $blog->id }}</th>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>{{ $blog->category->name ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>

            </div>
            {{-- END Document Display Table --}}
        </div>
        <script type="module">
            const form = "#createBlogForm";
            $(function() {
                createBlog();
            });

            function createBlog() {
                $(form).on('submit', function(event) {
                    event.preventDefault();
                    $.ajax({
                    url: '{{route('blog.create')}}',
                        method: 'POST',
                        data: new FormData(this),
                        datatype: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            populateData(response);
                        },
                        error: function(response) {
                            alert(response);
                        }
                    });
                });
            }
            function populateData(data){
                var row = "<tr>"
                    row += '<td>'+data.id+'</td>';
                    row += '<td>'+data.title+'</td>';
                    row += '<td>'+data.description+'</td>';
                    row += '<td>'+data.category+'</td>';
                    row += "</tr>"

                    $("#table").find('tbody').prepend(row);
                }

        </script>
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
