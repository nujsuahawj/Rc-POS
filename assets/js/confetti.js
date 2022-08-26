var confettiElement = document.getElementById('my-canvas');
const myTimeout = setTimeout(myGreeting, 30000);

function myGreeting() {
    confettiElement.style.display = "none";
    return true;
}

function hnubqub() {
    var confettiSettings = {
        target: confettiElement
    };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
}
hnubqub()