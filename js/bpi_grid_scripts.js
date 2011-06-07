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
  
  jQuery('.dropdown select').msDropDown();
});
