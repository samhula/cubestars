const quantityButtons = document.querySelectorAll('.quantity-btn');

function changeQuantity(button) {
    let quantity_change = 0;

    if (button.classList.contains('increase')) {
        quantity_change++;
    } else {
        quantity_change--;
    }

    let current_val = parseInt(button.parentNode.parentNode.querySelector('#quantity').value)
    let new_val = current_val + quantity_change;

    if (new_val < 1) {
        new_val = 1;
    }

    button.parentNode.parentNode.querySelector('#quantity').value = new_val.toString();
}

if (quantityButtons) {
    quantityButtons.forEach((button) => {
        button.addEventListener("click", function() {
            changeQuantity(button);
        });
    });
}