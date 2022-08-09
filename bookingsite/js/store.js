var item_carts = [];

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('fa-trash')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('price-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function confirmBooking() {
    var myWindow;
    $.ajax({
        url: "data/get-cart.php",
        type: "POST",
        data: {'cart': item_carts},
        success: function(data, textStatus, jqXHR) {
            if(confirm("Confirm Booking?")){
                window.open("loading.php");
            }
            document.getElementById("btn-purchase").innerHTML = myWindow;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error occurred!');
        }
    
    });
}

function displayCart() {
    // $.ajax({
    //     url: "data/get-cart.php",
    //     type: "POST",
    //     data: {'cart': item_carts},
    //     success: function(data, textStatus, jqXHR) {
    //         alert('Success!');
    //         // console.log("Cart: ", item_carts);
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) {
    //         alert('Error occurred!');
    //     }
    
    // });
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function addToCartClicked(event) {
    var parent = $(event.target).closest('section');//parent of "target"
    var information_item = parent.find("#information");
    console.log(information_item);

    
    var carparkId = information_item.find("[name='carparkId']").val();
    var lotId = information_item.find("[name='lotId']").val();
    var address = information_item.find("[name='address']").val()
    var price = information_item.find("[name='price']").val()
    var check_in = information_item.find("[name='check_in']").val()
    var check_out = information_item.find("[name='check_out']").val()
    
    addItemToCartHTML(address, lotId, price, check_in, check_out);
    addItemToCartPHP(carparkId, lotId, address, price, check_in, check_out);
    updateCartTotal();
}

function addItemToCartPHP(carparkId, lotId, address, price, check_in, check_out) {
    var item = {
        'carparkId': carparkId,
        'lotId': lotId,
        'address': address,
        'price': price,
        'check_in': check_in,
        'check_out': check_out
    }
    item_carts.push(item);
}

function addItemToCartHTML(title, lot, price, check_in, check_out) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    var cartItemLotId = cartItems.getElementsByClassName('cart-item-lot')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title && cartItemLotId[i].innerText == lot) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-column">
            <div class="cart-item">
            <span class="cart-item-title">${title}</span><br>
            <span class="cart-item-lot">${lot}</span><br>
            <span class="cart-item-lot">${check_in}</span> - <span class="cart-item-lot">${check_out}</span> 
            <span class="cart-price cart-column">$${price}</span>
        </div>
        <div class="cart-column">
            <i class="fas fa-trash"></i>
        </div>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('fa-trash')[0].addEventListener('click', removeCartItem)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        total = total + price
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}