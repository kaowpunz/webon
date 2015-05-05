<?php
/*

calculator section including js and all of algorithm to calculate amortization

2015-05-04 pongsak

*/

?>


<h1>Mortgage Loan Calculator</h1>
<form>
	<label>Select the start date:</label>
		<select class="span3" id="month">
			<option label="Jan" value="1" selected="selected">Jan</option>
			<option label="Feb" value="2">Feb</option>
			<option label="Mar" value="3">Mar</option>
			<option label="Apr" value="4">Apr</option>
			<option label="May" value="5">May</option>
			<option label="Jun" value="6">Jun</option>
			<option label="Jul" value="7">Jul</option>
			<option label="Aug" value="8">Aug</option>
			<option label="Sep" value="9">Sep</option>
			<option label="Oct" value="10">Oct</option>
			<option label="Nov" value="11">Nov</option>
			<option label="Dec" value="12">Dec</option>
		</select>
		<select class="span3" id="year">
			<option label="1990" value="1990">1990</option>
			<option label="1991" value="1991">1991</option>
			<option label="1992" value="1992">1992</option>
			<option label="1993" value="1993">1993</option>
			<option label="1994" value="1994">1994</option>
			<option label="1995" value="1995">1995</option>
			<option label="1996" value="1996">1996</option>
			<option label="1997" value="1997">1997</option>
			<option label="1998" value="1998">1998</option>
			<option label="1999" value="1999">1999</option>
			<option label="2000" value="2000">2000</option>
			<option label="2001" value="2001">2001</option>
			<option label="2002" value="2002">2002</option>
			<option label="2003" value="2003">2003</option>
			<option label="2004" value="2004">2004</option>
			<option label="2005" value="2005">2005</option>
			<option label="2006" value="2006">2006</option>
			<option label="2007" value="2007">2007</option>
			<option label="2008" value="2008">2008</option>
			<option label="2009" value="2009">2009</option>
			<option label="2010" value="2010">2010</option>
			<option label="2011" value="2011">2011</option>
			<option label="2012" value="2012">2012</option>
			<option label="2013" value="2013">2013</option>
			<option label="2014" value="2014" selected="selected">2014</option>
			<option label="2015" value="2015">2015</option>
			<option label="2016" value="2016">2016</option>
		</select>
  <label>Enter the loan amount:</label>
  <div class="input-prepend">
    <span class="add-on">$</span>
    <input class="span3" id="amount" type="text" placeholder="Loan Amount">
  </div>

  <label>Enter the annual interest rate:</label>
  <div class="input-append">
    <input class="span3" id="interest" type="text" placeholder="Interest Rate">
    <span class="add-on">%</span>
  </div>

  <label>Do you want to calculate based on months or years?</label>
  <select class="span3" id="monthly-yearly">
    <option label="select.." value="0" selected="selected" disabled>Select...</option>
    <option label="years" value="years">Years</option>
    <option label="months" value="months">Months</option>
  </select>
  <div id="years-field">
    <label>Enter the term years of the loan:</label>
    <div class="input-append">
      <input class="span3" id="term-years" type="text" placeholder="Term">
      <span class="add-on">Years</span>
    </div>
  </div>
  <div id="months-field">
    <label>Enter the term months of the loan:</label>
    <div class="input-append">
      <input class="span3" id="term-months" type="text" placeholder="Term">
      <span class="add-on">Months</span>
    </div>
  </div>
</form>
