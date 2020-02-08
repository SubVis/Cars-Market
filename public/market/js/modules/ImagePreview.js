
// preview the image 
const file = [...document.querySelectorAll('[data-get]')],
		preview = [...document.querySelectorAll('[data-preview]')];

file.forEach(input => {
	input.onchange = () => {
		const exactImage = preview.filter(image => image.getAttribute('data-preview') == input.getAttribute('data-get'))[0];
		
		input.style.display = "none";
		
		exactImage.classList.add('z-50');

		exactImage.setAttribute('src', URL.createObjectURL(input.files[0])); 
	};
});

// Change Image
preview.forEach(img => {
	img.onclick = () => {
		const exactInput = file.filter(inpt => inpt.getAttribute('data-get') == img.getAttribute('data-preview') )[0];

		exactInput.click();
	};
});

// Delete Image
const delbtn = document.querySelectorAll(".delBtn");

delbtn.forEach(btn => {
	btn.onclick = () => {
		const img = btn.parentElement.previousElementSibling,
		input = img.parentElement.previousElementSibling;

		/**
		 * Empty input file list
		 */
		
		img.removeAttribute('src');
		img.classList.remove('z-50');
		input.style.display = "block";	

	};
});

