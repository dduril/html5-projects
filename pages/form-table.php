<?php
/**
 * Created by PhpStorm.
 * User: Doug
 * Date: 4/23/2015
 * Time: 6:44 PM
 */

include ("../lib/template.php");

$page_title = "HTML5 Examples";
loadTop($page_title);
?>
<style type="text/css">
    table, tr, td{
        margin: 5px;
        padding: 5px;
		vertical-align: top;
    }
</style>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div>
                            <h2>Survey Form</h2>
                            <p>Please take a moment to complete our survey.</p>
                    </div>
                    <table>
                        <tr>
                            <td>
                                Password:
                            </td>
                            <td>
                                <input type="password" id="password"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                First Name:
                            </td>
                            <td>
                                <input type="text" id="firstName" size="30" maxlength="25"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Last Name:
                            </td>
                            <td>
                                <input type="text" id="lastName" size="30" maxlength="25" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Favorite website:
                            </td>
                            <td>
                                <input type="url" id="favoriteWebsite" size="30" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Your age in years:
                            </td>
                            <td>
                                <input type="number" id="age" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Programming languages:
                            </td>
                            <td>
                                <input type="checkbox" id="chkCSharp" checked="checked" />&nbsp;C#<br />
                                <input type="checkbox" id="chkJava" />&nbsp;Java<br />
                                <input type="checkbox" id="chkPHP" />&nbsp;PHP<br />
                                <input type="checkbox" id="chkPython" />&nbsp;Python<br />
                                <input type="checkbox" id="chkRuby" />&nbsp;Ruby<br />
                            </td>
                        </tr>
                        <tr>
                            <td>Rate your experience:</td>
                            <td>
                                <input type="radio" id="rdoOne" name="experience" />&nbsp;1 - Noob<br />
                                <input type="radio" id="rdoTwo" name="experience" />&nbsp;2 - Beginner<br />
                                <input type="radio" id="rdoThree" name="experience" />&nbsp;3 - Journeyman<br />
                                <input type="radio" id="rdoFour" name="experience" />&nbsp;4 - Expert<br />
                                <input type="radio" id="rdoFive" name="experience" />&nbsp;5 - Ninja<br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Comments:
                            </td>
                            <td>
                                <textarea id="comments" rows="5" cols="30" spellcheck="true"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email address:
                            </td>
                            <td>
                                <input type="email" size="30" placeholder="me@somedomain.com" required />
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input type="submit" class="btn btn-primary btn-s" />
                                <input type="reset" class="btn btn-primary btn-s" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


<?php

loadBottom();
?>