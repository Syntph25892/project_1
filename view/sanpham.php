<!-- sanpham -->

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

        <div class="trangsanpham">
            <div class="right me-5 ms-2">
              <div class="dm">Danh mục</div>
              <div class="boxdm">
                <ul>
                    <li><a href="index.php?act=sanpham&id=0">Tất cả</a></</li>
                  <?php foreach($danhmuc as $loai) :?>
                    <li><a href="index.php?act=sanpham&id=<?=$loai['id']?>"><?= $loai['ten_loai'] ?></a></li>
                  <?php endforeach ?>
                </ul>
              </div>

            </div>

            <div class="sanpham">
              <div class="tieudespdb">
                    <h2>Sản phẩm</h2>
            </div>



            <form class="mb-5 mt-5" action="index.php?act=sanpham" method="post">
                    <h2 class="mt-5 mb-3">Tìm kiếm sản phẩm</h2>
                    <input type="text" name="keyword" placeholder="Tên sản phẩm...">
                    <input type="submit" name="listgo" value="Tìm kiếm">
            </form>


              <div class="spdacbiet">
                  
                  <div class="row boxsp">
                    <?php foreach($sanpham as $sp) :?>
                      <div class="col box1sp">
                        <div class="imgspdb">
                          <a href="index.php?act=chitietsp&id=<?=$sp['id']?>"><img src="image/<?= $sp['hinh'] ?>" alt=""></a>
                        </div>
                        <div class="textspdb">
                            <div class="namesp">
                              <a href="index.php?act=chitietsp&id=<?=$sp['id']?>"><?= $sp['ten_hh'] ?></a>
                            </div>
                            <div class="price">
                              <p><?= $sp['don_gia'] ?>₫</p>
                            </div>
                            <!-- <a href="">
                              <div class="textspdbphu">
                                <h5>Thêm vào giỏ hàng</h5>
                              </div>
                            </a> -->
                            <form action="index.php?act=addtocart" method="post">
                              <input type="hidden" name="id" value="<?=$sp['id']?>">
                              <input type="hidden" name="ten_hh" value="<?=$sp['ten_hh']?>">
                              <input type="hidden" name="hinh" value="<?=$sp['hinh']?>">
                              <input type="hidden" name="don_gia" value="<?=$sp['don_gia']?>">
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
            
            <div class="left">

            </div>
          </div>
