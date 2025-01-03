const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


function load(){
  const name=document.getElementById('myname');
  const pw=document.getElementById('mypw');

  if(name.value=='' || pw.value==''){
    alert('Bạn chưa nhập đủ thông tin đăng nhập');
  } else {
  document.getElementById('load').style.display='block';
  }
}

function unload(){
  document.getElementById('load').style.display='none';
}