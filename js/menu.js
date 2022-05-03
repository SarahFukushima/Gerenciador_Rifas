$(document).ready(function(){

    $('.nav-link').click(function(e){

        let url = $(this).attr('href')

        $('#content').empty()
        $('#content').load(url)
    })
})