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




// MODAL CONTAINERS
const modalBg = document.getElementById("bg")
const overtimeModal = document.getElementById("overtime-modal-container")
const shiftModal = document.getElementById("shift-modal-container")
const offbusModal = document.getElementById("offBusiness-modal-container")

// ADD BUTTONS
const addOvertimeBtn = document.getElementById("addOvertime-btn").addEventListener("click",function(){

    overtimeModal.style.display = "block"
    modalBg.style.display = "block"
})
const addShiftBtn = document.getElementById("addShifts-btn").addEventListener("click",function(){
    shiftModal.style.display = "block"
    modalBg.style.display = "block"
}) 
const addOffBusBtn = document.getElementById("addOffBusiness-btn").addEventListener("click",function(){
    offbusModal.style.display = "block"
    modalBg.style.display = "block"
})


// MODAL CANCEL BUTTONS
const otCancelBtn = document.getElementById("otCancel-btn").addEventListener("click",function(){
        
    document.getElementById("overtime-form").reset()

    overtimeModal.style.display = "none"
    modalBg.style.display = "none"
})
const shiftCancelBtn = document.getElementById("shiftCancel-btn").addEventListener("click", function(){
    
    document.getElementById("shift-form").reset()

    shiftModal.style.display = "none"
    modalBg.style.display = "none"
})
const offBusCancelBtn = document.getElementById("offBusCancel-btn").addEventListener("click",function(){
    document.getElementById("offBusiness-form").reset()

    offbusModal.style.display = "none"
    modalBg.style.display = "none"
})
