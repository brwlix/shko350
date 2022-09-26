document.getElementById('myInput').disabled = true;



function myfub() {

    /* Save value of myText to input variable */
    document.getElementById('myInput').disabled = false;
    var copyTextarea = document.querySelector('#myInput');
    copyTextarea.focus();
    copyTextarea.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
    } catch (err) {
        console.log('Oops, unable to copy');
    }
    document.getElementById('myInput').disabled = true;

    // var element = document.getElementById("copycolor");
    // element.style.backgroundColor = "#000";
    // var element = document.getElementById("myInput");
    // element.style.backgroundColor = "#000";
    // var element = document.getElementById("myInput");
    // element.style.color = "#fff";

    // document.getElementById("myInput").value = "Copy !";


    // var timeleft = 1;
    // var downloadTimer = setInterval(function() {
    //     timeleft--;

    //     if (timeleft == 0) {
    //         // alert("Copied the text: " + copyText.value);

    //         var element = document.getElementById("copycolor");
    //         element.style.backgroundColor = "#fff";
    //         var element = document.getElementById("myInput");
    //         element.style.backgroundColor = "#fff";
    //         var element = document.getElementById("myInput");
    //         element.style.color = "#000";

    //         document.getElementById("myInput").value = xx;


    //         clearInterval(downloadTimer);
    //     }





    // }, 1000);

}