if (document.querySelector('#editor')) {
    ClassicEditor
        .create(document.querySelector('#editor'), {
            simpleUpload: {
                uploadUrl: '/editor-uploads',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                }
            }
        })
        .then(editor => {
            let content = document.querySelector('#editor').innerHTML;
            editor.setData(content);
            editor.model.document.on('change:data', function () {
                document.querySelector('#description').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
}