<?php
/**
 * Created by PhpStorm.
 * User: Doug
 * Date: 4/23/2015
 * Time: 6:44 PM
 */

include ("../lib/template.php");

loadTop();
?>
<style type="text/css">
    table, tr, td{
        margin: 5px;
        padding: 5px;
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
                                <input type="text" id="firstName" maxlength="25"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Last Name:
                            </td>
                            <td>
                                <input type="text" id="lastName" maxlength="25" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Favorite website:
                            </td>
                            <td>
                                <input type="url" id="favoriteWebsite" />
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
                                <input type="checkbox" id="chkCSharp" checked="checked" />C#
                                <input type="checkbox" id="chkJava" />Java
                                <input type="checkbox" id="chkPHP" />PHP
                                <input type="checkbox" id="chkPython" />Python
                                <input type="checkbox" id="chkRuby" />Ruby
                            </td>
                        </tr>
                        <tr>
                            <td>Rate your experience:</td>
                            <td>
                                <input type="radio" id="rdoOne" name="experience" />1 - Noob
                                <input type="radio" id="rdoTwo" name="experience" />2 - Beginner
                                <input type="radio" id="rdoThree" name="experience" />3 - Journeyman
                                <input type="radio" id="rdoFour" name="experience" />4 - Expert
                                <input type="radio" id="rdoFive" name="experience" />5 - Ninja
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Comments:
                            </td>
                            <td>
                                <textarea id="comments" rows="5" cols="25" spellcheck="true"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email address:
                            </td>
                            <td>
                                <input type="email" placeholder="me@somedomain.com" required />
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input type="submit"/>
                                <input type="reset"/>
                                <input type="button" value="Cancel"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


<?php

loadBottom();
?>