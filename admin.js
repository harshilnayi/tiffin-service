function showPage(pageId) {
    const pages = document.querySelectorAll('.content');
    pages.forEach(page => {
        if (page.id === `${pageId}-page`) {
            page.style.display = 'block';
        } else {
            page.style.display = 'none';
        }
    });

    const sidebarItems = document.querySelectorAll('.sidebar li');
    sidebarItems.forEach(item => {
        if (item.textContent.toLowerCase() === pageId) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

// Initial load
showPage('dashboard');
