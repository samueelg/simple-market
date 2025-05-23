import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

document.getElementById('scrollRight').addEventListener('click', () => {
    document.getElementById('produtoScroll').scrollBy({ left: 300, behavior: 'smooth' });
});

document.getElementById('scrollLeft').addEventListener('click', () => {
    document.getElementById('produtoScroll').scrollBy({ left: -300, behavior: 'smooth' });
});
