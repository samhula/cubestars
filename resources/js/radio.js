const radioButtons = document.querySelectorAll('.radio-select');

function toggleSelect(radio) {
    radioButtons.forEach((radioNode) => {
        if (radioNode != radio) {
            if(radioNode.parentNode.classList.contains('bg-neutral-200')) {
                radioNode.parentNode.classList.remove('bg-neutral-200');
            }
        } else {
            if (!radio.parentNode.classList.contains('bg-neutral-200')) {
                radio.parentNode.classList.add('bg-neutral-200')
            }
        }
    });
}

function shrinkSelect(radio) {
    if (!radio.parentNode.classList.contains('scale-98')) {
        radio.parentNode.classList.add('scale-98');
    }
}

function removeShrinkSelect(radio) {
    if (radio.parentNode.classList.contains('scale-98')) {
        radio.parentNode.classList.remove('scale-98');
    }
}

if (radioButtons) {
    radioButtons.forEach((radio) => {
        radio.addEventListener("click", function() {
            toggleSelect(radio);
        });

        radio.addEventListener("mousedown", function() {
            shrinkSelect(radio);
        });

        radio.addEventListener("mouseup", function() {
            removeShrinkSelect(radio);
        });
        
        radio.addEventListener("mouseleave", function() {
            removeShrinkSelect(radio);
        });
    });
}