<?php include './views/layout/header.php' ?>
<!-- Navbar -->
<?php include './views/layout/navbar.php' ?>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php' ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý danh sách thú cưng</h1>
        </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="col-12">
              <img type="width:500px; height:500px" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" class="product-image" alt="Product Image">
            </div>
            <div class="col-12 product-image-thumbs">
              <?php foreach ($listAnhSanPham as $key => $anhSP) { ?>
                <div class="product-image-thumb <?= $anhSP[$key] == 0 ? 'active' : '' ?>"><img src="<?= BASE_URL . $anhSP['link_hinh_anh'] ?>" alt="Product Image"></div>
              <?php } ?>

            </div>
          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3">Tên sản phẩm: <?= $sanPham['ten_san_pham'] ?></h3>
            <hr>
            <h4 class="mt-3">Giá tiền: <?= $sanPham['gia_san_pham'] ?></h4>
            <h4 class="mt-3">Giá khuyến mãi: <?= $sanPham['gia_khuyen_mai'] ?></h4>
            <h4 class="mt-3">Số lượng: <?= $sanPham['so_luong'] ?></h4>
            <h4 class="mt-3">Lượt xem: <?= $sanPham['luot_xem'] ?></h4>
            <h4 class="mt-3">Ngày nhập: <?= $sanPham['ngay_nhap'] ?></h4>
            <h4 class="mt-3">Danh mục: <?= $sanPham['ten_danh_muc'] ?></h4>
            <h4 class="mt-3">Trạng thái: <?= $sanPham['trang_thai'] == 1 ? 'Còn bán' : 'Dừng bán' ?></h4>
            <h4 class="mt-3">Mô tả: <?= $sanPham['mo_ta'] ?></h4>
          </div>
        </div>



        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="binh-luan" role="tabpanel" aria-labelledby="product-desc-tab">
            <div class="container-fluid">

              <div class="col-12">
                <hr>
                <h2>Bình luận</h2>
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap">

                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                      </div>
                    </div>

                  </div>

                  <div>
                    <table id="example1" class="table table-bordered table-striped ">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Người bình luận</th>
                          <th>Nội dung</th>
                          <th>Ngày bình luận</th>
                  
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($listBinhLuan as $key => $binhLuan) { ?>
                          <tr>
                            <td><?= $key + 1 ?></td>
                            <td><a href="<?= BASE_URL_ADMIN . '?act=chi-tiet-khach-hang&id_khach_hang=' . $binhLuan['tai_khoan_id'] ?>"><?= $binhLuan['ho_ten'] ?></a></td>
                            <td><?= $binhLuan['noi_dung'] ?></td>
                            <td><?= $binhLuan['ngay_dang'] ?></td>
                            <td>
                              <form action="<?= BASE_URL_ADMIN . '?act=xoa-binh-luan' ?>" method="POST">
                                <input type="hidden" name="id_binh_luan" value="<?= $binhLuan['id'] ?>">
       
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có muốn xóa bình luận này không?')">
                                      Xóa
                                    </button>
                                    
                                  </a>
                                 

                                </div>

                              </form>

                            </td>
                          </tr> 
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--footer-->
<?php include './views/layout/footer.php'; ?>

<!-- /.control-sidebar -->
</div>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  var faqs_row = 0;

  function addfaqs() {

    html = '<tr id="faqs-row' + faqs_row + '">';
    html += '<td><input type="text" class="form-control" placeholder="User name"></td>';
    html += '<td><input type="text" placeholder="Product name" class="form-control"></td>';
    html += '<td class="text-danger mt-10"> 18.76% <i class="fa fa-arrow-down"></i></td>';
    html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

    html += '</tr>';

    $('#faqs tbody').append(html);

    faqs_row++;
  }
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function() {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>

</html>