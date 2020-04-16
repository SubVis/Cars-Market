
// preview the image 
const file = [...document.querySelectorAll('[data-get]')],
	preview = [...document.querySelectorAll('[data-preview]')];

function AddImage(input) {
	const exactImage = preview.filter(image => image.getAttribute('data-preview') == input.getAttribute('data-get'))[0];
	input.style.display = "none";
	exactImage.classList.add('z-50');
	exactImage.setAttribute('src', URL.createObjectURL(input.files[0]));
}

file.forEach(input => {
	input.onchange = () => {
		AddImage(input);
	};
});

// Change Image
preview.forEach(img => {
	if(!!img.src) {
		const exactInput = file.filter(inpt => inpt.getAttribute('data-get') == img.getAttribute('data-preview'))[0];
		exactInput.style.display = "none";
		img.classList.add('z-50');
		exactInput.files[0] = img.src
	}
	
	img.onclick = () => {
		const exactInput = file.filter(inpt => inpt.getAttribute('data-get') == img.getAttribute('data-preview'))[0];

		exactInput.click();
	};
});

// Delete Image
const delbtn = document.querySelectorAll(".delBtn");

delbtn.forEach(btn => {
	btn.onclick = () => {
		const img = btn.parentElement.previousElementSibling,
			input = img.parentElement.previousElementSibling;

		input.value = "";

		img.removeAttribute('src');
		img.classList.remove('z-50');
		input.style.display = "block";

	};
});

