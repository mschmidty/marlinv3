var revealPanel = function(buttonReveal, panel, buttonClose, greyArea){
  jQuery(document).ready(function($){
    //reveal panel
    $(buttonReveal).on('click', function() {
      $(panel).toggleClass('toggle-open');
      $(greyArea).addClass('blur-content');
    });
    //Close Panel
    $(buttonClose).on('click', function () {
      $(panel).removeClass('toggle-open');
      $(greyArea).removeClass('blur-content');
    });

    $(greyArea).on('click',function(){
      $(panel).removeClass('toggle-open')
      $(greyArea).removeClass('blur-content')
    });
  });
}

revealPanel('.toggle-nav', '.menu-nav-container', '.close-toggle', '.content-cover');
