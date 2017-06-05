$('.change-city-link').on('click',function(e){
    e.preventDefault();
    $($(this).data('target')).parent().children().addClass('hidden').end().end().removeClass('hidden');
    $('#currentCity').html($(this).text());
});
