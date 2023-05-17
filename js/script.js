const accordion = document.getElementsByClassName('accordion');
for (a of accordion){
    a.addEventListener('click',function(){
    this.classList.toggle('active')
    })
}
let cookieModal = document.querySelector(".cookie");
let cancelCookieBtn = document.querySelector(".btn.cancel");
let acceptCookieBtn = document.querySelector(".btn.accept");
cancelCookieBtn.addEventListener("click", function (){cookieModal.classList.remove("active")})
acceptCookieBtn.addEventListener("click", function (){cookieModal.classList.remove("active")})
setTimeout(function(){
    let cookieAccepted = localStorage.getItem("cookieAccepted")
    cookieModal.classList.add("active")
}, 2000)
function validateForm() {
	var password = document.getElementById("pass").value;
	var confirm_password = document.getElementById("pass_chek").value;
	if (password != confirm_password) {
		alert("Passwords don't match");
		return false;
	}
	return true;
}