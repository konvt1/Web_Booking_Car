<?php
$php_tuyenxe=showdm($cxdm );


// $php_tuyenxe = '';
// foreach ($cxdm as $dm) {
//     extract($dm);
//     $link='index.php?act=chuyenxe&iddm='.$matuyen;
//     $php_tuyenxe .= '<a href="'.$link.'">'.$tentuyen.'</a>';
// }


// $php_dsdm='';
// foreach ($dssp as $sp) {
    
//     extract($sp);
//     $php_dsdm.='<div class="box25 mr15 mb">
          
//                 <img src="img/hcm1.jpg" alt="">
//                 <span class="price">'.$diemden.'</span>
//                 <span class="price">'.$banggia.'</span>
//                 <button>Đặt Vé</button>
//             </div>';
// }
$php_chuyenxe_new=showsp($dssp);
if( $titlepage!="") $title= $titlepage;
else $title="Chuyến xe";




?>



<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h1>TUYẾN XE</h1><br><br>
            <?= $php_tuyenxe ?>

        </div>
        <?php
        if (isset($dssp) && !empty($dssp)) {
            $resultCount = count($dssp);
            echo "<p>Có  $resultCount  chuyến bạn tìm</p>";
        } else {
            echo "<p>Không tìm thấy.</p>";
        }
        ?>
        <div class="boxright">
            <h1><?= $title?></h1><br>
            <div class="containerfull mr30">
                <?=$php_chuyenxe_new?>
              
            </div>
        </div>


    </div>
</section>