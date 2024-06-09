$(document).ready(function(){
    // start: sidebar
    $('.sidebar-dropdown-menu').slideUp('fast')

    $('.sidebar-menu-item.has-dropdown > a, .sidebar-dropdown-menu-item.has-dropdown > a').click(function(e){
        e.preventDefault()

        $(this).next().slideToggle('start')
    })
    // end: sidebar
})

