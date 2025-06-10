<div>
    <div id="timer" class="text-[#3A6EA5] text-xl font-bold">Loading...</div>

    <script>
        const endTime = new Date(@json($endTime)).getTime();

        const timerElement = document.getElementById("timer");

        const interval = setInterval(() => {
            const now = new Date().getTime();
            const distance = endTime - now;

            if (distance <= 0) {
                clearInterval(interval);
                timerElement.innerText = "00:00";
                Livewire.emit('timeExpired'); // trigger event to server
            } else {
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                timerElement.innerText = `${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")}`;
            }
        }, 1000);
    </script>
</div>
