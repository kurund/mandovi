(function($) {
  function markEmptyRows(context) {
    $('.crm-summary-row', context).each(function() {
      var content = this.querySelector('.crm-content');
      var isEmpty = content && !content.textContent.trim() && !content.querySelector('img, input, select, textarea');
      this.classList.toggle('mandovi-empty', Boolean(isEmpty));
    });
  }

  $(document).on('crmLoad', function(e) {
    markEmptyRows(e.target);
  });
})(CRM.$);
