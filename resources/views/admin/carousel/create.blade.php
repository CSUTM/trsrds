<x-bootstrap>
    <div class="my-5 d-flex flex-column justify-content-center align-items-center">


        <form method="POST" action="/carousel/create" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea  name="description" value="{{old('description')}}" type="text" class="form-control" id="exampleInputPassword1" rows="10"></textarea>
            </div>
            <div class="input-group my-3">
                <input name="image" type="file" class="form-control" id="inputGroupFile02">
            </div>
            <div class="d-flex justify-content-around">
                <a href="/carousel/index"> Go back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</x-bootstrap>
