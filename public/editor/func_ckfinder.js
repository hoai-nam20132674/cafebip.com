function ckeditor (name) {
    var editor = CKEDITOR.replace(name ,{
        uiColor : '#9AB8F3',
        language:'vi',
        filebrowserImageBrowseUrl : baseURL+'/editor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl : baseURL+'/editor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl : baseURL+'/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : baseURL+'/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        toolbar:[
        ['Cut','Copy','Paste','PasteText','Undo','Redo','-','Replace','-','SelectAll','RemoveFormat','Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
        ['Link','Unlink','Anchor'],
        ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
        ['Styles','Format','Font','FontSize'],
        ['TextColor','BGColor'],
        ['Maximize', 'ShowBlocks','-']
        ]
        });
}