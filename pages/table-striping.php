<?php
/**
 * Created by PhpStorm.
 * User: Doug
 * Date: 4/23/2015
 * Time: 6:44 PM
 */

include ("../lib/template.php");

$page_title = "CSS3 Examples";
loadTop($page_title);
?>
<style type="text/css">
    th, td {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		color: #000000;
	}

	tr {
		border: 1px solid #999;
	}

	td {
		padding: 4px;
	}

	th {
		background-color: #333;
		color: #ddd;
		font-weight: bold;
		text-align: left;
		padding-left: 2px;
	}

	table{
		border: 1px solid #999;
		width: 600px;
	}

	.clickable {
		cursor: pointer;
	}

	.stripe1 {
		background-color: #ddd;
	}

	.stripe2 {
		background-color: #fff;
	}

	.highlight {
		background-color: #ffcc00;
	}
</style>
    <div class="container">
        <!-- Example row of columns -->
        <h2>Table Striping</h2>
        <div class="row">
            <div class="col-md-12">
                <div id="wrapper">
                    <div id="content">
                        <p>Simple demo showcasing the jQuery <code>addClass()</code> and <code>toggleClass()</code>.</p>
							<div id="myDivTableStriping">
							<table id="list" cellspacing="0">

								<colgroup class="group">
									<col class="title">
									<col class="runningTime">
									<col class="releaseYear">
									<col class="rating">
								</colgroup>

								<thead>
								<tr>
									<th scope="col">Title</th>
									<th scope="col">Running Time</th>
									<th scope="col">Release Year</th>
									<th scope="col">Rating</th>
								</tr>
								</thead>

								<tfoot>
								<tr><td colspan="4" class="last">Serious Science Fiction Films&nbsp;</td></tr>
								</tfoot>

								<tbody>
								<tr><td>Abyss&nbsp;</td>
									<td>171&nbsp;</td>
									<td>1993&nbsp;</td>
									<td>PG-13&nbsp;</td></tr>
								<tr><td>Akira&nbsp;</td>
									<td>124&nbsp;</td>
									<td>1987&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Alien&nbsp;</td>
									<td>116&nbsp;</td>
									<td>1979&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Aliens&nbsp;</td>
									<td>154&nbsp;</td>
									<td>1986&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Avatar&nbsp;</td>
									<td>162&nbsp;</td>
									<td>2010&nbsp;</td>
									<td>PG-13&nbsp;</td></tr>
								<tr><td>Bladerunner&nbsp;</td>
									<td>117&nbsp;</td>
									<td>1982&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Children of Men&nbsp;</td>
									<td>110&nbsp;</td>
									<td>2007&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Close Encounters of the Third Kind&nbsp;</td>
									<td>137&nbsp;</td>
									<td>1977&nbsp;</td>
									<td>PG&nbsp;</td></tr>
								<tr><td>Dark City&nbsp;</td>
									<td>96&nbsp;</td>
									<td>1998&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>District 9&nbsp;</td>
									<td>112&nbsp;</td>
									<td>2009&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Minority Report&nbsp;</td>
									<td>146&nbsp;</td>
									<td>2002&nbsp;</td>
									<td>PG-13&nbsp;</td></tr>
								<tr><td>Robocop&nbsp;</td>
									<td>103&nbsp;</td>
									<td>1987&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Star Wars - A New Hope&nbsp;</td>
									<td>123&nbsp;</td>
									<td>1977&nbsp;</td>
									<td>PG&nbsp;</td></tr>
								<tr><td>Star Wars - The Empire Strikes Back&nbsp;</td>
									<td>129&nbsp;</td>
									<td>1980&nbsp;</td>
									<td>PG&nbsp;</td></tr>
								<tr><td>Star Wars - Return of the Jedi&nbsp;</td>
									<td>136&nbsp;</td>
									<td>1983&nbsp;</td>
									<td>PG&nbsp;</td></tr>
								<tr><td>Starship Troopers&nbsp;</td>
									<td>130&nbsp;</td>
									<td>1997&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Terminator 1&nbsp;</td>
									<td>107&nbsp;</td>
									<td>1984&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Terminator 2 : Judgment Day&nbsp;</td>
									<td>156&nbsp;</td>
									<td>1991&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>Total Recall&nbsp;</td>
									<td>113&nbsp;</td>
									<td>1990&nbsp;</td>
									<td>R&nbsp;</td></tr>
								<tr><td>War of the Worlds&nbsp;</td>
									<td>116&nbsp;</td>
									<td>2005&nbsp;</td>
									<td>PG-13&nbsp;</td></tr>
								</tbody>
							</table>

							<br />
							<div id="selection"></div>
						</div>
                    </div>
                </div><!-- /.wrapper -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
<?php

loadBottom();
?>