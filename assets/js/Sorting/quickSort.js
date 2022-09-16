const partition = async (ele, l, r) => {
    let i = l - 1;
    // Styling pivot element
    ele[r].style.background = 'red';
    for(let j = l; j <= r - 1; j++){
        //Styling current element
        ele[j].style.background = 'cyan';
        await sleep(delay);

        if(parseInt(ele[j].style.height) < parseInt(ele[r].style.height)){
            i++;
            swap(ele[i], ele[j]);
            // Styling 
            ele[i].style.background = 'orange';
            if(i != j) ele[j].style.background = 'orange';
            await sleep(delay);
        }
        else{
            // Styling if not less than pivot
            ele[j].style.background = 'pink';
        }
    }
    i++; 
    await sleep(delay);
    swap(ele[i], ele[r]);
    // Styling
    ele[r].style.background = 'pink';
    ele[i].style.background = 'green';

    
    // Styling
    for(let k = 0; k < ele.length; k++){
        if(ele[k].style.background != 'green')
            ele[k].style.background = 'cyan';
    }

    return i;
}

const quick = async (ele, l, r) => {
    console.log("quick")

    sortBtns.forEach(element => {
        element.disabled = true
    })
    
    if(l < r){
        let pivot_index = await partition(ele, l, r);
        await quick(ele, l, pivot_index - 1);
        await quick(ele, pivot_index + 1, r);
    }
    else{
        if(l >= 0 && r >= 0 && l <ele.length && r <ele.length){
            ele[r].style.background = 'green';
            ele[l].style.background = 'green';
        }
    }

    sortBtns.forEach(element => {
        element.disabled = false
        
    })
}

document.getElementById(`quick`).addEventListener(`click`, () => {
    let ele = document.querySelectorAll('.block');
    let l = 0;
    let r = ele.length - 1;
    quick(ele, l, r);
})