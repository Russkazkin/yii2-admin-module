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


    /*new Quill("#artice-content", {
        theme: "snow",
        modules: {toolbar: [[{font: []}, {size: []}], ["bold", "italic", "underline", "strike"], [{color: []}, {background: []}], [{script: "super"}, {script: "sub"}], [{header: [!1, 1, 2, 3, 4, 5, 6]}, "blockquote", "code-block"], [{list: "ordered"}, {list: "bullet"}, {indent: "-1"}, {indent: "+1"}], ["direction", {align: []}], ["link", "image", "video", "formula"], ["clean"]]}
    });*/

});

/*var quill = new Quill('#editor-container', {
    modules: {
        toolbar: [
            ['bold', 'italic'],
            ['link', 'blockquote', 'code-block', 'image'],
            [{ list: 'ordered' }, { list: 'bullet' }]
        ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
});

var form = document.querySelector('form');
form.onsubmit = function() {
    // Populate hidden form on submit
    var about = document.querySelector('input[name=about]');
    about.value = JSON.stringify(quill.getContents());

    console.log("Submitted", $(form).serialize(), $(form).serializeArray());

    // No back end to actually submit to!
    alert('Open the console to see the submit data!')
    return false;
};*/
