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
<style>
    label{
      width: 100px;
      text-align: right;
      display: inline-block;
      vertical-align: baseline;
    }
    input{
      width: 200px;
    }
    @media screen and (max-width: 480px)
    {
        label{
        width: auto;
        text-align: left;
        display: block;
      }
    }
  </style>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-12">
                <h2>Heading</h2>
                  <form action="" method="get">

                    <p><label for="firstname">Name:</label>
                      <input type="text" id="name" name="name" placeholder="First and Last" required /></p>

                    <p><label for="email">Email:</label>
                      <input type="email" id="email" name="email" required /></p>

                    <p><label for="phone">Mobile:</label>
                      <input type="tel" id="phone" name="phone" /></p>

                    <p><label for="url">Website:</label>
                      <input type="url" id="url" name="url" required /></p>

                    <p><label for="date">Start Date:</label>
                      <input type="date" id="date" name="date" /></p>

                    <p><label for="time">Start Time:</label>
                      <input type="time" id="time" name="time" /></p>

                    <p><label for="color">Theme Color:</label>
                      <input type="color" id="color" name="color" /></p>

                    <p><label for="number">Domains:</label>
                      <input type="number" id="number" name="number" /></p>

                    <p><label for="listitem">Stack:</label>
                      <input list="listitem">
                      <datalist id="listitem">
                        <option value="Node and Express">
                        <option value="PHP andMySQL">
                        <option value="Python and Django">
                        <option value="Ruby on Rails">
                      </datalist>

                    <p><label> </label>
                      <input type="submit" value="Submit Request"></p>

                  </form>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
<?php

loadBottom();
?>