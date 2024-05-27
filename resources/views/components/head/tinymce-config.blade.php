<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <script src="https://cdn.tiny.cloud/1/dunxl5k6apezeydy3cq2yg7wqzo3ha22jko0zzf4ukrgtbmk/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        setup: function (editor) {
            editor.on('NodeChange', function (e) {
                let ulElements = editor.getBody().querySelectorAll('ul');
                ulElements.forEach(function (ul) {
                    if (!ul.classList.contains('list-disc')) {
                        ul.classList.add('list-disc');  // ul di tiny
                    }
                });

                let liElements = editor.getBody().querySelectorAll('li');
                liElements.forEach(function (li) {
                    if (!li.classList.contains('ml-4')) {
                        li.classList.add('ml-4');  // li di tiny
                    }
                });
            });

            editor.on('PreProcess', function (e) {
                let ulElements = e.node.querySelectorAll('ul');
                ulElements.forEach(function (ul) {
                    if (!ul.classList.contains('list-disc')) {
                        ul.classList.add('list-disc');  // ul pas proses
                    }
                });

                let liElements = e.node.querySelectorAll('li');
                liElements.forEach(function (li) {
                    if (!li.classList.contains('ml-4')) {
                        li.classList.add('ml-4');  // li pas proses
                    }
                });
            });
        },
    });
    </script>
</div>
