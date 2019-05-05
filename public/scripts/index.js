$(document).ready(function(){
    var user_bio;
    var backgroundImage = $("#background-image-file").val();
    var institution, degree, currentCity, hometown;


    // When click "add bio", change the display; 
    $(".adding-bio").click(function(){
        $("#bio").css('display', 'block');
        $(".adding-bio").css('display', 'none');
    });

    // When click Okay button to submit bio
    $("#okay-bio").click(function(){
        user_bio = $("#bio-value").val();
        $("#bio").css('display', 'none');
        $(".bio-intro").css('display', 'none');
        $(".bio").html("<p>"+ user_bio +"</p>");
    });

    $(".modal-footer .btn-primary").click(function(){
        if($("#instituion").val() == undefined || $("#degree").val() == undefined || $("#inhabit").val() == undefined || $("#hometown").val() == undefined){
            alert("There is no value to be saved");
        }
        else{
            if($("#instituion").val() != undefined){
                institution = $("#instituion").val();
                $("perInfo p").html(`<p>Enrolled in ${institution}</p>`);

            }
            else if($("#degree").val() != undefined){
                institution = $("#degree").val();
                $("perInfo p").html(`<p>Enrolled in ${institution}</p>`)
            }
            else if($("#inhabit").val() != undefined){
                institution = $("#inhabit").val();
            }
            else if($("#hometown").val() != undefined){
                institution = $("#hometown").val();
            }
        }
    });

    $("#post-form button").click(function(){
        var postVal = $("#post-value").val();
        var now = new Date();
        var strDateTime = "Date: "+ now.getFullYear() + " \/ " + Number(now.getMonth() + 1)  + " \/ " + Number(now.getDate() + 1) + "<br> Time: " + Number(now.getHours() + 1) + " : " + Number(now.getMinutes() + 1) ;    
        $(".event").prepend(`<div class="post"><div class="thing"><h3> You Username</h3><h6>${strDateTime}</h6><p>${postVal}</p></div></div>`);
        $("#post-value").val("");
    });

});
