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

setInterval(checkPageStatus, 60000); // Überprüfe alle 60 Sekunden
