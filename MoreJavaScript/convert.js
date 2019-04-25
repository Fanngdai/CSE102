var us, euro;
function init() {
    us = document.getElementById('us');
    euro = document.getElementById('euro');
}

function convert() {
    // Replace all spaces with nothing. Removes spaces.
    var i = us.value.replace(/ /,"");
    if ( i ) {
        euro.value = i * 0.9;
        return;
    }

    var c = euro.value.replace(/ /,"");
    if ( c ) {
        us.value = c * 1.12;
    } 
}


function reset() {
    us.value = "";
    euro.value = ""; 
}
