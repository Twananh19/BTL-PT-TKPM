function meow(){
    const p = document.querySelectorAll('p');
    const span= document.querySelectorAll('span');
    const label=document.querySelectorAll('label')
    const option=document.querySelectorAll('option')
    

    p.forEach(p => {
        p.textContent = 'meow meow';
    })
    span.forEach(span => {
        span.textContent = 'meow meow';
    })
    label.forEach(label => {
        label.textContent = 'meow meow';
    })
    option.forEach(option => {
        option.textContent = 'meow meow';
    })
    
}

function load(){
    document.getElementById('load').style.display='block';
}

function unload(){
    document.getElementById('load').style.display='none';
}
window.onload = function() {
    var statu = "signed"; // Biến trạng thái
    updateSignStatus();

    function updateSignStatus() {
        if (statu === "signed") {
            document.getElementById('sign_or_not1').innerHTML = "<b>TÀI KHOẢN</b>";
            document.getElementById('sign_or_not2').innerHTML = "Tài khoản";
        }
    }
};

function enableEdit() { 
    let inputField = document.getElementById('info-input'); 
    if (inputField.readOnly) { 
        inputField.readOnly = false; 
        inputField.focus(); // Đặt con trỏ vào ô nhập liệu 
        document.getElementById('edit').style.display="none";
        document.getElementById('unedit').style.display="block";
    } 
}

function unableEdit(){
    let inputField = document.getElementById('info-input'); 
    inputField.readOnly = true; 
    inputField.focus(); // Đặt con trỏ vào ô nhập liệu 
    document.getElementById('edit').style.display="block";
    document.getElementById('unedit').style.display="none";
    
}