// Thanks for hayageek
function fileSender(formData)
{
    var uploadURL ="Controller/upload.php";
    var extraData ={};
    var jqXHR=$.ajax({
            xhr: function() {
            var xhrobj = $.ajaxSettings.xhr();
            return xhrobj;
        },
	    url: uploadURL,
	    type: "POST",
	    contentType:false,
	    processData: false,
        cache: false,
        data: formData,
        success: function(data){
            alert('fuck');         
        }
    }); 
 
}

function uploadHandler(files,obj)
{
   for (var i = 0; i < files.length; i++) 
   {
        var fd = new FormData();
        fd.append('file', files[i]);

        fileSender(fd);
   }
}

$(document).ready(function()
{
	var uploadDiv = $("#csv_drop");

// Bzdetohandlery
	uploadDiv.on('dragenter', function (e) 
	{
	    e.stopPropagation();
	    e.preventDefault();
	    $(this).css('border', '1px dotted #B7BFC4');
	});
	uploadDiv.on('dragleave', function (e) 
	{
	    e.stopPropagation();
	    e.preventDefault();
	    $(this).css('border', '1px solid #E9E9E9');
	});
	uploadDiv.on('dragover', function (e) 
	{
	     e.stopPropagation();
	     e.preventDefault();
	});

// UploadOnDrop
	uploadDiv.on('drop', function (e) 
	{
	     e.preventDefault();
	     var files = e.originalEvent.dataTransfer.files;
	 
	     uploadHandler(files,uploadDiv);
	});

});

