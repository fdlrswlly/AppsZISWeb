let modalShow = document.querySelector('.modal-show');
let modalClose = document.querySelector('.modal-close');
let modalContainer = document.querySelector('.modal-container');

modalShow.addEventListener('click', function(){
    let modal = modalContainer.firstChild.nextSibling;
    modalContainer.classList.add('active');
    modal.classList.add('fade-in')
    modal.classList.remove('fade-out')
})

modalClose.addEventListener('click', function(e){
    e.stopPropagation()
    let modal = modalContainer.firstChild.nextSibling;
    modal.classList.remove('fade-in')
    modal.classList.add('fade-out')
    
    setTimeout(function(){
        modalContainer.classList.remove('active')
     }, 499);
})

modalContainer.addEventListener('click', function(e){
    e.stopPropagation()
    this.classList.remove('active');
})