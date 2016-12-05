// ISOTOPE
var $grid = $('.iso-grid');

$grid.isotope({
  percentPosition: true,
  itemSelector: '.iso-item',
  masonry: {
    columnWidth: '.iso-sizer'
  }
});

// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});
