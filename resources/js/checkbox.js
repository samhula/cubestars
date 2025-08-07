const checkboxes = document.querySelectorAll('.checkbox-select');

function toggleCheckbox(checkbox) {
    checkbox.parentNode.classList.toggle('bg-neutral-200');
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

if (checkboxes) {
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("click", function() {
            toggleCheckbox(checkbox);
        });

        checkbox.addEventListener("mousedown", function() {
            shrinkSelect(checkbox);
        });

        checkbox.addEventListener("mouseup", function() {
            removeShrinkSelect(checkbox);
        });
        
        checkbox.addEventListener("mouseleave", function() {
            removeShrinkSelect(checkbox);
        });
    });
}