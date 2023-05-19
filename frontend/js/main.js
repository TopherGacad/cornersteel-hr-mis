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
const otEditModal = document.getElementById("otEdit-modal-container")

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

//OVERTIME SEARCH
const overtimeTable = document.getElementById("overtime-table-body")
const overtimeSearch = document.getElementById("overtime-search")

overtimeSearch.addEventListener('input', () => {
  const searchText = overtimeSearch.value.toLowerCase();

  for (let i = 0; i < overtimeTable.rows.length; i++) {
    const row = overtimeTable.rows[i];
    const otName = row.cells[0].textContent.toLowerCase()
    const otCompany = row.cells[1].textContent.toLowerCase()
    const otDepartment = row.cells[2].textContent.toLowerCase()
    const otPosition = row.cells[3].textContent.toLowerCase()

    if (
      otName.includes(searchText) ||
      otCompany.includes(searchText) ||
      otDepartment.includes(searchText) ||
      otPosition.includes(searchText)
    ) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  }
});

//CHANGE SHIFT SEARCH
const shiftTable = document.getElementById("shift-table-body")
const shiftSearch = document.getElementById("shifts-search")

shiftSearch.addEventListener('input', () => {
  const searchText = shiftSearch.value.toLowerCase();

  for (let i = 0; i < shiftTable.rows.length; i++) {
    const row = shiftTable.rows[i];
    const shiftName = row.cells[0].textContent.toLowerCase()
    const shiftCompany = row.cells[1].textContent.toLowerCase()
    const shiftDepartment = row.cells[2].textContent.toLowerCase()
    const shiftApproved = row.cells[5].textContent.toLowerCase()

    if (
      shiftName.includes(searchText) ||
      shiftCompany.includes(searchText) ||
      shiftDepartment.includes(searchText) ||
      shiftApproved.includes(searchText)
    ) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  }
});

//OFFICIAL BUSINESS SHIFT SEARCH
const offBusTable = document.getElementById("offBusiness-table-body")
const offBusSearch = document.getElementById("offBusiness-search")

offBusSearch.addEventListener('input', () => {
  const searchText = offBusSearch.value.toLowerCase();

  for (let i = 0; i < offBusTable.rows.length; i++) {
    const row = offBusTable.rows[i];
    const offBusName = row.cells[0].textContent.toLowerCase()
    const offBusCompany = row.cells[1].textContent.toLowerCase()
    const offBusDepartment = row.cells[2].textContent.toLowerCase()
    const offBusStatus = row.cells[4].textContent.toLowerCase()
    const offBusApproved = row.cells[5].textContent.toLowerCase()

    if (
      offBusName.includes(searchText) ||
      offBusCompany.includes(searchText) ||
      offBusDepartment.includes(searchText) ||
      offBusStatus.includes(searchText) ||
      offBusApproved.includes(searchText)
    ) {
      row.style.display = ''
    } else {
      row.style.display = 'none'
    }
  }
})

//EDIT BUTTON

const otEdit = document.querySelector('.fa-pen-to-square')
otEdit.addEventListener("click", function(){
  otEditModal.style.display = "block"
  modalBg.style.display = "block"
})

//DISABLE ALL FIELDS ON EDIT MODAL
const form = document.getElementById("otEdit-form");
const elements = form.querySelectorAll("input, select, textarea");
const label = form.querySelectorAll("label")
const buttonContainerElements = form.querySelectorAll(".modal-btn-container input, .modal-btn-container button");

const cancelBtn = document.getElementById("cancel-btn").addEventListener("click", function(){
  otEditModal.style.display = "none"
  modalBg.style.display = "none"
  disableFields()

  for(let i = 0; i<label.length; i++){
    label[i].classList.add('dis-input')
  }
})

function disableFields(){
  for (let i = 0; i < elements.length; i++) {
    if (![...buttonContainerElements].includes(elements[i])) {
      elements[i].disabled = true;
      elements[i].classList.add('dis-input')
    }
  }
}
disableFields()

function activeFields(){
  for (let i = 0; i < elements.length; i++) {
    if (![...buttonContainerElements].includes(elements[i])) {
      elements[i].disabled = false;
      elements[i].classList.remove('dis-input')
    }
  }

  for(let i = 0; i<label.length; i++){
    label[i].classList.remove('dis-input')
  }
}

const otEditBtn = document.getElementById("otEdit-btn")
otEditBtn.addEventListener("click", function(){
  activeFields()
})






