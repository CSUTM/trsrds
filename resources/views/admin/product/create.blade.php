<x-bootstrap>
    <div class="my-5 d-flex flex-column justify-content-center align-items-center">


        <form method="POST" action="/product/create" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" id="exampleInputPassword1" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category</label>
                <input name="category" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price $</label>
                <input name="price" type="number" step="any" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rating</label>
                <input name="rating" type="number" step="any" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Count</label>
                <input name="count" type="number" step="any" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
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
