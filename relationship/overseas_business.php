<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/relationship.css">

</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>We bring <span>hope</span> to neighbors<br>in despair around the world</h2>
        </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_lnb.php'); ?>
    </div>
    
    <!-- Content -->
    <main id="content" class="">
        <div class="container">
            <div class="page-header">
                            <h1>International sponsorship establishment</h1>
                        </div>
						<section class="">
                            <div class="section-header">
                                <h2>Oversea Sponsorship Establishment</h2>
                            </div>
                            <p>provides support for a better educational system and improve quality of life of the children living in poor areas and mountain villages. It maintains close cooperation and management with the overseas branches for more children to be supported. There are still more poor countries needing for assistant, and there are still a lot of children waiting for your support. </p>
                        </section>
						<? for ($i=0; $row=sql_fetch_array($result); $i++){ ?>
                        <section class="country">
                            <h2>
                                <span class="flag-icon flag-icon-<?=get_flag($row["gov_name"],"gov_name")?>"></span>
                                <i><?=$row["gov_ename"]?></i> <!-- <?=$row["gov_name"]?> -->
                            </h2>
                            <div>
                                <table class="table">
									<colgroup>
										<col width="100"/>
										<col width=""/>
										<col width="100"/>
										<col width=""/>
									</colgroup>
                                    <tr>
										<?
										$mod = 2;
										$csql = " select * from ".$mode." where gov_name = '".$row["gov_name"]."' order by ob_order desc, idx desc ";
										$cresult = sql_query($csql);
										for($j=0;$crow = sql_fetch_array($cresult);$j++){
											if($j % $mod == 0) echo "</tr><tr>";
										?>
                                        <th style="max-width:100px;"><?=$crow["ob_title"]?></th>
                                        <td style="max-width:315px;"><?=$crow["ob_content"]?></td>
										<?
										}
										?>
                                    </tr>
                                </table>
                            </div>
                        </section>
						<? } ?>
						<div style="padding-top:15px;">
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/page_nav.php'); ?>
						</div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>