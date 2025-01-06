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

let trangthai=1;

function updateDisplay() { 
    document.getElementsByClassName('b1')[0].style.display='none';
    document.getElementsByClassName('b2')[0].style.display='none';
    document.getElementsByClassName('b3')[0].style.display='none';

    if (trangthai == 1) { 
        document.getElementsByClassName('b1')[0].style.display = 'block'; } 
    else if (trangthai == 2) { 
        document.getElementsByClassName('b2')[0].style.display = 'block'; } 
    else if (trangthai == 3) { 
        document.getElementsByClassName('b3')[0].style.display = 'block'; }
    
}
function next(){
    trangthai+=1;
    if(trangthai>3) trangthai=3;
    updateDisplay();
}
function back(){
    trangthai-=1;
    if(trangthai<1) trangthai=1;
    updateDisplay();
}

function choiced(n){
    let a = document.getElementById('find');
    for(let i=0;i<n;i++){
        a = a.nextElementSibling;
    }
    let value = a.textContent;
    document.getElementById('find').value=value;
}