// MAIN CONTENT CONTAINERS
const dashContain = document.getElementById("dash-container")
const leavesContain = document.getElementById("leaves-container")
const overtimeContain = document.getElementById("overtime-container")

//BUTTONS
const dashBtn = document.getElementById("dash-btn")
const leavesBtn = document.getElementById("leaves-btn")
const overtimeBtn = document.getElementById("overtime-btn")

// MAIN CONTENTS CONTAINER SELECTOR
dashBtn.addEventListener("click", function(){
    dashContain.style.display = "block"
    leavesContain.style.display = "none"
    overtimeContain.style.display = "none"

    dashBtn.classList.add('btn-active')
    leavesBtn.classList.remove('btn-active')
    overtimeBtn.classList.remove('btn-active')
})
leavesBtn.addEventListener("click", function(){
    dashContain.style.display = "none"
    leavesContain.style.display = "block"
    overtimeContain.style.display = "none"

    dashBtn.classList.remove('btn-active')
    leavesBtn.classList.add('btn-active')
    overtimeBtn.classList.remove('btn-active')
})
overtimeBtn.addEventListener("click", function(){
    dashContain.style.display = "none"
    leavesContain.style.display = "none"
    overtimeContain.style.display = "block"

    dashBtn.classList.remove('btn-active')
    leavesBtn.classList.remove('btn-active')
    overtimeBtn.classList.add('btn-active')
})


