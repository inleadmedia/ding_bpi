var DropDown = {
  is_open : '',
  
  Init : function(ele) {
    DropDown.is_open = false;
    ele = ele.find('.flags_container');
    
    ele.find('.indicator').click(function() {
      if (!DropDown.is_open) {
        DropDown.Open(jQuery(this));
        DropDown.is_open = true;
      }
      else {
        DropDown.Close(jQuery(this));
        DropDown.is_open = false;
      }
    });
    
    ele.mouseleave(function() {
      DropDown.Close(ele.find('.indicator'));
      DropDown.is_open = false;
    });
  },
  
  Open : function(ele) {
    ele.addClass('active');
        
        ele.parent().animate({
          'height': '102'
        }, 100);
  },
  
  Close : function(ele) {
    ele.removeClass('active');
        
        ele.parent().animate({
          'height': '16'
        }, 100);
  }
}

jQuery(document).ready(function() {
  jQuery('body').append(jQuery('#myMenu'));
  jQuery('.sticky-enabled tbody tr').contextMenu({
    menu: 'myMenu'
  },
    function(action, el, pos) {
    alert(
      'Action: ' + action + '\n\n' +
      'Element ID: ' + jQuery(el).attr('id') + '\n\n' +
      'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
      'X: ' + pos.docX + '  Y: ' + pos.docY+ ' (relative to document)'
      );
  });
  
  jQuery('.dropdown').each(function(i, e) {
    DropDown.Init(jQuery(this).css({'z-index': 500 - i}));
  });
  
});
