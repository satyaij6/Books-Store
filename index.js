document.getElementsByTagName("h1")[0].style.fontSize = "6vw";
document.querySelector('.next').addEventListener('click', () => {
    const track = document.querySelector('.carousel-track');
    track.scrollBy({ left: 300, behavior: 'smooth' });
});

document.querySelector('.prev').addEventListener('click', () => {
    const track = document.querySelector('.carousel-track');
    track.scrollBy({ left: -300, behavior: 'smooth' });
});
