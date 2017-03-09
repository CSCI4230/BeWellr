$( function() {
    var progressbar = $( "#progressbar" ),
      progressLabel = $( ".progress-label" );

    progressbar.progressbar({
      value: false,
      change: function() {
        progressLabel.text( progressbar.progressbar( "value" ) + "% Completed" );
      },
      complete: function() {
        progressLabel.text( "Complete!" );
      }
    });

    function progress() {
      var val = Math.round(1/28 * 100) || 0;

      progressbar.progressbar( "value", val );

      if ( val < 99 ) {
        setTimeout( progress, 80 );
      }
    }

    setTimeout( progress, 2000 );
} );
