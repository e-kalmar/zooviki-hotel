(() => {
    document.querySelector('.logo-title').addEventListener('click', () => {
        location.href = location.origin
    })

    alert('header');
    console.log('pig')
})()