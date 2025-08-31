const clockEl = document.getElementById("clock");
let serverTime = new Date(clockEl.dataset.time);

function updateClock() {
    serverTime.setSeconds(serverTime.getSeconds() + 1);

    let hours = serverTime.getHours();
    let minutes = serverTime.getMinutes();
    let seconds = serverTime.getSeconds();

    let ampm = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12;

    clockEl.innerText =
        `${hours.toString().padStart(2, '0')}:` +
        `${minutes.toString().padStart(2, '0')}:` +
        `${seconds.toString().padStart(2, '0')} ${ampm}`;
}

setInterval(updateClock, 1000);
updateClock();