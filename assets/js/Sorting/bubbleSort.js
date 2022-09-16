let bubbleBtn = document.getElementById(`bubble`)

const bubble = async () => {

    sortBtns.forEach(element => {
        element.disabled = true
    })

    const ele = document.querySelectorAll(`.block`)

    for (let i = 0; i < ele.length-1; i++) {
        
        for (let j = 0; j < ele.length - i - 1; j++) {
            ele[j].style.background = `blue`
            ele[j + 1].style.background = `blue`

            if (parseInt(ele[j].style.height) > parseInt(ele[j + 1].style.height)) {
                await sleep(delay)
                swap(ele[j], ele[j+1])

                ele[j].style.background = `#B9F8D3`
                ele[j + 1].style.background = `#B9F8D3`
                
                await sleep(delay)
            }

            ele[j].style.background = `cyan`
            ele[j + 1].style.background = `cyan`
        }
        ele[ele.length - 1 - i].style.background = `green`
    }
    ele[0].style.background = `green`

    sortBtns.forEach(element => {
        element.disabled = false
    })

}

bubbleBtn.addEventListener(`click`, () => {
    bubble()
})