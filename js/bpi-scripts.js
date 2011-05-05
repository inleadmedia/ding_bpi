jQuery(document).ready(function(){
  var DropDown = {
    dd : '',
    is_open:false,

    init: function(selector) {
      dd = jQuery(selector);

      dd.find('.rate_items').hide();

      dd.each(function(){
        var drop_down = jQuery(this);

        drop_down.find('.rate').click(function(){
          if (!DropDown.is_open) {
            drop_down.find('.rate_items').show().css({
              'width':drop_down.css('width')
            });

            drop_down.find('.rate').show();
            DropDown.is_open = true;
          }
          else {
            drop_down.find('.rate_items').hide();
            jQuery('.rate').removeClass('item_hover');
            DropDown.is_open = false;
          }
        });

        drop_down.find('.rate').mouseover(function(){
          if (DropDown.is_open) {
            jQuery(this).addClass('item_hover');
          }
        });

        drop_down.find('.rate').mouseout(function(){
          if (DropDown.is_open) {
            jQuery(this).removeClass('item_hover');
          }
        });
      });
    }
  }

  DropDown.init('.dropdown');
});
