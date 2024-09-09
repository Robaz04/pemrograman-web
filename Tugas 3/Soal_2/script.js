function hitung(operator) {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    let hasil = '';

    if (isNaN(num1) || isNaN(num2)) {
        hasil = 'Input tidak valid';
    } else {
        switch (operator) {
            case '+':
                hasil = num1 + num2;
                break;
            case '-':
                hasil = num1 - num2;
                break;
            case '*':
                hasil = num1 * num2;
                break;
            case '/':
                hasil = num1 / num2;
                break;
            default:
                hasil = 'Operator tidak valid';
        }
    }

    document.getElementById('result').value = hasil;
}