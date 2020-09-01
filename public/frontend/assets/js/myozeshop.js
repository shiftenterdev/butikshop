window.addEventListener('cart-updated', event => {
    let el = document.getElementById('mini-cart-item-count');
    el.setAttribute('data-cart-items', event.detail.count);
});

window.addEventListener('hide-message', event => {
    setTimeout(()=>{
        document.querySelector('.flash-alert').style.display = 'none';
    },5000);
});