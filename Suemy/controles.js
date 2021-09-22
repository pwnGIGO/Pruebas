// Banderas de teclas
let left, right, up, down;
this.down = false;
this.left = false;
this.up = false;
this.right = false;

// Tecla presionada
window.addEventListener('keydown', event => {
	if (event.key === 'ArrowRight') {
		right = true;
		posX += 10;
	} else if (event.key === 'ArrowLeft') {
		left = true;
		posX -= 10;
	} else if (event.key === 'ArrowDown') {
		down = true;
		posY += 10;
	} else if (event.key === 'ArrowUp') {
		up = true;
		posY -= 10;
	}
})

// Tecla soltada
window.addEventListener('keyup', event => {
	console.log(event.key)
	if (event.key === 'ArrowRight') {
		right = false;
	} else if (event.key === 'ArrowLeft') {
		left = false;
	} else if (event.key === 'ArrowDown') {
		down = false;
	} else if (event.key === 'ArrowUp') {
		up = false;
	}
})