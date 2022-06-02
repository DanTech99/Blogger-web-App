<div>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea#extract', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists link image',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link | image'
      });


      // para el body 
      tinymce.init({
        selector: 'textarea#body', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists link image',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link | image',
        
      });
    </script>
</div>