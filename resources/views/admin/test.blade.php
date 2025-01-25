CKEDITOR.replace('contentdata2', {
filebrowserUploadUrl: "{{ route('upload.admission', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form',
on: {
change: function(evt) {
var editor = evt.editor;
var content = editor.getData();
document.getElementById("content_textarea1").value = content;
}
}
});