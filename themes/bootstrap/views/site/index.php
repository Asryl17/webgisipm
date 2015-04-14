<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<div id="page">
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <!--Sidebar content-->
            <div class="search">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="submit" class="btn" style="margin-top: 5px;">OK</button>

                    </div>

                </form>
            </div>
            <div class="side">
                <div class="container">
                    <h5>KATEGORI</h5>
                    <form role="form">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">IPM</label>
                        </div>
                        <div class="checkbox">
                            <label><input style="padding-left: 5px;"type="checkbox" value="">Angka Harapan Hidup</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input style="padding-left: 5px;" type="checkbox" value="" >Angka Melek Huruf</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input style="padding-left: 5px;"type="checkbox" value="" >Rata-Rata Lama Sekolah</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input style="padding-left: 5px;" type="checkbox" value="">Pendapatan Perkapita</label>
                        </div>
                    </form>
                </div>

            </div>
            <div class="side">
                
                <select multiple role="form">
                    
                </select>
            </div>

            <div class="side">
                <p> Kamu</p>
            </div>
        </div>
        
            <!--Body content-->
            <ul class="nav nav-tabs ">
                <li class="li">
                    <a href="#">Peta</a>
                </li>
                <li class="li"><a href="">Tabel</a></li>
                <li class="li"><a href="">Grafik</a></li>

            </ul>

</div>

       
    </div>
</div>



