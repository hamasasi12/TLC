<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="text-lg font-medium mb-4">Detail Transaksi</h3>

                <div class="mb-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">Order ID:</p>
                            <p class="font-medium">{{ $payment->order_id }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Tanggal:</p>
                            <p class="font-medium">{{ $payment->created_at->format('d M Y H:i') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Jumlah Pembayaran:</p>
                            <p class="font-medium">Rp {{ number_format($payment->amount, 0, ',', '.') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Status:</p>
                            <p class="font-medium">Menunggu Pembayaran</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-8 mb-6">
                    <button id="pay-button"
                        class="px-6 py-3 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Bayar Sekarang
                    </button>
                </div>

                <div class="text-center text-gray-500 text-sm mt-4">
                    <p>Anda akan diarahkan ke halaman pembayaran Midtrans.</p>
                    <p>Setelah pembayaran selesai, Anda akan dikembalikan ke situs ini.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Midtrans JS SDK -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        document.getElementById('pay-button').onclick = function() {
            // Trigger snap popup
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    window.location.href = '{{ route('payments.finish') }}';
                },
                onPending: function(result) {
                    window.location.href = '{{ route('payments.finish') }}';
                },
                onError: function(result) {
                    window.location.href = '{{ route('payments.finish') }}';
                },
                onClose: function() {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        };
    </script>
</div>
