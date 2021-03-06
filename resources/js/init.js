$(document).ready(function() {
    $('#article-category_id').select2(
        {
            placeholder: "Choose category...",
            allowClear: true
        }
    );
    $('#article-tags').select2({
        placeholder: "Choose tags..."
    });

    $('.article-form #article-title').maxlength({
        threshold: 64,
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger",
        validate: true,
        alwaysShow: true,
        placement: 'top-left'
    });

    $('.article-form #article-description').maxlength({
        threshold: 128,
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger",
        validate: true,
        alwaysShow: true,
        placement: 'top-left'
    });

    $('.category-form #category-title').maxlength({
        threshold: 32,
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger",
        validate: true,
        alwaysShow: true,
        placement: 'top-left'
    });
});