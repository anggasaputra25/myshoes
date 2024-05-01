// Mendapatkan referensi elemen tombol scrollToTop
var scrollToTopButton = document.getElementById('scrollToTopButton');

// Mendaftarkan event listener untuk mendeteksi scroll
window.addEventListener('scroll', function() {
    // Mendapatkan posisi scroll vertikal
    var verticalScroll = window.scrollY || document.documentElement.scrollTop;

    // Mengubah properti CSS right ketika scroll ke bawah
    if (verticalScroll > 0) {
        scrollToTopButton.style.right = '12px';
        scrollToTopButton.style.transform = 'rotate(0deg)';
    } else {
        scrollToTopButton.style.right = '-50px';
        scrollToTopButton.style.transform = 'rotate(90deg)';
    }
});