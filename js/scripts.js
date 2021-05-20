document.getElementById("btnClick").addEventListener('click', function() {
    let selectBox = document.getElementById('selectDrop').value;
    const optionItem = document.getElementById("selectDrop").childNodes(option);
    console.log(optionItem);
})