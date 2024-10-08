function checkPageStatus() {
    fetch(window.location.href, { method: 'HEAD' })
        .then(response => {
            if (response.ok) {
                window.location.reload();
            }
        })
        .catch(error => {
            console.error('Error checking page status:', error);
        });
}

setInterval(checkPageStatus, 15000); // Überprüfe alle 15 Sekunden
