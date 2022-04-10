let buttons = document.getElementsByClassName('dashboard-language-switcher')
for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function () {
        let wrapper = this.closest('.dashboard-language-wrapper')
        let inputs = wrapper.querySelectorAll("input, select, textarea")
        let language = this.dataset.language
        for (let j = 0; j < inputs.length; j++) {
            let input = inputs[j]
            let name = input.getAttribute('name')
            let new_name = name.split('_')[0] + '_' + language
            input.setAttribute('name', new_name)
        }
    })
}
