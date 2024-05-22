/Share sosial media/  
function shareOnFacebook() {
    var urlToShare = window.location.href; // URL yang ingin Anda bagikan
    var facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(urlToShare);
    window.open(facebookShareUrl, '_blank');
}

function shareOnTelegram() {
    var urlToShare = window.location.href; // URL yang ingin Anda bagikan
    var textToShare = 'Check out this post'; // Pesan yang ingin Anda bagikan

    // Buat URL dengan format yang sesuai untuk berbagi ke Telegram
    var telegramShareUrl = 'https://t.me/share/url?url=' + encodeURIComponent(urlToShare) + '&text=' + encodeURIComponent(textToShare);

    // Buka tautan berbagi ke Telegram dalam tab baru
    window.open(telegramShareUrl, '_blank');
}

function shareOnWhatsApp() {
    var urlToShare = window.location.href; // Mendapatkan URL halaman saat ini
    var whatsappShareUrl = 'whatsapp://send?text=' + encodeURIComponent(urlToShare); // Membuat URL share untuk WhatsApp
    window.open(whatsappShareUrl); // Membuka URL share di jendela baru
}

function sharePostOnWhatsApp(postId) {
    // Menggunakan URL dari halaman web dan menambahkan ID postingan sebagai parameter
    var urlToShare = window.location.origin + '/post/' + postId; // Misalnya, '/post/' + postId adalah URL postingan tunggal di situs web Anda
    var whatsappShareUrl = 'whatsapp://send?text=' + encodeURIComponent(urlToShare); // Membuat URL share untuk WhatsApp
    window.open(whatsappShareUrl); // Membuka URL share di jendela baru
}
