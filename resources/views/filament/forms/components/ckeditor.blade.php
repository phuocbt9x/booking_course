<div x-data="{ editor: null }">
    <textarea {{ $attributes->merge($getExtraAttributes()) }} wire:model.defer="{{ $getStatePath() }}" x-ref="editor"></textarea>

    <script>
        window.addEventListener('load', function() {
            ClassicEditor
                .create($refs.editor)
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '300px';
                    editor.ui.view.editable.element.style.border = '1px solid #ccc';
                    editor.ui.view.editable.element.style.padding = '10px';
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</div>
