// Script for side nav
$(document).ready(function(){ $(".button-collapse").sideNav(); });
// End Side nav

// Script for parallax initilization
$(document).ready(function(){
    $('.parallax').parallax();
});

// End parallax

//script for modal
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('#flash').modal();
});
//end modal

// script for selecting tabs
$('.tabs-swipe-demo').tabs({ 'swipeable': true });
//end tabs

// script for date-picker
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});

