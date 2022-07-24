const deleteBtn = document.querySelector('.btn-delete')
        const modalWindow = document.querySelector('.overlay')
        const cancelBtn = document.querySelector('.btn-cancel')

        deleteBtn.addEventListener('click', () => {
            modalWindow.classList.toggle('active')
        })

        cancelBtn.addEventListener('click', () => {
            modalWindow.classList.toggle('active')
        })