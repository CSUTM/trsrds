function myCarouselModal(id, title, description) {
    $(document).on("click", `#myCarouselModal-${id}`, function (e) {
        e.preventDefault();
        $("#formModal").attr("action", `/carousel/edit/${id}`).submit();
        console.log($("#formModal"));
        $(".modal-body #modalId").val(id);
        $(".modal-body #modalTitle").val(title);
        $(".modal-body #modalDescription").val(description);
    });
}

function myProductModal(id, name, description, category, price, rating, count) {
    $(document).on("click", `#myProductModal-${id}`, function (e) {
        e.preventDefault();
        $("#formModal").attr("action", `/product/edit/${id}`).submit();
        console.log($("#formModal"));
        $(".modal-body #modalId").val(id);
        $(".modal-body #modalName").val(name);
        $(".modal-body #modalDescription").val(description);
        $(".modal-body #modalCategory").val(category);
        $(".modal-body #modalPrice").val(price);
        $(".modal-body #modalRating").val(rating);
        $(".modal-body #modalCount").val(count);
    });
}

$(document).on("click", "#update_product_data", function (e) {
    e.preventDefault();

    var formData = new FormData();
    var file = $("#modalImage").prop("files")[0];

    '{{ $product->description }}', 
    '{{ $product->category }}','{{ $product->price }}','{{ $product->rating }}','{{ $product->count }}'
    formData.append("image", file);
    formData.append("name", $("#modalName").val());
    formData.append("description", $("#modalDescription").val());
    formData.append("category", $("#modalCategory").val());
    formData.append("price", $("#modalPrice").val());
    formData.append("rating", $("#modalRating").val());
    formData.append("count", $("#modalCount").val());
    formData.append("id", $("#modalId").val());
    // Don't use serialize here, as it is used when we want to send the data of entire form in a query string way and that will not work for file upload
    var id = $("#modalId").val();
    $.ajax({
        url: "/product/edit",
        method: "post",
        enctype: "multipart/form-data",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response == 1) {
                $(".alert-success").css("display", "inline");
                setTimeout(closeMessage, 1000);
            } else {
                $(".alert-danger").css("display", "inline");
                setTimeout(closeMessage, 1000);
            }
        },
    });
});

$(document).on("click", "#update_carousel_data", function (e) {
    e.preventDefault();

    var formData = new FormData();
    var file = $("#modalImage").prop("files")[0];

    formData.append("image", file);
    formData.append("title", $("#modalTitle").val());
    formData.append("description", $("#modalDescription").val());
    formData.append("id", $("#modalId").val());
    // Don't use serialize here, as it is used when we want to send the data of entire form in a query string way and that will not work for file upload
    var id = $("#modalId").val();
    $.ajax({
        url: "/carousel/edit",
        method: "post",
        enctype: "multipart/form-data",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response == 1) {
                $(".alert-success").css("display", "inline");
                setTimeout(closeMessage, 1000);
            } else {
                $(".alert-danger").css("display", "inline");
                setTimeout(closeMessage, 1000);
            }
        },
    });
});

function closeMessage() {
    $(".alert-success").css("display", "none");
    $(".alert-danger").css("display", "none");
    location.reload();
}
