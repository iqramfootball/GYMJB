//  ini untuk function gambar
function cute(cat){
    cat.src = "images/gymbanner2.jpg";
}
function ned(mouse){
    mouse.src = "images/gymbanner1.jpg";
}
// button daftar & bmi
function Openwin(){
    var mywindow;
    mywindow = window.open("daftar.php","mywindow","width=2080,height=400");
}
function bmi(){
    var mywindow;
    mywindow = window.open("bmi.php","mywindow","width=2080,height=400");
}
// fungsi login & signup
function toggleForm() {
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
    }
}