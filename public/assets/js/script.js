function show(){
    document.querySelector('.hamburger').classList.toggle('open');
    document.querySelector('.navigation').classList.toggle('active');
}

function validateFile() {
    const fileInput = document.getElementById('fileInput');
    const filePath = fileInput.value;
    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    const errorMessage = document.getElementById('error-message');
    
    if (!allowedExtensions.exec(filePath)) {
        errorMessage.style.display = 'block';
        fileInput.value = '';
        return false;
    } else {
        errorMessage.style.display = 'none';
    }
}
