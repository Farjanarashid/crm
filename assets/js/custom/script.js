$(function () {
    $(".editableTable tr td").dblclick(function () {
        var OriginalContent = $(this).text();
          
        $(this).addClass("cellEditing");
        $(this).html("<input type='text' value='" + OriginalContent + "' />");
        $(this).children().first().focus();
  
        $(this).children().first().keypress(function (e) {
            if (e.which == 13) {
                var newContent = $(this).val();
                $(this).parent().text(newContent);
                $(this).parent().removeClass("cellEditing");
				$.post('update.php' ,newContent ,function($data){
				alert($data);
				});
            }
        });
          
    $(this).children().first().blur(function(){
        $(this).parent().text(OriginalContent);
        $(this).parent().removeClass("cellEditing");
    });
    });
});


