window.$ = require('jquery');
function xxs() {
    return "<h2>XXS</h2><b>Cross-Site Scripting</b>";
}
function DDOS() {
    return "<h2>DDOS</h2><b>Distributed-Denial of Service Attack</b>";
}
function php_direct() {
    return "<h2>PHP</h2>";
}
function sql_inject() {
    return "<h2>SQL Injection</h2>";
}

function crowler() {
    return "<form> <input type='text'/></form>"  ;
}

function content(url, index) {
    var cont = this[url]();
    var Nav = document.querySelectorAll('.nav-item');
    for (var i = 0; i < Nav.length; i++) {
        if (i == index) {
            Nav[i].classList = 'nav-item active';
        }
        else {
            Nav[i].classList = 'nav-item';
        }
    }

    $("#outlet").animate({ 'height': '0px' }, 200);
    setTimeout(() => {
        $("#outlet").html(`${cont}`);
    }, 250);
    $("#outlet").animate({ 'height': '85vh' });
    //alert(url);
}

function logout(){
    sessionStorage.removeItem('SF_KEY');
    window.location.assign("login.html");
}