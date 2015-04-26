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
    p{
        margin: 0px;
    }

    #wrapper{
        border: 1px solid #999;
        margin: 20px;
    }

    #header{
        background-color: #336699;
        color: #fff;
        margin: 10px 10px;
        padding: 5px;
    }

    #column-1{
        box-sizing: border-box;
        float: left;
        padding: 5px 10px 5px 10px;
        width: 33%;
    }

    #column-2{
        box-sizing: border-box;
        float: left;
        padding: 5px 10px 5px 10px;
        width: 34%;
    }

    #column-3{
        box-sizing: border-box;
        float: left;
        padding: 5px 10px 5px 10px;
        width: 33%;
    }

    #footer{
        background-color: #336699;
        color: #fff;
        margin: 10px 10px;
        padding: 5px;
        clear: both;
    }
</style>
    <div class="container">
        <!-- Example row of columns -->
        <h2>Three Columns</h2>
        <div class="row">
            <div class="col-md-12">
                <div id="wrapper">
                    <div id="header">
                        Header
                    </div>
                    <div id="content">
                        <div id="column-1">
                            <p>
                                Pellentesque magna est, accumsan rhoncus erat sed, sodales lobortis metus. Pellentesque euismod vel
                                tortor non sagittis. Nam quis augue sagittis, tempus nisi a, semper urna. Suspendisse nibh enim, hendrerit
                                ut maximus sit amet, accumsan consectetur purus. Cras vitae mauris non tellus aliquet eleifend. Praesent
                                aliquet dui fermentum ante congue, ac sagittis metus molestie. Donec in ultrices erat. In ut leo lacinia
                                nulla tincidunt auctor. Aenean in ullamcorper tortor. Aliquam gravida eros dui, ac egestas purus efficitur
                                at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus luctus metus vitae gravida
                                bibendum. Aenean sed auctor felis. Proin orci tellus, ullamcorper vel scelerisque sed, fringilla non sapien.
                                Phasellus vel elit nec arcu dictum pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas.
                            </p>
                        </div>
                        <div id="column-2">
                            <p>
                                Duis velit nisi, hendrerit at mauris at, rhoncus semper orci. Vivamus venenatis, ante eget ornare sagittis,
                                ante metus suscipit magna, nec placerat ligula justo in lorem. Nullam scelerisque mollis sem, ac lacinia sem
                                semper eu. Phasellus a mauris in turpis aliquet facilisis. In vitae posuere eros. Suspendisse lobortis, lorem
                                id bibendum sodales, turpis diam tempus nisi, sed dictum dolor velit viverra sapien. Quisque tempus elementum
                                magna ut tristique. Aliquam eu diam arcu. Morbi congue blandit lacinia. Quisque semper cursus est, nec pellentesque
                                eros dictum sed. Aenean efficitur sodales augue eget imperdiet. Class aptent taciti sociosqu ad litora torquent per
                                conubia nostra, per inceptos himenaeos. Sed egestas sed turpis non suscipit. Suspendisse mattis nunc non convallis
                                dignissim.
                            </p>
                        </div>
                        <div id="column-3">
                            <p>
                                Nam sit amet lacus vel dolor sollicitudin vehicula feugiat et turpis. Aliquam ultricies lacinia sapien, eu
                                finibus quam fermentum ut. Sed a fermentum diam. Suspendisse viverra dolor tempor, viverra eros sit amet,
                                porta augue. Ut aliquam consequat neque vitae congue. Phasellus egestas vehicula erat ac elementum. Nam sed
                                augue ac purus lacinia facilisis sed id arcu. Nullam vitae semper ipsum. Duis quis elit pretium, accumsan lorem
                                id, finibus nisl. Integer efficitur interdum quam, a laoreet neque ultricies ut. Morbi egestas quis diam in
                                maximus. Nam sit amet nibh a felis hendrerit accumsan. Donec blandit quam risus, id facilisis elit dignissim
                                vel. Phasellus ornare dapibus mi vitae sodales. Duis commodo imperdiet mollis. Integer ac tortor vestibulum,
                                ultricies nunc vitae, vehicula justo.
                            </p>
                        </div>
                    </div>
                    <div id="footer">
                        Footer
                    </div>
                </div><!-- /.wrapper -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->



<?php

loadBottom();
?>