// MAIN CONTENT CONTAINERS
const dashContain = document.getElementById("dash-container")
const shiftsContain = document.getElementById("shifts-container")
const overtimeContain = document.getElementById("overtime-container")
const offBusContain = document.getElementById("offBusiness-container")

//BUTTONS
const dashBtn = document.getElementById("dash-btn")
const shiftsBtn = document.getElementById("shifts-btn")
const overtimeBtn = document.getElementById("overtime-btn")
const offBusBtn = document.getElementById("offBusiness-btn")

//MODAL BACKGROUND
const modalBg = document.getElementById("bg")

// MAIN CONTENTS CONTAINER SELECTOR
dashBtn.addEventListener("click", function(){
    //MAIN CONTENT ACTIVATOR
    dashContain.style.display = "block"
    shiftsContain.style.display = "none"
    overtimeContain.style.display = "none"
    offBusContain.style.display = "none"

    //BUTTON ACTIVE STYLING
    dashBtn.classList.add('btn-active')
    shiftsBtn.classList.remove('btn-active')
    overtimeBtn.classList.remove('btn-active')
    offBusBtn.classList.remove('btn-active')
})
shiftsBtn.addEventListener("click", function(){
    //MAIN CONTENT ACTIVATOR
    dashContain.style.display = "none"
    shiftsContain.style.display = "block"
    overtimeContain.style.display = "none"
    offBusContain.style.display = "none"

    //BUTTON ACTIVE STYLING
    dashBtn.classList.remove('btn-active')
    shiftsBtn.classList.add('btn-active')
    overtimeBtn.classList.remove('btn-active')
    offBusBtn.classList.remove('btn-active')
})
overtimeBtn.addEventListener("click", function(){
    //MAIN CONTENT ACTIVATOR
    dashContain.style.display = "none"
    shiftsContain.style.display = "none"
    overtimeContain.style.display = "block"
    offBusContain.style.display = "none"

    //BUTTON ACTIVE STYLING
    dashBtn.classList.remove('btn-active')
    shiftsBtn.classList.remove('btn-active')
    overtimeBtn.classList.add('btn-active')
    offBusBtn.classList.remove('btn-active')
})
offBusBtn.addEventListener("click",function(){
     //MAIN CONTENT ACTIVATOR
     dashContain.style.display = "none"
     shiftsContain.style.display = "none"
     overtimeContain.style.display = "none"
     offBusContain.style.display = "block"
 
     //BUTTON ACTIVE STYLING
     dashBtn.classList.remove('btn-active')
     shiftsBtn.classList.remove('btn-active')
     overtimeBtn.classList.remove('btn-active')
     offBusBtn.classList.add('btn-active')
})

const overtimeModal = document.getElementById("overtime-modal-container")
// ADD BUTTONS
const addOvertimeBtn = document.getElementById("addOvertime-btn").addEventListener("click",function(){

        overtimeModal.style.display = "block"
        modalBg.style.display = "block"
})

// MODAL BUTTONS
const otCancelBtn = document.getElementById("otCancel-btn").addEventListener("click",function(){
        
        document.getElementById("overtime-form").reset()

        overtimeModal.style.display = "none"
        modalBg.style.display = "none"
})
