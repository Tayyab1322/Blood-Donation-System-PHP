

const form = document.getElementById('form');
const receiver_name = document.getElementById('receiver_name');
const receiver_email = document.getElementById('receiver_email');
const receiver_phone = document.getElementById('receiver_phone');


form.addEventListener('submit', e => {
   

    validateInputs();
    if (isFormValid()==true){
        form.submit();
    }else{
        e.preventDefault();

    }
});

function isFormValid(){
    const inputcContainers = form.querySelectorAll('.input-control');
    let result= true;
    inputcContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }

    });
    return result;
}

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = receiver_email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(receiver_email).toLowerCase());
}

const validateInputs = () => {
    const receiver_nameValue = receiver_name.value.trim();
    const receiver_emailValue = receiver_email.value.trim();
    const receiver_phoneValue = receiver_phone.value.trim();

    // const select = document.getElementById("blood_typw");
   

    if(receiver_nameValue === '') {
        setError(receiver_name, 'Receiver Name is required');
    } else {
        setSuccess(receiver_name);
    }

    if(receiver_emailValue === '') {
        setError(receiver_email, 'Email is required');
    } else if (!isValidEmail(receiver_emailValue)) {
        setError(receiver_email, 'Provide a valid email address');
    } else {
        setSuccess(receiver_email);
    }
    
    if(receiver_phoneValue === '') {
        setError(receiver_phone, 'Phone is required');
    } else if (receiver_phoneValue.length < 11 ) {
        setError(receiver_phone, 'Phone must be at least 11 character.')
    } else {
        setSuccess(receiver_phone);
    }


    
    

};





  