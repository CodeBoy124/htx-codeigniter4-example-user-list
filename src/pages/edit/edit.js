let $nameInput = $("#input-name");
let $titleName = $("#person-title");
$nameInput.on('input', () => {
    $titleName.text($nameInput.val());
});