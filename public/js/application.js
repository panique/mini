var demoHeaderBox, ajaxButton, ajaxResultBox;

demoHeaderBox = document.getElementById('javascript-header-demo-box');
ajaxButton = document.getElementById('javascript-ajax-button');
ajaxResultBox = document.getElementById('javascript-ajax-result-box');

demoHeaderBox.innerHTML = 'Hello from JavaScript! This line has been added by public/js/application.js';
demoHeaderBox.style.color = 'green';

ajaxButton.addEventListener('click', function() {
	var request;

	request = new XMLHttpRequest();

	request.open('GET', url + 'songs/ajaxGetStats');
	request.responseType = 'text';

	request.onload = function() {
		ajaxResultBox.innerHTML = request.response;
	};

	request.send();
});
