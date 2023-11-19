
<div style="text-align:center;margin:15px"><a href="#xem-acc" style="background:#ed7603;color:#fff;border-radius:16px;padding:5px"><i class="fa fa-arrow-circle-down"></i> Mua nick <i class="fa fa-arrow-circle-down"></i></a></div>
        <div class="banner-border">
            <img class="banner-img" src="img/shop-nick-vn.jpg">
            <div class="banner">
                <ul style="list-style-image: url('img/icon/list.png')">

                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <h3 class="list-game">DANH MỤC SEVER</h3>
        <div id="xem-acc" class="line-center"></div>
        <div class="acc-title">
        <a href='index.php?act=trangchu'><div id='nso-title' class='type-acc active'>
                <h2 class='account-list'>Tất cả</h2>
            
            </div></a>
            <?php 
             foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);

                echo "      <a href='index.php?act=trangchu&dm=$id'><div id='nso-title' class='type-acc active'>
                <h2 class='account-list'>$name</h2>
            
            </div></a>";
             }
            ?>
        
     
            <!--<div id="nro-title" class="type-acc ">-->
            <!--	<h2 class="account-list">Ngọc&nbsp;Rồng</h2>-->
            <!--</div>-->
        </div>
        <div id="install">
            <div class="install" title="Lưu vào màn hình chính">Send to desktop</div>
        </div>

        <h3 class="list-game">SHOP ACC</h3>
        <div id="xem-acc" class="line-center"></div>
        <div id="acc">

            <div id="load_search"><i></i><i></i><i></i><i></i></div>
            <div id="nso-list" class="acc-list">
                <!-- acc -->
                
                <?php
               
            $i=0;
            foreach($listaccgame as $accgame){
                extract($accgame);
          
                $hinh =  "upload/".$img;
              
                $linksp="index.php?act=sanphamct&idsp=".$id;
                
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo '
                <div class="col-acc">
                    <div class="acc">
                        <div class="imgae">
                            <a href="'. $linksp .'">
                                <img class="img" src="'.$hinh.'" />
                                <span class="detail">Chi tiết</span>
                                <span class="price">'.number_format($price,0,"",".").'VND</span>
                                <span class="acc-id">#'.$id.'</span>
                                <div class="sale">-6%</div>
                                <div class="bg1">Thú 5✰</div>
                                <div class="bg1 up">Free up</div>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <div>Tên</div>
                            <div><b>'.$name.'</b></div>
                        </div>
                        <div class="col-xs-4">
                            <div>Sever</div>
                            <div><b>'.$namedm.'</b></div>
                        </div>
                        <div class="col-xs-4">
                            <div>Level</div>
                            <div><b>'.$lv.'</b></div>
                        </div>
                        <div class="clear"></div>
                        <div class="info-nso" title="'.$mota.'">'.$mota.'</div>
                    </div>
                </div>


             ';   
             $i+=1;
        }
    ?>
</div>
            <div id="load"><i></i><i></i><i></i><i></i></div>
            <script src="js/ninja.js"></script>
        </div>

        <div id="loader">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

    </div>
    <div id="modal"></div>
    <div class="modal fade" id="modal-getNotify" role="dialog"></div>