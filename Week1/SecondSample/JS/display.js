const display = document.getElementById('display');

function clearDisplay() {
  display.value = '';
}

function addNumber(number) {
  display.value += number;
}