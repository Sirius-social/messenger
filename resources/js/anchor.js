let anchors = document.querySelectorAll('a[href^="#"]');
anchors.forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        for (let item of anchors) {
            console.log(item);
            item.classList.remove('font-bold', 'border-blue-600');
        }

        anchor.classList.add('font-bold', 'border-blue-600');

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    });
});
