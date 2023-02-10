
@extends('pages_layouts.layout')

@section('content')

<div class="main-container">


 <br> </br>

        <!-- SECTION -->
        <div class="section">
        <br> </br>
            <div class="search-box">
                <div class="search-div">
                    <input type="text" id="search" class="search" placeholder="Search items...">
                </div>
                <input type="button" value="X" class="btn">
            </div>
            <div class="section-holder">
                <div class="section-container">
                    <!-- PRODUCT -->

                    <!-- PRODUCT -->
                    @foreach ($Hotel as $list )
                    <div class="product-container">
                        <div class="product-img-container">
                           <img src =" /storage/images/{{$list->img}}" >
                        </div>
                        <div class="product-name">{{$list->hotel_name}}</div>
                        <div class="product-action-price">
                            <div class="cart-view">
                                <div class="add-cart">
                                    <a href="#">Book Now</a>
                                </div>
                                <div class="view">
                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">View</a>

                                </div>

                            </div>
                            <div class="price">{{$list->price}}<span></span></div>
                        </div>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      {{$list->about_your_hotel}}

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>

      </div>

    </div>
  </div>
</div>
                  @endforeach
                </div>
            </div>





            <!-- PAGINATION -->
            <div class="pagination">
                <a href="#"><div><</div></a>
                <a href="#"><div>1</div></a>
                <a href="#"><div>2</div></a>
                <a href="#"><div>3</div></a>
                <a href="#"><div>></div></a>
            </div>
        </div>
        <!-- FOOTER -->
        <div class="footer">
            <div class="developer">Developed by HNDIT BADULLA.</div>
        </div>
    </div>




@endsection

