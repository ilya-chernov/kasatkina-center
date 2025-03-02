fetch("/js/schema.json")
    .then(response => response.json())
    .then(data => {
        const script = document.createElement('script');
        script.type = 'application/ld+json';
        script.textContent = JSON.stringify(data);
        document.head.appendChild(script);
    })
    .catch(error => console.error('Ошибка загрузки Schema JSON:', error));
