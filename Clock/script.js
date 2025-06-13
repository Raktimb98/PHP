function updateClocks() {
    const now = new Date();

    // Analog Clock
    const seconds = now.getSeconds();
    const minutes = now.getMinutes();
    const hours = now.getHours() % 12;

    document.getElementById('hour-hand').style.transform = 
        `rotate(${(hours * 30) + (minutes * 0.5)}deg)`;
    document.getElementById('minute-hand').style.transform = 
        `rotate(${(minutes * 6) + (seconds * 0.1)}deg)`;
    document.getElementById('second-hand').style.transform = 
        `rotate(${seconds * 6}deg)`;

    // Digital Clock
    const digitalTime = now.toLocaleTimeString('en-IN', {hour12: false});
    document.getElementById('digital-clock').textContent = digitalTime;
}

// Update every second
setInterval(updateClocks, 1000);
updateClocks(); // Initial update
