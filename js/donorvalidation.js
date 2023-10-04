

const form = document.getElementById('form');
const donor_name = document.getElementById('donor_name');
const donor_email = document.getElementById('donor_email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

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

const isValidEmail = donor_email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(donor_email).toLowerCase());
}

const validateInputs = () => {
    const donor_nameValue = donor_name.value.trim();
    const donor_emailValue = donor_email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    // const select = document.getElementById("blood_typw");
   

    if(donor_nameValue === '') {
        setError(donor_name, 'donor_name is required');
    } else {
        setSuccess(donor_name);
    }

    if(donor_emailValue === '') {
        setError(donor_email, 'Email is required');
    } else if (!isValidEmail(donor_emailValue)) {
        setError(donor_email, 'Provide a valid email address');
    } else {
        setSuccess(donor_email);
    }
    

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }
    

};





  