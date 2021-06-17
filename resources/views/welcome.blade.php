<!DOCTYPE html>
<html>
  <head>
    <title>Home | App-MSB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('theme.css') }}" media="screen" rel="stylesheet" type="text/css">
    <!-- Served from Big Cartel MySQL Storefront -->

    <!-- Big Cartel generated link tags -->
    <link rel="canonical" href="https://laravel.bigcartel.com/" />
    <link rel="alternate" href="https://laravel.bigcartel.com/products.xml" type="application/rss+xml" title="Product Feed" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,500,700|Varela+Round" type="text/css" title="Google Fonts" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="https://assets.bigcartel.com/account_images/3152111/laravel-logo.png?auto=format&amp;fit=max&amp;h=180&amp;w=180" />
    <!-- end of generated link tags -->
  </head>

  <body id="home_page" class="theme">
    <a class="skip-link" href="#main">Skip to main content</a>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1504448526533606&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <header>
      <div class="wrapper">
        <nav class="header-nav" role="navigation" aria-label="Main">
          <ul>
            <li><a href="/">Produk</a></li>
            
            <li><a href="/infopemesanan">Info Pemesanan</a></li>
          </ul>
        </nav>

        <div class="branding">
          <a href="/" title="Home">
            
              <img class="store-logo" srcset="https://assets.bigcartel.com/theme_images/54651347/laravel-logo.png?auto=format&fit=max&h=200&w=1068, https://assets.bigcartel.com/theme_images/54651347/laravel-logo.png?auto=format&fit=max&h=400&w=2136 2x" src="https://assets.bigcartel.com/theme_images/54651347/laravel-logo.png?auto=format&fit=max&h=200&w=1068" alt="laravel Home">
            
          </a>
        </div>
      </div>
      <nav class="header-nav mobile-nav" aria-label="Mobile Main" role="navigation">
        <ul>
          <li>
            <a href="/">Produk</a>
          </li>
          <li>
            <a href="#">Pemesanan</a>
          </li>
          <li>
            <a href="#">Info Admin</a>
          </li>
        </ul>
      </nav>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </header>
    <div class="main" id="main">
      <div class="fade-in wrapper">
      <h1 class="visually-hidden">Featured Products</h1>
      <div class="product-list-container">
        <div class="product-list">
            @foreach($barang as $b)
            <div class="product-list-thumb crop-to-square under_image">
              <a class="product-list-link"  href="#" title="Produk &quot;Media Sarana Berkah&quot;">
                <div class="product-list-thumb-container">
                  <figure class="product-list-image-container">
                    <div class="image-wrapper">
                      <img data-toggle="modal" data-target="#data-{{ $b->id }}"  alt="" class="lazy product-list-image image-wide" src="{{ \Storage::url($b->foto) }}" data-src="{{ \Storage::url($b->foto) }}" data-srcset="{{ \Storage::url($b->foto) }} 2x, {{ \Storage::url($b->foto) }} 1x" >
                    </div>
                  </figure>
                </div>
                <div class="product-list-thumb-info">
                  <div class="product-list-item-background"></div>
                  <div class="product-list-thumb-info-headers">
                    <div data-toggle="modal" data-target="#data-{{ $b->id }}" class="product-list-thumb-name">{{ $b->nama_barang }}</div>
                    <div class="product-list-thumb-price">
                        <span data-toggle="modal" data-target="#data-{{ $b->id }}" class="currency_sign">Rp. </span>{{ $b->harga }}
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
            <div class="pagination justify-content-center">
              {{ $barang->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach($barang as $bbb)
    <!-- Modal -->
    <div class="modal fade" id="data-{{ $bbb->id }}" tabindex="-1" aria-labelledby="Modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">View Details</h5>
            <button type="button" class="btn-close" data-dismiss="modal" id="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">  
            <img alt="Foto Barang" class="lazy product-list-image image-wide img-fluid" src="{{ \Storage::url($bbb->foto) }}" data-src="{{ \Storage::url($bbb->foto) }}" data-srcset="{{ \Storage::url($bbb->foto) }} 2x, {{ \Storage::url($bbb->foto) }} 1x" >
            <p class="card-text "><b>Nama Barang : {{ $bbb->nama_barang }}</b></p>
            <p class="card-text">Stock Barang : {{ $bbb->stock }}</p>
            <p class="card-text">Harga Normal : <span class="currency_sign">Rp. </span>{{ $bbb->harga }}</p>
            <p class="card-text">Harga Member : <span class="currency_sign">Rp. </span>{{ $bbb->harga_member }}</p>
            <p class="card-text">Keterangan : {{ substr($bbb->keterangan, 0, 250) }}</p>
            
          </div>
          <div class="modal-footer">
            <a class="btn btn-success btn-lg" style="width: 1000px;" href="https://wa.me/+6283188855973?text=Assalamu%27alaikum%20warahmatullahi%20wabarakatuh%20saya%20ingin%20membeli%20{{ $bbb->nama_barang }}%20dengan%20harga%20Rp.%20{{ $bbb->harga }}">Beli</a>
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" id="modal" aria-label="Close">Batal</button>
            <!-- <p class="card-text"><small class="text-muted justify-content-center">Copyright &copy; 2021 App - Media Sarana Berkah</small></p> -->
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <footer>
      <div class="wrapper">
        <nav class="footer-nav" id="footer" role="navigation" aria-label="Footer">
          <ul class="footer-links">
            <li><a href="/">Home</a></li>

            <li><a href="/">Produk</a></li>
            
            <li><a href="/infopemesanan">Info Pemesanan</a></li>
            
          </ul>
          <p class="card-text"><small class="text-muted">Copyright &copy; 2021 App - Media Sarana Berkah</small></p>
        </nav>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cache1.bigcartel.com/api/5/api.usd.js?v=1"></script>
    <script src="//cache1.bigcartel.com/theme_assets/6/2.4.12/theme.js?v=1"></script>
  </body>
</html>