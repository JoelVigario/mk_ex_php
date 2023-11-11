input = document.getElementsByTagName('input')[0];
res = document.getElementsByClassName('resultado')[0];

if (input.value == '' || input.value === null) {
    res.style.display = 'none';
} else {
    res.style.display = 'block';
}


