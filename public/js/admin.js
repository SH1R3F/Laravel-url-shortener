$(document).ready(function(){
    // setTimeout(function(){
        $(".loading-scr").hide();
    // }, 1500);
    $("#sidebar-toggler").click(function(e){
        e.preventDefault();
        $(".sidebar").show();
    })
    $(".hide-sidebar").click(function(e){
        e.preventDefault();
        $(".sidebar").hide();
    })

    // Progress
    $('.progress .progress-bar').css("width",
        function() {
            return $(this).attr("aria-valuenow") + "%";
        }
    );
});
