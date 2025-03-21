//Script from TrustArc to force reload the page when a user makes a selection.

document.body.addEventListener("click", function(event) {
    if(event && event.target && event.target.id === 'truste-consent-button') {
    setTimeout(() => { window.location.reload(); }, 1000);
    }
});