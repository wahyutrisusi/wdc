// Event listener ketika DOM sudah siap
document.addEventListener('DOMContentLoaded', function() {
    // Inisialisasi tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Fungsi untuk menambah ke keranjang
    function addToCart(productId) {
        fetch('/api/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                productId: productId,
                quantity: 1
            })
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                updateCartBadge(data.cartCount);
                showAlert('Produk berhasil ditambahkan ke keranjang!', 'success');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showAlert('Gagal menambahkan produk ke keranjang.', 'danger');
        });
    }

    // Fungsi untuk memperbarui badge keranjang
    function updateCartBadge(count) {
        const badge = document.querySelector('.cart-badge');
        if(badge) {
            badge.textContent = count;
        }
    }

    // Fungsi untuk menampilkan alert
    function showAlert(message, type) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
        alertDiv.role = 'alert';
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        
        document.querySelector('main').insertAdjacentElement('afterbegin', alertDiv);
        
        setTimeout(() => {
            alertDiv.remove();
        }, 3000);
    }

    // Event listeners untuk tombol "Tambah ke Keranjang"
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const productId = button.dataset.productId;
            addToCart(productId);
        });
    });
}); 