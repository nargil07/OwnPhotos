/**
 * Created by antony on 25/07/16.
 */
$('#files_sender').bind('change', function(e){
    var formData = new FormData(this.form);
    $.ajax({
        url: 'send',  //Server script to process data
        type: 'POST',
        xhr: function() {  // Custom XMLHttpRequest
            var myXhr = $.ajaxSettings.xhr();
            if(myXhr.upload){ // Check if upload property exists
                myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
            }
            return myXhr;
        },
        //Ajax events
        //beforeSend: beforeSendHandler,
        success: completeHandler,
        //error: errorHandler,
        // Form data
        data: formData,
        //Options to tell jQuery not to process data or worry about content-type.
        cache: false,
        contentType: false,
        processData: false
    });
});
function progressHandlingFunction(e){
    if(e.lengthComputable){
        document.querySelector('#p1').MaterialProgress.setProgress((e.loaded/ e.total)*100);
    }
}

function completeHandler(){
    document.querySelector('#p1').MaterialProgress.setProgress(100);
    window.location.href = '/';
}