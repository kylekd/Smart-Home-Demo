const toggle = document.querySelector('.toggle input')

toggle.addEventListener('click', () => {
    const on0ff = toggle.parentNode.querySelector('.onoff')

    on0ff.textContent = toggle.checked ? 'ON' : 'OFF'
})