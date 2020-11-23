// Todo: Value


function loginBack() {
    document.getElementById('loginback').style.visibility = 'hidden';
    document.getElementById('loginback').style.display = 'none';
    document.getElementsByClassName('modal1')[0].style.visibility = 'hidden';
    document.getElementsByClassName('modal1')[0].style.display = 'none';
    }

function loginBack1() {
    document.querySelector('div#login__hidden').style.visibility = 'hidden';
    document.querySelector('div#login__hidden').style.display = 'none';
    document.querySelector('#modal__view').style.visibility = 'hidden';
    document.querySelector('#modal__view').style.display = 'none';
    }

// TODO: OUT
function out() {
    document.getElementById('madalClick').style.visibility = 'hidden';
    document.getElementById('madalClick').style.display = 'none';

}

function Login_form() {
	document.querySelector('div#loginback').style.visibility = 'inherit';
    document.querySelector('div#loginback').style.display = 'flex';
    document.querySelector('div#login__hidden').style.visibility = 'hidden';
    document.querySelector('div#login__hidden').style.display = 'none';
}

function Sign_in() {
	document.querySelector('div#loginback').style.visibility = 'hidden';
    document.querySelector('div#loginback').style.display = 'none';
    document.querySelector('div#login__hidden').style.visibility = 'inherit';
    document.querySelector('div#login__hidden').style.display = 'flex';
}

function onLogin() {
	document.querySelector('div#loginback').style.visibility = 'inherit';
    document.querySelector('div#loginback').style.display = 'flex';
    document.querySelector('div#login__hidden').style.visibility = 'hidden';
    document.querySelector('div#login__hidden').style.display = 'none';
    document.querySelector('#modal__view').style.visibility = 'inherit';
    document.querySelector('#modal__view').style.display = 'block';
}

function onSingin() {
	document.querySelector('div#loginback').style.visibility = 'hidden';
    document.querySelector('div#loginback').style.display = 'none';
    document.querySelector('div#login__hidden').style.visibility = 'inherit';
    document.querySelector('div#login__hidden').style.display = 'flex';
    document.querySelector('#modal__view').style.visibility = 'inherit';
    document.querySelector('#modal__view').style.display = 'block';
}