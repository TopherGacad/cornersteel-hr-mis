// MAIN CONTENT CONTAINERS
const dashContain = document.getElementById("dash-container")
const shiftsContain = document.getElementById("shifts-container")
const overtimeContain = document.getElementById("overtime-container")

//BUTTONS
const dashBtn = document.getElementById("dash-btn")
const shiftsBtn = document.getElementById("shifts-btn")
const overtimeBtn = document.getElementById("overtime-btn")

// MAIN CONTENTS CONTAINER SELECTOR
dashBtn.addEventListener("click", function(){
    //MAIN CONTENT ACTIVATOR
    dashContain.style.display = "block"
    shiftsContain.style.display = "none"
    overtimeContain.style.display = "none"

    //BUTTON ACTIVE STYLING
    dashBtn.classList.add('btn-active')
    shiftsBtn.classList.remove('btn-active')
    overtimeBtn.classList.remove('btn-active')
})
shiftsBtn.addEventListener("click", function(){
    //MAIN CONTENT ACTIVATOR
    dashContain.style.display = "none"
    shiftsContain.style.display = "block"
    overtimeContain.style.display = "none"

    //BUTTON ACTIVE STYLING
    dashBtn.classList.remove('btn-active')
    shiftsBtn.classList.add('btn-active')
    overtimeBtn.classList.remove('btn-active')
})
overtimeBtn.addEventListener("click", function(){
    //MAIN CONTENT ACTIVATOR
    dashContain.style.display = "none"
    shiftsContain.style.display = "none"
    overtimeContain.style.display = "block"

    //BUTTON ACTIVE STYLING
    dashBtn.classList.remove('btn-active')
    shiftsBtn.classList.remove('btn-active')
    overtimeBtn.classList.add('btn-active')
})


