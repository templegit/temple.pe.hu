// Navigation sound effect

window.onload = function () {

	var sfxNode = document.querySelectorAll('#navigationsfx')[0];
	var nodeList = document.querySelectorAll('#navigation a');

	for (var i = 0; i < nodeList.length; i++) {
		nodeList[i].addEventListener('mouseover', function (e) {
			sfxNode.pause();
			sfxNode.currentTime = 0;
			sfxNode.play();
		}, true);
	}

};

console.log("script loaded")