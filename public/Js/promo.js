function applyVoucher(voucherCode) {
    // You can add additional logic here to handle the voucher
    // For example, storing it in localStorage
    localStorage.setItem('selectedVoucher', voucherCode);
    
    // Show a success message
    alert(`Voucher ${voucherCode} has been applied!`);
    
    // Navigate back to home page
    window.location.href = 'home.html';
}

// Add focus handling for promo code input
document.addEventListener('DOMContentLoaded', function() {
    const promoInput = document.querySelector('.promo-input');
    
    promoInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const promoCode = this.value.trim();
            if (promoCode) {
                applyVoucher(promoCode);
            }
        }
    });
});