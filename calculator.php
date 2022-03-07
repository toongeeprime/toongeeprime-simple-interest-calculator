<?php defined( 'ABSPATH' ) || exit;

/**
 *		SIMPLE INTEREST CALCULATOR
 */

add_shortcode( 'toongeeprime_SI_calculator', 'toongeePrime_simpleInterestCalculator' );
function toongeePrime_simpleInterestCalculator() {

$cal	=	'<div id="prime_calculatorWrap" class="prel">';
$cal	.=	'<div id="prime_calculator">';
$cal	.=	'<div id="calcBox">';
$cal	.=	'<div id="calcHdr"><h3>Simple Interest Calculator</h3></div>';
$cal	.=	'<div id="calc_inputWrap">';
$cal	.=	'<div id="calc_inputs">';
$cal	.=	'<div class="calc_inps initial strch">';
$cal	.=	'<label for="calc_init_amount">Initial Amount</label>';
$cal	.=	'<input type="number" id="calc_init_amount" value="10000" tabindex="1" step="10" />';
$cal	.=	'</div>';
$cal	.=	'<div class="calc_inps rate strch">';
$cal	.=	'<label for="calc_int_rate">Interest Rate</label>';
$cal	.=	'<input type="number" id="calc_int_rate" value="10" tabindex="1" min="1" max="100"><span>%</span>';
$cal	.=	'</div>';
$cal	.=	'<div class="flex">';
$cal	.=	'<div class="calc_inps duration">';
$cal	.=	'<label for="calc_duration">Duration</label>';
$cal	.=	'<input type="number" id="calc_duration" value="3" tabindex="1" min="1" max="50" />';
$cal	.=	'</div>';
$cal	.=	'<div class="calc_inps time">';
$cal	.=	'<label for="calc_m_y"></label>';
$cal	.=	'<select id="calc_m_y" value="3" tabindex="1">';
$cal	.=	'<option value="month">Month(s)</option>';
$cal	.=	'<option value="year">Year(s)</option>';
$cal	.=	'</select>';
$cal	.=	'</div>';
$cal	.=	'</div>';
$cal	.=	'<div id="calc_screen">';
$cal	.=	'<p id="ttlhd">Total:</p>';
$cal	.=	'<input id="resultTotal" name="resultTotal" class="results" readonly>';
$cal	.=	'<em>Interest:</em>';
$cal	.=	'<input id="interestAmt" name="interestAmt" class="results" readonly>';
$cal	.=	'</div>';
$cal	.=	'<div id="calcgetResult">';
$cal	.=	'<p class="calcgetResult button btn">Get Result</p>';
$cal	.=	'</div>';
$cal	.=	'</div>';
$cal	.=	'</div>';
$cal	.=	'</div><!-- #calcBox -->';
$cal	.=	'</div><!-- #prime_calculator -->';
$cal	.=	'</div>';

return $cal;

}
