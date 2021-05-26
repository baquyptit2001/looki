@extends('front-end.layout.master')

@section('title', 'Compare')

@section('main')
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">compare</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">compare</li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->
  <!-- product tab start -->
  <section class="compare-section theme1 pt-80 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="title mb-30 pb-25 text-capitalize">compare</h3>
          <div class="table-responsive">
            @if (count($compare->items))
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">product info</th>
                    @foreach ($compare->items as $item)
                      <th scope="col" class="text-center">
                        <img src="{{ asset('uploads/product/'.$item['image']) }}" alt="img" />
                        <span class="sub-title d-block"
                          ><a href="{{ route('product', ['id'=>$item['id']]) }}" >{{ $item['name'] }}</a></span
                        >
                        <a href="{{ route('product', ['id'=>$item['id']]) }}" class="action btn btn-dark btn--lg">
                          add to cart</a
                        >
                      </th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Price</th>
                    @foreach ($compare->items as $item)
                      <td class="text-center">
                        <span class="whish-list-price"> ${{ $item['price'] }} </span>
                      </td>
                    @endforeach
                  </tr>
                  <tr>
                    <th scope="row">Description</th>
                    @foreach ($compare->items as $item)
                      <td class="text-center">
                        <p>{{ $item['description'] }}</p>
                      </td>
                    @endforeach
                  </tr>
                  <tr>
                    <th scope="row">Size</th>
                    @foreach ($compare->items as $item)
                    <td class="text-center">
                    @foreach ($item['size'] as $sz)
                    {{ $sz['size'] }}
                    @endforeach
                  </td>  
                      {{-- <td class="text-center">{{ $item['size'] }}</td>   --}}
                    @endforeach
                  </tr>
                  <tr>
                    <th scope="row">Action</th>
                    @foreach ($compare->items as $item)
                      <td class="text-center"><a href="{{ route('removeCompare', ['id'=>$item['id']]) }}">X</a></td>  
                    @endforeach
                  </tr>
                </tbody>
              </table>
            @else
                Không có sản phẩm nào để so sánh
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product tab end -->
@endsection
