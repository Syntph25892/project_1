 <!-- home -->


  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="image/trangchu1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="image/banner01.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="image/banner-quang-cao-dien-thoai_103211774.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="home">
            <div class="left">

            </div>
            <div class="sanpham">
              <div class="tieudespdb">
                    <h2>Sản phẩm đặc biệt</h2>
              </div>
              <div class="spdacbiet">
                  
                  <div class="row boxsp">
                    <?php foreach($sanphamdb as $spdb) :?>
                      
                      <div class="col box1sp">
                        <div class="imgspdb">
                          <a href="index.php?act=chitietsp&id=<?=$spdb['id']?>"><img src="image/<?= $spdb['hinh'] ?>" alt=""></a>
                        </div>
                        <div class="textspdb">
                            <div class="namesp">
                              <a href="index.php?act=chitietsp&id=<?=$spdb['id']?>"><?= $spdb['ten_hh'] ?></a>
                            </div>
                            <div class="price">
                              <p><?= $spdb['don_gia'] ?>₫</p>
                            </div>
                            <!-- <a href="">
                              <div class="textspdbphu">
                                <h5>Thêm vào giỏ hàng</h5>
                              </div>
                            </a> -->
                            <form action="index.php?act=addtocart" method="post">
                              <input type="hidden" name="id" value="<?=$spdb['id']?>">
                              <input type="hidden" name="ten_hh" value="<?=$spdb['ten_hh']?>">
                              <input type="hidden" name="hinh" value="<?=$spdb['hinh']?>">
                              <input type="hidden" name="don_gia" value="<?=$spdb['don_gia']?>">
                              <button class="textspdbphu" type="submit" name="addtocart">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                        <a href="">
                          <div class="iconspdb">
                            <div class="heart">
                              <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="eye">
                              <i class="fa-solid fa-eye"></i>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php endforeach ?>
                  </div> 
              </div>
              <div class="tieudetop10">
                <h2>Top 10 sản phẩm yêu thích</h2>
              </div>
              <div class="top10">
                <div class="row boxsp">
                    <?php foreach($sanphamtop10 as $spdb) :?>
                      <div class="col box1sp">
                        <div class="imgspdb">
                          <a href="index.php?act=chitietsp&id=<?=$spdb['id']?>"><img src="image/<?= $spdb['hinh'] ?>" alt=""></a>
                        </div>
                        <div class="textspdb">
                            <div class="namesp">
                              <a href="index.php?act=chitietsp&id=<?=$spdb['id']?>"><?= $spdb['ten_hh'] ?></a>
                            </div>
                            <div class="price">
                              <p><?= $spdb['don_gia'] ?>₫</p>
                            </div>
                            <!-- <a href="">
                              <div class="textspdbphu">
                                <h5>Thêm vào giỏ hàng</h5>
                              </div>
                            </a> -->
                            <form action="index.php?act=addtocart" method="post">
                              <input type="hidden" name="id" value="<?=$spdb['id']?>">
                              <input type="hidden" name="ten_hh" value="<?=$spdb['ten_hh']?>">
                              <input type="hidden" name="hinh" value="<?=$spdb['hinh']?>">
                              <input type="hidden" name="don_gia" value="<?=$spdb['don_gia']?>">
                              <button class="textspdbphu" type="submit" name="addtocart">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                        <a href="">
                          <div class="iconspdb">
                            <div class="heart">
                              <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="eye">
                              <i class="fa-solid fa-eye"></i>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php endforeach ?>
                  </div> 
              </div>
            </div>
            <div class="right me-3">
              <div class="dm">Danh mục</div>
              <div class="boxdm">
                <ul>
                  <?php foreach($danhmuc as $loai) :?>
                    <li><a href="index.php?act=sanpham&id=<?=$loai['id']?>"><?= $loai['ten_loai'] ?></a></li>
                  <?php endforeach ?>
                </ul>
              </div>

              <div class="boxtop">Top 10 sản phẩm xem nhiều nhất</div>
              <div class="boxtop10">
                <ul>
                  <?php foreach($sanphamtop10 as $top10) :?>
                    <li><a href="index.php?act=chitietsp&id=<?=$top10['id']?>"><img class="me-3" src="image/<?= $top10['hinh']?>" alt=""></a>  <a href="index.php?act=chitietsp&id=<?=$top10['id']?>"><?= $top10['ten_hh'] ?></a></li>
                  <?php endforeach ?>
                </ul>
              </div>

            </div>
          </div>
