// Get the form element
const form = document.querySelector('form');

// Get the input elements
const fullName = form.querySelector('input[type="text"][placeholder="Enter your name"]');
const username = form.querySelector('input[type="text"][placeholder="Enter your username"]');
const email = form.querySelector('input[type="text"][placeholder="Enter your email"]');
const phoneNumber = form.querySelector('input[type="text"][placeholder="Enter your number"]');
const password = form.querySelector('input[type="text"][placeholder="Enter your password"]');
const confirmPassword = form.querySelector('input[type="text"][placeholder="Confirm your password"]');

// Get the gender input elements
const maleGender = form.querySelector('#dot-1');
const femaleGender = form.querySelector('#dot-2');
const notSayGender = form.querySelector('#dot-3');

// Validate the form when it is submitted
form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Validate the full name
  if (fullName.value.trim() === '') {
    alert('Please enter your full name.');
    fullName.focus();
    return;
  }

  // Validate the username
  if (username.value.trim() === '') {
    alert('Please enter your username.');
    username.focus();
    return;
  }

  // Validate the email
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email.value.trim())) {
    alert('Please enter a valid email address.');
    email.focus();
    return;
  }

  // Validate the phone number
  const phoneNumberRegex = /^\d{10}$/;
  if (!phoneNumberRegex.test(phoneNumber.value.trim())) {
    alert('Please enter a valid phone number.');
    phoneNumber.focus();
    return;
  }

  // Validate the password
  if (password.value.trim() === '') {
    alert('Please enter your password.');
    password.focus();
    return;
  }

  // Validate the confirm password
  if (confirmPassword.value.trim() === '') {
    alert('Please confirm your password.');
    confirmPassword.focus();
    return;
  }

  // Validate that the password and confirm password match
  if (password.value !== confirmPassword.value) {
    alert('The password and confirm password do not match.');
    confirmPassword.focus();
    return;
  }

  // Validate the gender
  if (!maleGender.checked && !femaleGender.checked && !notSayGender.checked) {
    alert('Please select your gender.');
    return;
  }

  // If the form is valid, submit it
  alert('Form submitted successfully!');
  form.submit();
});
