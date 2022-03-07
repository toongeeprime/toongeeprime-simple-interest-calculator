<?php defined( 'ABSPATH' ) || exit;

/**
 *	A SIMPLE INTEREST CALCULATOR
 */

add_shortcode( 'toongeeprime_SI_calculator', 'toongeePrime_simpleInterestCalculator' );
function toongeePrime_simpleInterestCalculator() {

$calc	=	'<div id="prime_calculatorWrap" class="prel">';
$calc	.=	'<div id="prime_calculator">';
$calc	.=	'<div id="calcBox">';
$calc	.=	'<div id="calcHdr"><h3>Simple Interest Calculator</h3></div>';
$calc	.=	'<div id="calc_inputWrap">';
$calc	.=	'<div id="calc_inputs">';
$calc	.=	'<div class="calc_inps initial strch">';
$calc	.=	'<label for="calc_init_amount">Initial Amount</label>';
$calc	.=	'<input type="number" id="calc_init_amount" value="10000" tabindex="1" step="10" />';
$calc	.=	'</div>';
$calc	.=	'<div class="calc_inps rate strch">';
$calc	.=	'<label for="calc_int_rate">Interest Rate</label>';
$calc	.=	'<input type="number" id="calc_int_rate" value="10" tabindex="1" min="1" max="100"><span>%</span>';
$calc	.=	'</div>';
$calc	.=	'<div class="flex">';
$calc	.=	'<div class="calc_inps duration">';
$calc	.=	'<label for="calc_duration">Duration</label>';
$calc	.=	'<input type="number" id="calc_duration" value="3" tabindex="1" min="1" max="50" />';
$calc	.=	'</div>';
$calc	.=	'<div class="calc_inps time">';
$calc	.=	'<label for="calc_m_y"></label>';
$calc	.=	'<select id="calc_m_y" value="3" tabindex="1">';
$calc	.=	'<option value="month">Month(s)</option>';
$calc	.=	'<option value="year">Year(s)</option>';
$calc	.=	'</select>';
$calc	.=	'</div>';
$calc	.=	'</div>';
$calc	.=	'<div id="calc_screen">';
$calc	.=	'<p id="ttlhd">Total:</p>';
$calc	.=	'<input id="resultTotal" name="resultTotal" class="results" readonly>';
$calc	.=	'<em>Interest:</em>';
$calc	.=	'<input id="interestAmt" name="interestAmt" class="results" readonly>';
$calc	.=	'</div>';
$calc	.=	'<div id="calcgetResult">';
$calc	.=	'<p class="calcgetResult button btn">Get Result</p>';
$calc	.=	'</div>';
$calc	.=	'</div>';
$calc	.=	'</div>';
$calc	.=	'</div><!-- #calcBox -->';
$calc	.=	'</div><!-- #prime_calculator -->';
$calc	.=	'</div>';

return $calc;

}
