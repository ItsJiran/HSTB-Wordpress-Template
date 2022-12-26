
// CLASS TOGGLE 
function classToggleById(target_id){
    $element = document.getElementById(target_id);
    if( $element.classList.contains('active') ) $element.classList.remove('active');
    else                                        $element.classList.add('active');
}
function classToggleByElement(element){
    if(element == undefined) return;
    if( element.classList.contains('active') ) element.classList.remove('active');
    else                                       element.classList.add('active');
}

// CLASS EVENT FOR SIDEBAR NAVIGATION
var sidebar_dropdown_btn = document.getElementsByClassName('sidebar-dropdown');
var sidebar_container = document.getElementsByClassName('sidebar-option__container')[0];

for(let btn of sidebar_dropdown_btn){

    btn.addEventListener('click', (e)=>{

        // get parent
        let parent_element   = btn.parentElement;

        // get current active 
        let current_active = sidebar_container.getElementsByClassName('active')[0];

        if(parent_element == current_active){
            classToggleByElement(parent_element);
        } else {
            classToggleByElement(parent_element);
            classToggleByElement(current_active);
        } 

    })
}

