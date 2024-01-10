document.getElementById('filter_manufacturer_id').addEventListener('change',
function()
{
    let manufacturerId = this.value || this.options[this.selectedIndex].value;
    window.location.href = window.location.href.split("?")[0] + '?manufacturer_id=' + manufacturerId
})

document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        if(confirm('Are you sure you want to delete this item?')) {
            let action = this.getAttribute('href')
            let form = document.getElementById('form-delete')
            form.setAttribute('action', action)
            form.submit()
        }
    });
});
