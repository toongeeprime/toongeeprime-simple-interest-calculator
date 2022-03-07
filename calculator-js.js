/**
 *	CALCULATOR JS
 */

( function($) {

$( '.calcgetResult' ).on( 'click', prime_calcInterest );

$( '#calcHdr' ).click( function() {
	$( '#prime_calculator' ).toggleClass( 'calc_on' );
	$( '#calc_screen' ).removeClass( 'prime_on' );
} );

$( '#prime_calculator' ).on( 'keyup keypress', function( ev ) {
	if ( ev.which === 13 ) {
		ev.preventDefault();
		prime_calcInterest();
		return false;
	}
} );



function prime_calcInterest() {
let initAmt	=	$( '#calc_init_amount' ).val(),
	intrate	=	$( '#calc_int_rate' ).val(),
	mthYr	=	$( '#calc_m_y' ).val(),
	durTn	=	$( '#calc_duration' ).val(),
	intAmt	=	$( '#interestAmt' ),
	intTotl	=	$( '#resultTotal' );

// Calculating:
if( mthYr == 'year' ) {
	duratn	=	parseInt( durTn ) * 12;
}
else {
	duratn	=	parseInt( durTn );
}

let princpl	=	parseInt( initAmt ),
	intrAmt	=	initAmt * ( intrate / 100 ),
	simple_intrAmt	=	duratn * ( initAmt * ( intrate / 100 ) ),
	totalIntAmount	=	princpl + simple_intrAmt;

	$( '#calc_screen' ).addClass( 'prime_on' );
	intTotl.val( totalIntAmount.toLocaleString() );
	intAmt.val( simple_intrAmt.toLocaleString() );

}


$( '#prime_calculator' ).ready( function() {
	$( "#calc_init_amount" ).val( parseInt( $( "#calc_init_amount" ).val() ) );
}

);

} )(jQuery);
