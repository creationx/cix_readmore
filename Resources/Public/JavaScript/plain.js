const cixReadmoreButtons = document.getElementsByClassName('cixreadmore-button');

const handleCixReadmoreClick = function(event) {
    event.preventDefault();
    let elId = event.target.getAttribute('data-id');
    document.getElementById('cixreadmore-long_text_' + elId).classList.toggle('cix-hidden');
}

for (var i = 0; i < cixReadmoreButtons.length; i++) {
    cixReadmoreButtons[i].addEventListener('click', handleCixReadmoreClick, false);
}

