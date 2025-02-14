<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ps-3" href="#">
          <img src="./assets/img/logo GPI.png" alt="" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mb-lg-2 flex-grow-1 justify-content-center ps-3">
                <li class="nav-item ps-3">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link active" aria-current="page" href="#">Transaksi</a>
                </li>
            </ul>
            <div class="dropdown">
              <button class="btn dropdown-toggle welcome-btn pe-4 ms-4" id="welcomeBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome, <span id="nav-username">Azzahra</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="bi bi-person-fill" viewBox="0 0 16 20">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                  </svg>
              </button>
              <ul class="dropdown-menu" aria-labelledby="welcomeBtn">
                  <li><a class="dropdown-item" href="#profile">Profile</a></li>
                  <li><a class="dropdown-item" href="#logout">Logout</a></li>
              </ul>
          </div>
        </div>
    </div>
</nav>

      <div class="container detail-container mt-5">
        <div class="row">
          <div class="col-xl-6">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/img/produk1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/produk2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/produk3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="product-info">
              <h2>Product Name</h2>
              <p>Harga: Rp100.000</p>
              <p>Stok: 20</p>
              <p>Deskripsi: This is a great product.</p>
              <div class=" mt-auto actions">
                <div class="quantity">
                  <button onclick="decreaseQuantity()">-</button>
                  <input type="number" id="quantity" value="1" min="1" max="999">
                  <button onclick="increaseQuantity()">+</button>
                </div>
                <button class="btn btn-dtl-beli" data-bs-toggle="modal" data-bs-target="#orderModal">Beli</button>
                <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="orderForm">
                          <div class="form-group">
                              <label for="customerName">Nama Customer:</label>
                              <input type="text" class="form-control" id="customerName" readonly>
                          </div>
                          <div class="form-group">
                              <label for="orderTime">Waktu Pembelian:</label>
                              <input type="text" class="form-control" id="orderTime" readonly>
                          </div>
                          <div class="form-group">
                              <label for="productName">Nama Produk:</label>
                              <input type="text" class="form-control" id="productName" readonly>
                          </div>
                          <div class="form-group">
                              <label for="productQuantity">Kuantitas Produk:</label>
                              <input type="number" class="form-control" id="productQuantity" readonly>
                          </div>
                          <div class="form-group">
                              <label for="totalPrice">Total Harga:</label>
                              <input type="text" class="form-control" id="totalPrice" readonly>
                          </div>
                      </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Bayar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      


      <div class="floating-whatsapp-button">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="#" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
      </div>

      <footer>
        <div class="container pt-5 footer">
          <div class="row row-content">
            <div class="col-md-4">
              <h3 class="about-brand pb-2">Contact Us</h3>
              <div class="row pb-3 footer-link">
                <a href="#"  class="row-content">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                    082298124620 - Benton Sitorus
                  </i>
                </a>
                <a href="#"  class="row-content pt-4">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                    08161894832 - Dasrizal
                  </i>
                </a>
                <a href="#"  class="row-content pt-4">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" class="i-garish" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 16 16">
                        <image width="100%" height="100%" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAABNCAYAAABaMa29AAAa9klEQVR4nO2dC5iPVf7Az8u4rKZ1V8i1Qmoycsklt2YsKoQWpU0qxVIKkShUxFOPEpvcsmEt5bLabeWSUiJSEqm2RiqR0rg0myHm/J/PmffM/513znl/l7n4bTPf5znM772c97znfM/3/v2+jpRS5BLihBCNhBC/CiGOhejqrBCiuOF4qhDiFyFERm4HUwSxBblGsKVLl17xwgsv7C5a198ejB8/3unQoUPu3gsEi7a99NJLokyZMmBoUfsNtvLly8vXX389VzgSNQV76623RK9evWRqaqqYNGmS6Ny5s3Mut/D06dPlK6+8IjZv3nxOx/Fbgb/+9a9yxowZ4oILLmCtnQYNGkT3ZtFg5VdffcWDFZYPGjRIZmRk5ArL86Jdd9118g9/+IM81+P4rbRTp06JBx54QK1xvXr1FCGJ5t0ivuH48ePihhtuUA/u0qWLTE9Pj4lJ/f3vfy+HDh1ahGB52NLS0kTPnj3VWvfv31+eOXMm/xFswoQJ6oGJiYnyxx9/jImJOHDggChWrJicPXt2EYLlcYOgNGrUSK35iy++mL8ItmTJElmqVClZt25d+cknn8TKJJTesGFDKybgP//5T6FHiPxomzdvFpUrV5YodG+//Xb+INh///tfUatWLYXJq1evjqUJaPjwww/LSy+9VJ49e7bQI0N+NQR+1r5p06YRcYmwL7zjjjsUck2dOlXEglDvadUbN26s5MHCjgT52di8Q4cOVUg2YcKEvEWwZcuWqY5hjb/++mtMvfjPP/+sNNphw4YVIVg+tyNHjoiKFStKx3Hk1q1b8wbB0BJr1qwpy5YtK7ds2RLyehCwIFkVAj7I/9prrxV6BCiI9q9//UsUL15cXn311WGJJCEvmDx5slrAKVOmBF0XL6Vs+9prrylb1Mcff1xQL1wOgyDj+/LLL+MK++IXVPvzn/+s5nzx4sW5QzCoA5Tr4osvlr/88kvQtTdu27ZNVq1aVT24ABGs9+jRo2XJkiVh3QmFfeELqv3www+iQoUK8qKLLgqFF8EIhmAPv8UFE3Td3r17Bzdo0CDLH/f3v/+9oF621ZVXXimTkpKQv2oW9oUvyDZt2jQt8AfKvtYTn332WUl4bdu2bQM72L59u6hevbpCrFtuuUViL8HqWxAve/LkydLlypWT999/P88rYpEF2E6ePCkgKnhQ9u/fb312MYuLsvjKlSt7FC9eXDz11FNW5/Fnn30mbrvtNvndd9+J7t2743B2kpKSBAbPgoA9e/bEHzt2TNSrV4+nnfmtO6BjCUqXLi2mTJnioMUvX77chkdmCnbgwIG6UAbcQTbMxPCKcVNTLn5zfMqUKerY0aNHO2Blz8ddVX3OnDmyRIkSWPAbFnaKcq5as2bNJAb4n3/+ubhpDMaBDR8+XCHJ8uXLjWwH9bRv377qmhtvvFEi9Olzu3btGsDxNWvWgJxhC94Yb999910VAoTRlHbvvffKb775xnbPnSNHjpQXXnghz3mysC/0uWrTpk1TePDss8+yDsVCIhgk75JLLpHt27fHzmEUnHF60inXcb33XHp6etM6derIxx57jAdeGC5yPf/88wI/pz9wr127djbjbo82bdrIrl278pxmhX2hz1WDczVs2FC2atWKdWoaEsE2bNhQioWdPXv2LSYWt3PnTvivMrx+9NFHpher0KFDB/XAcBGMqIxKlSoZo0KxHJtikdLT02ciYI4YMYLn1CjsC30u29ixY6UbbPBQSATr0aOHQp60tDSj/IQhFe1y5syZNvkscerUqRIkPHTo0DvhvPiaNWuELeQYrRRB3n/Pxo0bh3N+/fr1jKNSYV/kc9kOHjyo1srkrsv2A8NqfHy8HDhwoAl54l599dWrsYv169cvyAxRbt26deqB27dvfzicFye234ZgrVu3NrokZs2aVYnzR44cqVfYF/hct7NnzyqZGZeinxhk+zFnzhzhUgXToOtdc8018vzzz5f79u0bFPRSaWlpkgDAiRMngojVQk2AjYLFxcXJf//738Z7CNW+4oorooqyLGp53uT8+fPVmvmTRLL9IDz2sssuMy7arl27KuGSefTRR+mvVYhBHkQ4b9myJdd2C/VCuBvuuusu5TXQyEXc0csvv2x1nF9++eWye/fuRREUMdLS09OVaOUavXMi2IkTJ4pVqVLFGvaC7MXC79y5s2EY9q0V2MOgdlLKTuFMwunTpwUGW9382qm3QYZRChAuC/vCxlJDfse6740XjNMG1w8//LAq9qwuXbpc5DfGcpxQnX79+onExMS9YRiUR9SrV68nSQMjR47cdNFFObrMFaB1Ept07bXXFqWoxRB06dJFrFq1Suzfv79KnTp1flAj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"/>
                    </svg>
                    CV Garish Indoespec
                  </i>
                </a>
                <a href="#"  class="row-content pt-4 pb-2">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" class="i-garish" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <image width="20" height="20" xlink:href="data:img/png;base64,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"/>
                        </svg>
                     CV Tridaya
                    </i>
                  </a>
                </ul>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-sm-0 pe-5">
              <h3 class="mb-3">Temukan Kami</h3>
              <ul class="p-0">
                <li><span>Alamat Pabrik</span> </li>
                <li class="mt-1">Jl Kaligandu No.43 RT/RW 001/001
                  Kel. Wanajaya Kec. Telik Jambe Barat
                  Kabupaten Karawang </li>
                <li class="mt-3"><span>Alamat Kantor</span></li>
                <li class="mt-1">Jl Ds Satria Jaya Kp Gebang No 77 RT/RW 02/09
                  Karang Satria Tambun Utara Bekasi 17510
                  Jawa Barat, Indonesia</li>
              </ul>
            </div>
            <div class="col-md-4 mt-4 mt-sm-0">
              <h3 class="mb-3">PT. Garish Plastik Indoespec</h3>
              <p>Jasa Injection, Manufacture PE (Foam Bag, Foam Sheet, Laminasi, Bonding, Insulation Roof), PU Foam Tape, EPDM Foam Tape, Styrofoam & Produk Rubber</p>
            </div>
          </div>
          <div class="row row-copy mt-4 mt-sm-0">
            <div class="col-md-6">
              <p>&copy; 2024 PT. GPI All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>