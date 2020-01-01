$(document).ready(function() {
    $(".article-list-delete").on("click", function (event) {
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ml-2 mt-2",
            buttonsStyling: !1
        }).then(function (t) {
            t.value ? Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                type: "success"
            }) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe :)",
                type: "error"
            });
        });
        return false;
    });
});

