$(document).ready(function () {
    sweetAlert('.category-list-delete', '/admin/blog/category/delete');
});
function sweetAlert(target, url) {
    $(target).on("click", function (event) {
        event.preventDefault();
        let id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Delete",
            cancelButtonText: "Cancel",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ml-2 mt-2",
            buttonsStyling: !1,
            preConfirm: () => {
                return fetch(`${url}?id=${id}`, {
                    method: 'POST',
                    headers : {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(response.statusText)
                        }
                        return response;
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                            `Request failed: ${error}`
                        )
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if(!result.value) {
                return false;
            } else if (result.value.ok) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    type: "success"
                });
                $(this).parent().parent().remove();
            } else {
                Swal.fire({
                    title: "Something went wrong",
                    text: "We are very sorry!",
                    type: "error"

                });
            }
        });
        return false;
    });
}

