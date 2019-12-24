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
});